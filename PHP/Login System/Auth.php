<?php

require_once "Database.php";

class Auth extends Database
{
    private static string $sessionName = "auth_user";
    private static string $csrfTokenName = "csrf_token";
    private static string $cookieName = "remember_token";

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

    public function setRememberToken(int $userId): void
    {
        $token = bin2hex(random_bytes(32));
        $expires = date("Y-m-d H:i:s", strtotime("+30 days"));

        $this->query(
            "UPDATE users SET remember_token = ?, remember_expires = ? WHERE id = ?",
            "ssi",
            $token,
            $expires,
            $userId
        );

        setcookie(self::$cookieName, $token, strtotime("+30 days"), "/", "", true);
    }

    public function loginFromCookie(): bool
    {
        $token = $_COOKIE[self::$cookieName] ?? "";

        if (empty($token)) return false;

        $result = $this->query(
            "SELECT id, name, email FROM users WHERE remember_token = ? AND remember_expires > NOW() LIMIT 1",
            "s",
            $token
        );

        if (!$result instanceof mysqli_result) return false;

        $user = $result->fetch_assoc();

        if (!$user) return false;

        session_regenerate_id(true);

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
        unset(
            $_SESSION[self::$sessionName],
            $_SESSION[self::$csrfTokenName],
        );

        if (isset($_COOKIE[self::$cookieName])) {
            setcookie(self::$cookieName, "", time() - 3600, "/", "", true);
        }

        session_regenerate_id(true);
    }
}
