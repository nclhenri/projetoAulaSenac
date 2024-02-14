<?php 

class Conexao{

    public static function LigarConexao(){

        $connect = new PDO('mysql:dbname=dbvivabem;host=127.0.0.1:3312', 'root', '');
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connect;
    }

}

?>