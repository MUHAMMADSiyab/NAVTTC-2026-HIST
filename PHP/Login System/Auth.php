<?php

require_once "Database.php";

class Auth extends Database
{
    private static string $sessionName = "auth_user";
    private static string $csrfTokenName = "csrf_token";

    public function __construct()
    {
        parent::__construct();

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function generateCsrfToken(): string
    {
        if (empty($_SESSION[self::$csrfTokenName])) {
            $_SESSION[self::$csrfTokenName] = bin2hex(random_bytes(32));
        }

        return $_SESSION[self::$csrfTokenName];
    }

    public function validateCsrfToken(string $token): bool
    {
        return isset($_SESSION[self::$csrfTokenName])
            && hash_equals($_SESSION[self::$csrfTokenName], $token);
    }

    public function check(): bool
    {
        return !empty($_SESSION[self::$sessionName]);
    }

    public function user(): ?array
    {
        return $_SESSION[self::$sessionName] ?? null;
    }

    public function attempt(string $email, string $password): bool
    {
        $result = $this->query(
            "SELECT id, name, email, password FROM users WHERE email = ? LIMIT 1",
            "s",
            $email
        );

        if (!$result instanceof mysqli_result) {
            return false;
        }

        $user = $result->fetch_assoc();

        if (!$user || !password_verify($password, $user['password'])) {
            return false;
        }

        session_regenerate_id(true);

        unset($user['password']);

        $_SESSION[self::$sessionName] = $user;

        return true;
    }

    public function redirectIfAutenticated(string $to = "dashboard.php"): void
    {
        if ($this->check()) {
            header("Location: $to");
            exit;
        }
    }

    public function requiresAuth(string $to = "login.php"): void
    {
        if (!$this->check()) {
            header("Location: $to");
            exit;
        }
    }

    public function logout(): void
    {
        unset($_SESSION[self::$sessionName], $_SESSION[self::$csrfTokenName]);
        session_regenerate_id(true);
    }
}
