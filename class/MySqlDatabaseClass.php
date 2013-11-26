<?php
	class MySqlDatabaseClass{
		
		//fields
		private $db_connection;
	


	/*dit is de constructor van de MySqlDatabaseClass
	*de constructor herken je in php aan het feit dat
	*de naam construct is 
	*/
	
	public function __construct(){
	// Velden roep je aan met $this->naam van het veld zonder $teken er voor.	
	$this->db_connection = mysql_connect(SERVERNAME,
										USERNAME,
										PASSWORD);
		
	}
}
?>