<?php

require_once('Models/Database.php');
/**
 * 
 */
class Model extends Database
{

	///ten bang ket noi
	protected $table='';
	//cac truong du lieu can dien 
	protected $fillable = [];
	protected $query ;
	public $data = [];
	public $result;

	public function __construct()
	{
		$this->connect();
	}
	/**
	phuong thuc tim kiem du lieu qua id 
	**/
	public function find($id)
	{
		//cau lenh query 
		$this->query = "SELECT * FROM ".$this->table." WHERE id=".$id;
		$this->data = $this->query($this->query);
		return $this;
	}
	/*
	* Method to make where query in sql 
	* return /Models/{$this}
	* 
	**/
	public function where(array $data)
	{
		$query = "SELECT * FROM ".$this->table." WHERE ";
		foreach ($data as $key => $value) {
			$where .= $key."='".$value."' AND ";
		}
		$where = rtrim($where," AND");
		$this->query = $query.$where;
		$this->data = $this->query($this->query);
		return $this;
	}

	public function create(array $data)
	{
		
	}
	/*
	* Method to get data from object
	* Return array data in object
	* 
	**/
	public function get()
	{
		return $this->data->fetch_assoc();
	}

	// /*
	// * phuong thuc lay ra tat ca cac dong cua bang 
	// **/
	public function all()
	{
		$this->query = "SELECT * FROM ".$this->table;
		$tableList = array();
		$this->data = $this->query($this->query);
		while($row = $this->data->fetch_assoc())
		{
			array_push($tableList,$row);
		}
		return $tableList;
	}

	public function count()
	{
		$this->query = "SELECT COUNT('id') FROM ".$this->table;
		$this->data = $this->query($this->query);
		return $this;
	}

	/*
	* Method to make max query in sql 
	* return /Models/{$this}
	* 
	**/
	public function max($col = '')
	{
		$this->query = "SELECT MAX(".$col.") FROM ".$this->table;
		
		$this->data = $this->query($this->query);
		return $this;
	}

	public function throwIfError()
	{
		if ( empty($this->result) ) {
			throw new Exception('The email has exists ( SQL : '.$this->query.')');
		}
		return false;
	}


}

?>