<?php 
    class Database{
        // properti
        public $host = "localhost";
        public $username = "root";
        public $password = "";
        public $database = "db_php_0033";
        public $connect;

        function __construct()
        {
            $this->connect = mysqli_connect($this->host, $this->username, $this->password);
            mysqli_select_db($this->connect, $this->database);

        }

        function tampilData(){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_users_0033");
            $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
            // var_dump($rows);
            return $rows;
        }

        function tambahData($nama, $jenis_kelamin, $alamat, $nohp, $gambar){
            mysqli_query($this->connect, query: "INSERT INTO tb_users_0033 VALUES (NULL, '$nama', '$jenis_kelamin', '$alamat', '$nohp', '$gambar')");
        }

        function editData($id){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_users_0033 WHERE id=$id");
            $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
            return $rows;
        }

        function updateData($id, $nama, $jenis_kelamin, $alamat, $nohp, $gambar){
            mysqli_query($this->connect, "UPDATE `tb_users_0033` SET `nama` = '$nama', `jenis_kelamin` = '$jenis_kelamin', `alamat` = '$alamat', `nohp` = '$nohp', `gambar` = '$gambar' WHERE `tb_users_0033`.`id` = '$id'");
        }

        function hapusData($id){
            mysqli_query($this->connect, "DELETE FROM `tb_users_0033` WHERE `tb_users_0033`.`id` = '$id'");
        }

        

    }

?>