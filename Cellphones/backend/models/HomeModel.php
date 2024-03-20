<?php 
	trait HomeModel{
		public function RevenueModel($month)
		{
		    $conn=Connection::getInstance();
		    $query=$conn->query("select sum(price) as tong FROM `orders` where month(date)=$month");
		    $result=$query->fetch();
		    return $result;
		}
		public function totalProduct()
		{
			$conn=Connection::getInstance();
		    $query=$conn->query("select count(id) as tong FROM `loaisp` where parent_id<>0");
		    $result=$query->fetch();
		    return $result;
		}
		public function feedBack()
		{
			$conn=Connection::getInstance();
		    $query=$conn->query("Select count(id_user) as tong FROM `rating` GROUP BY id_user");
		    $result=$query->fetchAll();
		    $tong=0;
		    foreach ($result as $value) {
		    	$tong+=1;
		    }
		    return $tong;
		}
		public function countUser()
		{
			$conn=Connection::getInstance();
		    $query=$conn->query("Select count(id) as tong FROM `users` where position='0'");
		    $result=$query->fetch();
		    return $result;
		}
		public function backUpModel()
		{
		    $host = "localhost";
			$username = "root";
			$password = "";
			$database_name = "tindung";
			// Get connection object and set the charset
			$conn = mysqli_connect($host, $username, $password, $database_name);
			$conn->set_charset("utf8");
			// Get All Table Names From the Database
			$tables = array();
			$sql = "SHOW TABLES";
			$result = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_row($result)) {
			    $tables[] = $row[0];
			}
			$sqlScript = "";
			foreach ($tables as $table) {
			    // Prepare SQLscript for creating table structure
			    $query = "SHOW CREATE TABLE $table";
			    $result = mysqli_query($conn, $query);
			    $row = mysqli_fetch_row($result);
			    $sqlScript .= "\n\n" . $row[1] . ";\n\n";
			    $query = "SELECT * FROM $table";
			    $result = mysqli_query($conn, $query);
			    $columnCount = mysqli_num_fields($result);
			    // Prepare SQLscript for dumping data for each table
			    for ($i = 0; $i < $columnCount; $i ++) {
			        while ($row = mysqli_fetch_row($result)) {
			            $sqlScript .= "INSERT INTO $table VALUES(";
			            for ($j = 0; $j < $columnCount; $j ++) {
			                $row[$j] = $row[$j];
			             if (isset($row[$j])) {
			                    $sqlScript .= '"' . $row[$j] . '"';
			                } else {
			                    $sqlScript .= '""';
			                }
			                if ($j < ($columnCount - 1)) {
			                    $sqlScript .= ',';
			                }
			            }
			            $sqlScript .= ");\n";
			        }
			    }
			    
			    $sqlScript .= "\n"; 
			}
			 
			if(!empty($sqlScript))
			{
			    // Save the SQL script to a backup file
			    $backup_file_name = $database_name . '_backup_' . time() . '.sql';
			    $fileHandler = fopen($backup_file_name, 'w+');
			    $number_of_lines = fwrite($fileHandler, $sqlScript);
			    fclose($fileHandler); 
			 // Download the SQL backup file to the browser
			    header('Content-Description: File Transfer');
			    header('Content-Type: application/octet-stream');
			    header('Content-Disposition: attachment; filename=' . basename($backup_file_name));
			    header('Content-Transfer-Encoding: binary');
			    header('Expires: 0');
			    header('Cache-Control: must-revalidate');
			    header('Pragma: public');
			    header('Content-Length: ' . filesize($backup_file_name));
			    ob_clean();
			    flush();
			    readfile($backup_file_name);
			    exec('rm ' . $backup_file_name); 
			
			}
		}
		public function findPresentMonth($month)
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select sum(price) as tong FROM `orders` where month(date)=$month");
		    $result=$query->fetch();
		    return $result;
		}
		public function findOldMonth($month)
		{
			$month=$month-1;
			$conn=Connection::getInstance();
			$query=$conn->query("select sum(price) as tong FROM `orders` where month(date)=$month");
		    $result=$query->fetch();
		    return $result;
		}
		public function findLastMonth($month)
		{
			$month=$month-2;
			$conn=Connection::getInstance();
			$query=$conn->query("select sum(price) as tong FROM `orders` where month(date)=$month");
		    $result=$query->fetch();
		    return $result;
		}
	}

 ?>