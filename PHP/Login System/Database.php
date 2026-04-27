<?php

class Database
{
    protected mysqli $db;

    private static string $host = "localhost";
    private static string $username = "root";
    private static string $password = "P@ssw0rd";
    private static string $database = "school";

    public function __construct()
    {
        $this->db = new mysqli(
            self::$host,
            self::$username,
            self::$password,
            self::$database
        );

        if ($this->db->connect_errno) {
            throw new RuntimeException("Database connection failed. " . $this->db->error);
        }
    }

    protected function query(
        string $sql,
        string $types,
        mixed ...$params
    ): mysqli_result | bool {
        $stmt = $this->db->prepare($sql);

        if (!$stmt) {
            throw new RuntimeException("Failed to prepare statement. " . $this->db->error);
        }


        if ($types !== '' && count($params) > 0) {
            $stmt->bind_param($types, ...$params);
        }

        $stmt->execute();
        $result = $stmt->get_result();

        return $result !== false ? $result : ($stmt->affected_rows >= 0);
    }
}




// $stmt->bind_param('siss', $name, $age, $email, $address)