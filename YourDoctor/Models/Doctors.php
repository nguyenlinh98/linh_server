<?php
	require_once 'Models/Model.php';
	require_once ('Models/Database.php');
 // /**
 //   * 
 //   */
  class Doctors extends Model
  {
  	protected $table = 'Doctors';
    protected $fillCol=['id','name','address','phone','sex','age'];

  	public function addDoctors($name,$id_department,$image,$description,$degree)
  	{
  		$query = "INSERT INTO ".$table."(name,id_department,description,degree,,image) values('".$name."',".$id_department.",'".$description."','".$degree."','".$image."')";
  		$this->query($query);
      return $this;
  	}
  	
  	public function edit_Doctors($id_admin,$name,$id_department,$image,$description,$degree)
  	{
  		$query = "UPDATE".$table." SET (name ='".$name."',id_department = ".$id_department.",image = '".$image."',description = '".$description."',dergree = '".$degree."') where id= ".$id_admin;
  		$this->query($query);
      return $this;
  	}
  	public function del_Doctors($id_admin)
  	{
  		$query = "DELETE FROM ".$table."WHERE id".$id_admin;
  		$this->query($query);
      return $this;
  	}

  } 
 ?>