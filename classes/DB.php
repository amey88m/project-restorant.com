<?php 
class DB
{
	
	private $host = "localhost";
	private $username = "root";
	private $password = 1234567890;
	private $dbname = "resto";
	private $conn;



		public function connection()
		{
			$this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
				if(!$this->conn):
					mysqli_error();
					exit;	
				endif;
		}


		public function sql($query)
		{
			$result = mysqli_query($this->conn, $query);
			$rowsresult = Array();
			while($rows = mysqli_fetch_assoc($result)):
				$rowsresult[] = $rows;
			endwhile;

			if(!empty($rowsresult)):
				return $rowsresult;
			endif;
		}


		public function numRows($query)
		{
			$result = mysqli_query($this->conn, $query);
			return $result;
		}
		
		public function closedb() 
		{
			mysqli_close($this->conn);
		}
}


 ?>