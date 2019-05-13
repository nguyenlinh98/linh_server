<?php
	require_once 'Models/Model.php';
	require_once ('Models/Database.php');
	  /**
	  	 * 
	  	 */
	  	class Admins extends Model
	  	{
	  		protected $table ='Admins';
	  		protected $fillCol = ['id_admin','name','address','phone','sex','age','image',' description',' id_depart','degree'];
	  	
	  		public function addAdmin($data)
		    {
		    	$password = md5($data['password']);
	    		$this->query = "INSERT INTO ".$this->table."(email,password) values('".$data['email']."','".$password."')"; 
	    		$this->result = $this->query($this->query);
	    		 // print_r($this->result);
	    		//lays id moi them vao 
	    		$id = $this->max('id')->get()['MAX(id)'];
		    	//  //;ay ra doi tuong moi them
		    	$this->find($id);
		    	return $this;		
	  	    }
	  	    public function addDetail($data,$id_admin)
	  	    {	
	  	    	//laays id moi them vao
	  	    	print_r($data);
	  	    	$this->query = "INSERT INTO Admin_detail (id_admin,name,address,phone,sex,age,image,description, id_depart,degree) values (".$id_admin.",'".$data['name']."','".$data['address']."','".$data['phone']."',".$data['sex'].",".$data['age'].",'".$data['image']."','".$data['description']."',".$data['id_depart'].",'".$data['degree'].")";
	  	    	 die($$this->query);
	  	    	$this->result = $this->query($this->query);
	  	    	//lấy ra admin mới cập nhật detail
		    	$this->where(['id_admin' => $id]);
	  	    	return $this;
				
	  	    }
	  	}	
 ?>
