<?php
include "DB.php";

abstract class Main{
    protected $table;
    abstract public function insert();
    abstract public function update($id);


    public function readById($id){
        $sql="select*from $this->table where id=:id";
        $stmt=DB::prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function readAll(){
        $sql="select*from $this->table";
        $stmt=DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // public function delete($id){
    //     $sql='delete from $this->table where id=:id'; //small leter kaj korbe na
    //     $stmt=DB::prepare($sql);
    //     $stmt->bindParam(':id',$id);
    //    return  $stmt->execute();
    // }


    public function delete($id){

        $sql="DELETE FROM $this->table WHERE id=:id";
        $stmt=DB::prepare($sql);
        $stmt->bindParam(':id',$id);
       return  $stmt->execute();


    }

}

?>