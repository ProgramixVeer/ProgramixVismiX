<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "my_db";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>
<?php
    $username = $_POST['username']
    $password = $_POST['password']

    //Database connection here
    $con = new myqli("localhost","root","","test");
    if($con->connect_error) {
        die("Failed to connect : ".$con->connect_error);
    } else {
        $stmt = $con->prepare("select * from registration where = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt->num_rows > 0) {

        } else {
            echo "<h2>Invalid Email or Password</h2>";
        }
    }
    
    
 
