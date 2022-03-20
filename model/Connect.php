<?php

class Connect {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = '_mvc_oop';

    private function cnt() {
        $connect = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        mysqli_set_charset($connect, 'utf8');
        return $connect;
    }

    public function select($sql) {
        $connect = $this->cnt();
        $query = mysqli_query($connect, $sql);
        return $query;
    }

    public function execute($sql) {
        $connect = $this->cnt();
        mysqli_query($connect, $sql);
    }



}