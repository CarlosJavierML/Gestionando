<?php

include_once 'Conexion.php';

class User extends DB{
    
    private $nombre;
    private $username;

    public function userExists($cedula, $pass ){
        $md5pass = md5($pass);

        $query = $this->connect()->prepare('SELECT * FROM usuario  WHERE cedula = :cedula AND contraseña = :pass');
        $query->execute(['cedula'=> $cedula, 'pass' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($cedula){
        $query = $this->connect()->prepare('SELECT * FROM usuario  WHERE cedula = :cedula');
        $query->execute(['cedula'=> $cedula]);

        foreach ($query as $currentUser){
            $this->nombre= $currentUser['cedula'];
            $this->username = $currentUser['username'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
}