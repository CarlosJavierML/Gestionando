<?php

/**
 * modelo del estado
 */
class centro
{
    private $id_centro;
    private $nombre;
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new Database;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function editCentro($data)
    {
        try {
            $strWhere= 'id_centro='.$data['id_centro'];
            $this->pdo->update('centro',$data,$strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function deleteCentro($data)
    {
        try{
            $strWhere='id_centro='.$data['id_centro'];
            $this->pdo->delete('centro',$strWhere);
        }catch(PDOException $e){
            die($e->getMessage());
        }

    }
    public function getById($id_centro)
    {
        try{
            $strSql="SELECT * FROM centro WHERE id_centro=:id_centro";
            $array=['id_centro'=>$id_centro];
            $query=$this->pdo->select($strSql,$array);
            return $query;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}
