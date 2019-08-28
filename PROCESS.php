<?PHP
// to get values passe from form in login.php file
$url = 'http://localhost/Login_System/PAGE2.html';

 $username = "";

if(isset($_POST['username'])){
    $username = $_POST['username'];
}
 $password = "";
if(isset($_POST['username'])){
    $password = $_POST['password'];
 }
 
 
 //connect to the server select database
 mysqli_connect("localhost", "root", "","login");
$conn=mysqli_connect("localhost", "root", "","login");

 // Query the database for user
 $result = mysqli_query($conn,"select * from users where username = '$username' and password = '$password'")
  or die('Failed to query database');
  $sql1="select * from users where username = '$username' and password = '$password'";
 $row = mysqli_fetch_array($result);
 if ( $row['username'] == $username && $row['password'] == $password ) {
  header("Location: $url");
 } else {
     echo "Failed to login!";
}
?>