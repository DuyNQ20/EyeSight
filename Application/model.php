<?php 
	/**
	 * 
	 */
	class Model
	{
		public function fetch($sql)
		{
			global $conn;
			$result = mysqli_query($conn,$sql);

			$arr = array();
			while ($row = mysqli_fetch_object($result))
			{
				$arr[] = $row;
			}
			return $arr;	
		}
		
		public function fetch_one($sql)
		{
			global $conn;
			$result = mysqli_query($conn, $sql);
			$arr = mysqli_fetch_object($result);
			return $arr;
		}
		public function execute($sql)
		{
			global $conn;
			if(mysqli_query($conn, $sql))
				return mysqli_insert_id($conn);
			return 0;
		}
		public function num_rows($sql)
		{
			global $conn;
			$result = mysqli_query($conn, $sql);

			return mysqli_num_rows($result);
		}
	}
 ?>