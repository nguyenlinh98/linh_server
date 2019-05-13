<?php
	require_once('Models/Model.php');
	require_once('Models/Database.php');
	 /**
	   * 
	   */
	  class Customer extends Model
	  {
	  	protected $table = 'Customers';
	  	protected $fillCol = ['id_customer','name','address','phone','sex','age'];
	  	/**
	  	method to add new customer 
	  	@return model\customer
	  	**/
	    public function addCustomers($data)
	    {
	    	$password = md5($data['password']);
    		$this->query = "INSERT INTO ".$this->table."(email,password) values('".$data['email']."','".$password."')"; 
    		$this->result = $this->query($this->query);
    		//laays id moi them vao 
	    	$id = $this->max('id')->get()['MAX(id)'];
	    	 //;ay ra doi tuong moi them
	    	$this->find($id);
	    	return $this;
  	    	
	    	
  	    }

  	    public function addDetail($data,$id)
  	    {
  	    	//laays id moi them vao 
  	    	$Customer['id']=$id;
		    	 $id = $this->max('id')->get()['MAX(id)'];
  	    		$query = "INSERT INTO Customer_detail (id_customer,name,address,phone,sex,age) values (".$id.",'".$data['name']."','".$data['address']."','".$data['phone']."',".$data['sex'].",".$data['age'].")";
  	    		$this->query =$query;
  	    	$this->result = $this->query($this->query);
  	    	// $this->throwError();
  	    	
  	    	return $this;
			
  	    }
  	   
	  } 
 ?>