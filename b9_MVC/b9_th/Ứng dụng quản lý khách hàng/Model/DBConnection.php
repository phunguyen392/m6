<?php

namespace Model;

use PDO;




class DBConnection
{
    private $host;
    private $dbname;
    private $username;
    private $password;

    public function __construct(string $host, string $dbname, string $username, string $password = '')
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect(): PDO
    {
        $dsn = "mysql:host={$this->host};dbname={$this->dbname}";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

    //     try {
    //         $pdo = new PDO($dsn, $this->username, $this->password, $options);
    //         echo "Kết nối thành công";
    //     } catch ( $e) {
    //         echo "Kết nối thất bại: " . $e->getMessage();
    //         throw new PDOException($e->getMessage(), (int)$e->getCode());
    //     }

    //     return $pdo;
    // }
}

// Sử dụng lớp DBConnection để kết nối đến cơ sở dữ liệu
$db = new DBConnection('localhost', 'ql_khach_hang', 'root','');
$pdo = $db->connect();

// Tiếp tục thực hiện các thao tác khác với kết nối PDO

}

