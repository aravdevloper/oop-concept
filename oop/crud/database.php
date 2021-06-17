<?php

	
     
    
    class database{

			private $db_hostname = "localhost";
			private $db_username = "root";
			private $db_password = "";
			private $db_name = "crud_vishal";

		    private	$conn = FALSE;
		    private $mysqli = "";
		    private $result = array();


	        public function __construct(){

			if(!$this->conn){
			
			$this->mysqli = new mysqli($this->db_hostname,$this->db_username,$this->db_password,$this->db_name);
			$this->conn = TRUE;

			if($this->mysqli->connect_error){
			$this->result = array_push($this->result,$this->mysqli->connect_error);
			return FALSE;

			}
			else{
				return TRUE;
			}

			}
			}

		    public function insert($table,$params=array()){
		    if($this->tableExists($table)){
		    print_r($params);
		    
		    $table_cloumn = implode(',', array_keys($params));
		    $table_value = implode("', '", $params);
	       $sql =  "INSERT INTO $table ($table_cloumn) VALUES ('$table_value')";
			
			if($this->mysqli->query($sql)){
		    array_push($this->result, $this->mysqli->insert_id);
		    return true;
		    }
		    else{
		    array_push($this->result, $this->mysqli->error);
		    return false;
		    }
		    

		    	
		    }else{
		    	return FALSE;
		    }
		   
			}

			public function sql($sql){
			$query = $this->mysqli->query($sql);
			if($query){
			$this->result = $query->fetch_all(MYSQLI_ASSOC);
			return true;
			}
			else{
			array_push($this->result, $this->mysqli->error);
			return false;
			}
			}
			/*
		    public function select($table,$row = "*",$join = null, $where = null, $order = null, $limit = null){
	        if($this->tableExists($table)){
	        $sql = "SELECT $row FROM $table";
	        if($join != null){
	        $sql .= " JOIN $join";
	        }
	        if($where != null){
	        $sql .= " WHERE $where";
	        }
	        if($order != null){
	        $sql .= " ORDER BY $order";
	        }
	        if($limit != null){
	        if($_GET['page']){
	        $page = $_GET['page'];
	        }else{
	        $page = 1;
	        }
	        $start = ($page - 1)* $limit;
	        $sql .= " LIMIT $start,$limit";
	        }
	        echo $sql."<br>";

	        $query = $this->mysqli->query($sql);
			if($query){
			$this->result = $query->fetch_all(MYSQLI_ASSOC);
			return true;
			}
			else{
			array_push($this->result, $this->mysqli->error);
			return false;
			}


	        }else{
	        	return FALSE;
	        }
			}
			*/

			 public function delete($table, $where = null){
			if($this->tableExists($table)){
			$sql = "DELETE FROM $table";
			if($where != null){
			$sql .= " WHERE id =  $where";
			}
			if($this->mysqli->query($sql)){
		    array_push($this->result, $this->mysqli->affected_rows);
		    return true;
		    echo "now data has been delete";

		    }
		    else{
		    array_push($this->result, $this->mysqli->error);
		    return false;
		    }
			}
			else{
			    return FALSE;
			}
			}

		    public function update($table,$params=array(),$where = null){
			if($this->tableExists($table)){

			$args = array();
			foreach ($params as $key => $value) {
			$args[] = "$key = '$value'";
			}
			$sql = "UPDATE $table SET ".implode(', ', $args);
			if($where != null){
			$sql .= "WHERE $where";
			}
			if($this->mysqli->query($sql)){
			array_push($this->result, $this->mysqli->affected_rows);
			return TRUE;// now data has been insert..........................
			}else{
			array_push($this->result, $this->mysqli->error);
			return FALSE;
			}


		    }
		    else{
		    return FALSE;
		    }
			}
		

	    private function tableExists($table){
		$sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
		$tableInDb = $this->mysqli->query($sql);
		if($tableInDb){
		if($tableInDb->num_rows == 1){
		return TRUE;
		}else{
			array_push($this->result, $table."table does not exsist");
			return FALSE;
		 }
	     }
		}

		public function getresult(){
			$val = $this->result;
			$this->result = array();
			return $val;
		}

		
		

	    public function __destruct(){
    	if($this->conn){
    	if($this->mysqli->close()){
    	$this->conn = FALSE;
    	return TRUE;	
    	}
    	}else{
    		return FALSE;
    	}
        }

	    


		}// database class.................


?>