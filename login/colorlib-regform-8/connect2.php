<?php
$Username = filter_input(INPUT_POST, 'Username');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
if (!empty($Username)){
if (!empty($email)){
if (!empty($password)){
			$host = "localhost";
			$dbusername = "root";
			$dbpassword = "";
			$dbname = "signup";
					// Create connection
				$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
					if (mysqli_connect_error())
					{
							die('Connect Error ('. mysqli_connect_errno() .') '
										. mysqli_connect_error());
					}
						else
							{
								$sql = "INSERT INTO sign (Username, email, password)
									values ('$Username','$email','$password')";
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
