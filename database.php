<?php

class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "Akbar_123";
    private $db = "db_akademik";
    private $connection;

    public function connect() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->db);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
            echo 'gagal';
        }

        return $this->connection;
    }

    public function close() {
        if ($this->connection) {
            $this->connection->close();
        }
    }

    public function select($query){
        $connection = $this->connect(); 
    
        $result = mysqli_query($connection, $query);
        $rows = [];
    
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    
        return $rows;
    }

    public function create($post){
        $connection = $this->connect();
    
        $nama = $post['nama'];
        $alamat = $post['alamat'];
        $usia = $post['usia'];
    
        $query = "INSERT INTO mahasiswa VALUES(null, '$nama', '$alamat', '$usia')";
    
        mysqli_query($connection, $query);
    
        return mysqli_affected_rows($connection);
    }

    public function delete($id){
        $connection = $this->connect();

        $query = "DELETE FROM mahasiswa WHERE id = '$id'";
        mysqli_query($connection, $query);

        return mysqli_affected_rows($connection);

    }
}