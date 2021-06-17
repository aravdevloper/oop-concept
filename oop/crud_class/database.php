<?php

class database{


		private $db_host = "localhost";
		private $db_user = "root";
		private $db_pass = "";
		private $db_name  = "oop";

		private $mysqli = " ";
		private $conn = FALSE;
		private $result = array();

		public function __construct(){

		if(!$this->conn){
		$this->mysqli = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
		$this->conn = TRUE;

		if($this->mysqli->connect_error){
		array_push($this->result, $this->mysqli->connect_error);
		return FALSE;
			
		}else{
		return TRUE;
		}
			
		}
	}
		
         
		//function for insert data into database............
		
		public function insert($table, $params = array()){
		if($this->tableExsist($table)){
		//print_r($params); //Array ( [student_name] => ansu [age] => 20 [city] => agra )
		$table_columns = implode(' ,', array_keys($params)); //student_name ,age ,city
		$table_values = implode("' ,'", $params); //ansu ,20 ,agra
		
	     $sql = "INSERT INTO $table ($table_columns) VALUES ('$table_values')";
	     if($this->mysqli->query($sql)){
	     array_push($this->result, $this->mysqli->insert_id);
	     return true;
	     }else{
	     array_push($this->result, $this->mysqli->error);
	     return false;

	     }


			
		}else{
		return false;		
		}

		}

		// function for update data into databae............
		public function update($table,$params= array(),$where = null){
		if($this->tableExsist($table)){
		$argus = array();
		
		foreach ($params as $key => $value){
		$argus[] = "$key = '$value'";
		}
		
		
		
		$sql = "UPDATE $table SET ".implode(' ,', $argus);
		if($where != null) {
			$sql .= "WHERE $where";
		}
		if($this->mysqli->query($sql)){
		  array_push($this->result, $this->mysqli->affected_rows);
	      return true;
		}else{
			array_push($this->result, $this->mysqli->error);
		}
			
		}else{
		 return false;
		}


		}
		// function for delete data into databae............
		public function delete($table,$where = null){
		 if($this->tableExsist($table)){
		 $sql = "DELETE FROM $table";
		 if($where != null){
		 $sql .=  " WHERE $where";
		  }
		  if($this->mysqli->query($sql)){
		  array_push($this->result, $this->mysqli->affected_rows);
	      return true;
		}else{
			array_push($this->result, $this->mysqli->error);
			return False;
		}
			
		}else{
		 return false;
		}
		 	
		}
		

		public function select($table,$row="*",$join= null, $where = null, $order=null,$limit=null){
		if($this->tableExsist($table)){
		$sql = "SELECT $row FROM $table";
		if($join != null) {
		$sql .= " JOIN $join";
		}
		if($where != null) {
		$sql .= " WHERE $where";
		}
		if($order != null) {
		$sql .= " ORDER BY $order";
		}
		if($limit != null){
		   if(isset($_GET['page'])){
		   	 $page = $_GET['page'];
		   }
		   else{
		   	$page = 1;
		   }
		   $start = ($page - 1) * $limit;
		  $sql .= " LIMIT $start,$limit";	
		}
		echo $sql;

		$query = $this->mysqli->query($sql);
		if($query){
		$this->result = $query->fetch_all(MYSQLI_ASSOC);
		return true;	
		}else{
		array_push($this->result,$this->mysqli->error);
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
		array_push($this->result,$this->mysqli->error);
		return FALSE;
		}
		

		}

		public function pagination($table,$join= null, $where = null,$limit=null){
		if($this->tableExsist($table)){
		if($limit != null){
		$sql = "SELECT COUNT(*) FROM students";
		if($join != null){
		$sql .= "JOIN $join";	
		}
		if($where != null){
		$sql .= "WHERE $where";	
		}
		$query = $this->mysqli->query($sql);
		$total_records = $query->fetch_array();
		$total_records = $total_records[0];

		$total_page = ceil($total_records / $limit);//    give total pages...............

		$url = basename($_SERVER['PHP_SELF']); // give url................

		if(isset($_GET['page'])){
		   	 $page = $_GET['page'];
		 }
		else{
		     $page = 1;
		   }

		$output = "<ul class = 'pagination'>";
		if($page > 1){
		$output .= "<li><a  href ='$url?page=".($page - 1)."'>Prev</a></li>";
		}
		
		if($total_records > $limit ){
		for ($i=1; $i <= $total_page ; $i++){ 
		if($i == $page){
		$cls = "class='active'";
		}
		else{
		$cls = "";
		}
		$output .= "<li><a $cls href = '$url?page=$i'>$i</a></li>";
		}
		}
		if($total_page > $page) {
		$output .= "<li><a  href = '$url?page=".($page + 1)."'>Next</a></li>";
		}

		$output .= "</ul>";
		echo $output;

		}
		else{
			return FALSE;
		}


		}
		else{
			return FALSE;
		}

		}
 
		private function tableExsist($table){

		$sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
		$tableExsist = $this->mysqli->query($sql);
		if($tableExsist){
		if( $tableExsist->num_rows == 1){
	    return true;
		}else{
		array_push($this->result, $table."table does not exsist");
		return FALSE;
		}
		}
	    }

	    public function getresult(){
	    $var = $this->result;
	    $this->result = array();
	    return $var;
	    }
		
		
		

		// function for close connection with database ............
		public function __destruct(){
		if($this->conn){
		   if($this->mysqli->close()){
		   	$this->conn = FALSE;
		   	return true;
		 }	
		 else{
		 	return FALSE;
		 }
		}
		
}
}




?>