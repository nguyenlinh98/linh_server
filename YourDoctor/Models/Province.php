<?php 
	require_once 'Models/Model.php';
	/**
	 * 
	 */
	class Province extends Model
	{
		protected $table ='Provinces';

		public function districts($province_id)
		{
			$tableList = array();
			$query = "select Districts.id,Districts.name,Districts.id_province from Provinces inner join Districts on Districts.id_province = Provinces.id where Provinces.id = ".$province_id;
			$this->query = $query;
			$this->data = $this->query($this->query);
			
			while($row = $this->data->fetch_assoc())
	        {
	          array_push($tableList,$row);
	        }
	    	return $tableList;
      		
		}

		
	}

 ?>