<?php 
	require_once('Models/Model.php');
	require_once ('Models/Database.php');
/**
 * 
 */
	class Deparment extends Model
	{
		protected $table = 'Deparment';
    protected $fillCol = ['id','name','image'];
     // add department to db
	    public function add($name,$image)
	    {
	    	 $query = "INSERT INTO ".$this->table."(name,image) values('".$name."','".$image."');";
	    	 $this->result = $this->query($query);
         return $this->result;
  	    }
          public function del($id)
        {
          $query ="delete from Deparment where id =".$id;
          $this->data = $this->query($query);
          return $this ;
        }
        public function show()
        {
          $this->all()->get();

        }
        public function edit($id)
           {
        // Cau lenh truy van co so du lieu
            $query = "SELECT * FROM ".$this->table." where id = " .$id;
              // print_r($this->query($query));
            // Thuc thi cau lenh truy van co so du lieu
            $result = $this->query($query);
            return $result->fetch_assoc();

         }
  	    public function update($name,$image,$id)
  	    {
          // $image =$_GET['image'];
          // $name = $_POST['name'];
          // $id = $_POST['name'];
  	    	$query  = "UPDATE ".$this->table." SET name = '".$name."',image ='".$image."' where id = ".$id;
          echo $query;
  	    	$this->query($query);

  	    }
	}

?>
