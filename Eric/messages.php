
<?php
//database connection
$server='localhost';
$user='root';
$password='';
$database='portifolio';
$conn=new mysqli($server,$user,$password,$database);



if(isset($_POST['submit'])){
    $name=$_POST['full'];
      $email=$_POST['email'];
        $message=$_POST['message'];
//sending data to the database
$sql="INSERT INTO messages(name,email,message)VALUES('$name','$email','$message')";
$insert=$conn->query($sql);
if($insert){
    echo 'data inserted successfully';
    
}

}
?>