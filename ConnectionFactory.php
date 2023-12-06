<?php
class ConnectionFactory {
    const servername = "localhost";
    const dbname = "bd_projeto_php";
    const username = "root";
    const password = "root";

    public static function getConnection() {
        try {
            $con = new PDO("mysql:host=".self::servername."; dbname=".self::dbname, self::username, self::password);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $con;
        } catch (PDOException $i) {
            die("Erro: <code>".$i->getMessage()."</code>");
        }
    }
}