<?php
include("Connection.php");
if(isset($_POST['button'])){
    $name =$_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT admin_Name, admin_Password  FROM  login WHERE admin_Name='$name' AND admin_Password='$password'";
    $results = mysqli_query($Conn, $sql);
    $row = mysqli_fetch_array($results,    MYSQLI_ASSOC);
    $count = mysqli_num_rows($results);
    if($count == 1){
        header('Location:orderTTES.php');
    }else {
        echo "<script>
                 window.location.href = 'loginformTTES.php';
                 alert('Login failed.invalid username or password');
              </script>
        ";
    }
}

?>