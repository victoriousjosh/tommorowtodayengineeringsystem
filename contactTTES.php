<!DOCTYPE html>
<html lang="en">
<head>
  
<?php
$serverName = "localhost";
$userName ="root";
$password = "";
$dbname = "ttesdatabase";

$Conn =mysqli_connect ("localhost", "root" , "" , "ttesdatabase");

if(!$Conn){
    die (" Connection unsuccessfull ". $Conn-> Connect_error);
}
if(isset($_POST['button'])){
  $name =$_POST['name'];
  $phoneNumber =$_POST['number'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $order = $_POST['order'];
  $orderDate = $_POST['orderdate'];
  $deliveryDate = $_POST['orderdelivery'];
  $feedback = $_POST['feedback'];
  $questions =$_POST['questions'];

  $sql = "INSERT INTO customerorder(username,phone_Number,address,email,customer_Order,order_Date,delivery_Date,feedback,questions)
   VALUES('$name','$phoneNumber','$address','$email','$order','$orderDate','$deliveryDate','$feedback','$questions')";
   mysqli_query($Conn, $sql);
   echo" <script>
           alert ('Order send successfully.wait for vendor response');
         </script>
    ";
    header('location:contactTTES.php');
}
 
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>

<!--Custom css link-->
<link rel="Stylesheet" type="text/css" href="TTESStyle.css">

<!------------boxIcon Css link-------->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <!----------------------CONTACT HEADING SECTION DESIGN STARTS------------------>
  <section class="CHSection">
     <div class="CHSContainer">
         <h3 class=CHSHeading> <span class="spn">C</span>on<span>tact</span> <span class="gold">us</span></h3>
         <div class="CHSContent">
               
                <div class="CHSCondacts">
                      <h3 class="CHeading"> Our Contacts</h3>
                      <h2><span class="gold">Address :</span> P. O. Box 789, Bungoma, Kenya.</h2>
                      <h2><span class="gold">Email :</span> +254ttesengineering 964 900120 @yahoo.com</h2>
                      <h2><span class="gold">Tell :</span> +254 706 222608 ,+254 714 160120</h2>
                </div>
                <div class="CHSLinks">
                     <h3 class="CHSMedia">Social media</h3>
                      <a href="#" id="media"><i class='bx bxl-whatsapp'></i></a>
                      <a href="#" id="media"><i class='bx bxl-facebook' ></i></a>
                      <a href="#" id="media"><i class='bx bxl-instagram' ></i></a>
                      <a href="contactTTES" id="media"><i class='bx bxs-phone-call'></i></a>
                </div>
          </div>
     </div>
  </section>
<!---------------------CONTACT HEADING SECTION DESIGN ENDS------------------>

<!---------------------CONTACT FORM SECTION DESIGN STARTS------------------>
<section class="CFSection">
  <h3 class="CFSHeading"> <span class="gold">E</span>nter your <span class="spn">order</span> here :</h3>
    <form method="post" action="contactTTES.php" class="CSForm" >
        <div class=CFSContainer>

  <div class="IBox">
    <h2><span class="gold">Name : </span></h2>
    <input type="text" placeholder="Enter your name" name="name" >
  </div>

  <div class="IBox">
    <h2><span class="gold">PhoneNumber: </span></h2>
    <input type="number" placeholder="Enter your number" name="number" >
  </div>

  <div class="IBox">
   <h2> <span class="gold">Address: </span></h2>
    <input type="text" placeholder="Enter your address" name="address" >
  </div>

  <div class="IBox">
    <h2><span class="gold">Email : </span></h2>
    <input type="email" placeholder="Enter your email" name="email" >
  </div>

  <div class="IBox">
   <h2> <span class="gold">your order : </span></h2>
    <input type="text" placeholder="Enter your order(product/service)" name="order" >
  </div>

  <div class="IBox">
    <h2><span class="gold">Order date : </span></h2>
    <input type="date" placeholder="Enter your order date" name="orderdate" >
  </div>

  <div class="IBox">
   <h2> <span class="gold">Delivery Date : </span></h2>
    <input type="date" placeholder="Enter date for yuor order delivery" name="orderdelivery" >
  </div>

  <div class="IBox">
    <h2><span class="gold">Feedback : </span></h2>
    <input type="text" placeholder="How was your expirience on our website" name="feedback" >
  </div>

  <div class="IBox">
    <h2 ><span class="gold">Ask a question: </span></h2>
    <input type="text" placeholder="Whats your question?" name="questions"  >
  </div>

    </div>
        <div class="CFButton">
        <input type="submit" class="btn" value="ORDER" name="button" >
        </div>
   </form>
</section>
<!---------------------CONTACT FORM SECTION DESIGN ENDS------------------>

 <!----------------------FOOTER SECTION DESIGN STARTS------------------>
 <section class ="footer" style="background: url(images/webfooter.jpg)">

<h3 class="heading"> pa<span class="gold">ge</span> Foo<span class="spn">ter</span></h3>
 <div class="box-container">

   <div class="box">
     <h3>quick links</h3>
      <a href ="homeTTES.php"> <i class='bx bx-home' ></i> home</a>
      <a href ="aboutTTES.php"> <i class='bx bxs-book-open'></i> About</a>
      <a href ="productsTTES.php"><i class='bx bxl-product-hunt' ></i> Products</a>
      <a href ="servicesTTES.php"><i class='bx bxs-wrench'></i> Services </a>
      <a href ="contactTTES.php"><i class='bx bxs-phone-call'></i>Contact</a>
    </div>

    <div class="box">
     <h3>extra links</h3>
      <a href ="contactTTES.php">  <i class='bx bxs-chevron-right'></i> ask question</a>
      <a href ="aboutTTES.php"> <i class='bx bxs-chevron-right'></i> about us</a>
      <a href ="#"><i class='bx bxs-chevron-right'></i>private policy</a>
      <a href ="#"> <i class='bx bxs-chevron-right'></i> term of use </a>
    </div>

    <div class="box">
     <h3>contact info</h3>
      <a href ="#">  <i class='bx bx-phone' ></i> 0794863503</a>
      <a href ="#"> <i class='bx bx-phone' ></i>+254 706 222608</a>
      <a href ="#"><i class='bx bxs-envelope' ></i> +254ttesengineering 964 900120 @yahoo.com  </a>
      <a href ="#"> <i class='bx bxs-map'></i> Bungoma, Kenya. </a>
    </div>

    <div class="box">
     <h3>Follow us</h3>
     <a href="#"><i class='bx bxl-whatsapp'></i>whatsapp</a>
          <a href="#"><i class='bx bxl-facebook' ></i>facebook</a>
          <a href="#"><i class='bx bxl-instagram' ></i>instagram</a>
          <a href="contactTTES.php"><i class='bx bxs-phone-call'></i>Contact</a>
    </div>

 </div>

 <marquee ><p class="marquee">Copyright &copy ; 2023 by <span class="josh">Joshua</span> <span class="kahush"> Kahura</span> | All Rights Reserved || for websites contact me @ <span class="gold">0794863503</span></p></marquee>

</section>
<!-------------------FOOTER SECTION DESIGN ENDS------------->
</body>
</html>