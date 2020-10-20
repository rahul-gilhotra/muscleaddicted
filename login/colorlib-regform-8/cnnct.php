<?php
$name = filter_input(INPUT_POST, 'uname');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'upassword');
if (!empty($uname)){
if (!empty($email)){
if (!empty($upassword)){
			$host = "localhost";
			$dbuname = "root";
			$dbemail = "";
			$dbupassword = "signup";
					// Create connection
				$conn = new mysqli ($host, $dbname, $dbemail, $dbpassword);
					if (mysqli_connect_error())
					{
							die('Connect Error ('. mysqli_connect_errno() .') '
										. mysqli_connect_error());
					}
						else
							{
								$sql = "INSERT INTO sign (uname, email, upassword)
									values ('$uname','$email','$upassword')";
if ($conn->query($sql))
{
echo "New record is inserted sucessfully";
}
else
{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
}
}/*
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}*/
?>
