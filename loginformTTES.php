<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include("connection.php");
    
if(isset($_POST['button'])){
    $name =$_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM  login(admin_Name, admin_Password) WHERE admin_Name=$name AND admin_Password=$password";
    $results = mysqli_query($Conn, $sql);
    $row = mysqli_fetch_array($results,    MYSQLI_ASSOC);
    $count = mysqli_num_rows($results);
    if($count == 1){
        header('Location:orderTTES');
    }else {
        echo "<script>
                 window.location.href = 'loginformTTES.php';
                 alert('Login failed.invalid username or password');
              </script>
        ";
    }
}
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <!------------custom Css link-------->
    <link rel="Stylesheet" type="text/css" href="TTESStyle.css">

   <!------------boxIcon Css link-------->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="formBody">
    <section class="FSection">
        <form onsubmit="return isvalid();" method="post" action="login.php"  class="Form">
            <div class="FContainer">
                <div class=FIBox>
                <h2><span class="gold">adminame :</span><h2>
                <input type=text placeholder="Enter admins username" name="name">
                </div>

                <div class=FIBox>
                <h2><span class="gold">Password :</span><h2>  
                <input type=password placeholder="Enter admins password" name="password">  
                 </div>    
            </div>

            <div class="FButton">
                <input type="submit" value="LOGIN" name="button" class="btn">
            </div>
        </form>
        <script>
            Functions isvalid(){
                var name = document.form.name.value;
                var password = document.form.password.value;
                if(name.length == "" && password.length ==""){
                    alert('Username and password field is empty');
                    return false
                }else{
                    if(name.length==""){
                        alert('Username is empty');
                        return false
                    }
                    if(password.length==""){
                        alert('password is empty');
                        return false
                    }
                }
            }
        </script>
    </section>
    
</body>
</html>