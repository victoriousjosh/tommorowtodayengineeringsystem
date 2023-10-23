<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tommorow today engineering service</title>
    <link rel="Stylesheet" type="text/css" href="TTESStyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
      $(document).ready(function(){
        $('#conn').click(function(){
          $('ul').toggleClass('show');
        });
      });
    </script>
</head>
<body>
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
    <i class='bx bx-menu'></i>
    </label>

  <label class="logo">TTES</label>

<ul>
        <li><a href="homeTTES.php" class="active">Home</a></li>
        <li><a href="aboutTTES.php">About us</a></li>
        <li><a href="productsTTES.php">Products</a></li>
        <li><a href="servicesTTES.php">Services</a></li>
        <li><a href="contactTTES.php">Contact</a></li>
        <li><a href="loginformTTES.php">Admin</a></li>
</ul>
  </nav>
  <!--------------------------------------------------------------------->
 <!------<nav>
    <label class="logo">TTES</label>

    <ul>
            <li><a href="#" class="active">Home</a></li>
            <li><a href="aboutTTES.php">About us</a></li>
            <li><a href="productsTTES.php">Products</a></li>
            <li><a href="servicesTTES.php">Services</a></li>
            <li><a href="contactTTES.php">Contact</a></li>
            <li><a href="loginformTTES.php">Admin</a></li>
    </ul>
    <label id="conn">
    <i class='bx bx-menu'></i>
    </label>
  </nav>
   <section class="headerContent">
        
        <div class="headerLogo">
          <img src="images/logo.png" alt="TTES LOGO">
        </div>
        <div class="Icon">
        <i class='bx bx-menu'></i>
        </div>
        <div class ="headerLinks" >
            <a href="#" class="active">Home</a>
            <a href="aboutTTES.php">About us</a>
            <a href="productsTTES.php">Products</a>
            <a href="servicesTTES.php">Services</a>
            <a href="contactTTES.php">Contact</a>
            <a href="loginformTTES.php">Admin</a>
        </div>
      
</section> ------>

    <section class="homePage">

        <div class="homeContainer" style="background:url(images/disphoto.jpg)">

            <div class="homeContent">
                <h3>Tommorow today engineering system</h3>
                <p>Wellcome to our company, we offer diffrent products and services <br> under
                    his four main divisions:<br> water and indurstrial,power,Irrigation,Farm power<br>
                     and implements division, 
                </p>
                <div class="homePageLink">
                <a href="aboutTTES.php" class="btn">Explore More</a>
                 </div>
           </div>

          <div class="homeLinks" >  
            <a href="#" id="media"><i class='bx bxl-whatsapp'></i></a>
            <a href="#" id="media"><i class='bx bxl-facebook' ></i></a>
            <a href="#" id="media"><i class='bx bxl-instagram' ></i></a>
            <a href="contactTTES" id="media"><i class='bx bxs-phone-call'></i></a>
          </div>

        </div>

 </section>
<!----------------------TTES About design ------------------------>
<Section class="homeAbout">

   <h3 class="aboutHeading"> <span class="spn">About</span> Us</h3>
    <div class="aboutContainer">

       <div class="aboutImage">
        <img src="images/redGenerator.jpg" alt="red Generator">
      </div>

      <div class="aboutContent">
        <h3>About <span class="spn"> us </span></h3>
        <hr class="hr">
        <p>
          Backed by professional experience, we have established ourselves 
          as one of the eminent traders of <strong >Power generators & electrical equipments </strong>,  
          <strong>Pumps (water/industrial), and  </strong> <strong>Irrigation system & designs </strong>
          <strong>Farm power & machineries  </strong> Our range is procured from reliable vendors,
           who manufacture in compliance with industry standards. These products are renowned for
           high performance, dimensional accuracy, low maintenance, and minimum noise & vibration. 
       </p>

       <p>
       With the support of our proficient employees, we have carved a niche for ourselves
        in the industry. Our team has managed to mobilize available resources to meet
         customers’ unique needs/requirements in the whole of East Africa (Kenya, Tanzania, 
         Uganda, Rwanda, Burundi & Sudan). 
       </p>

       <p>
       At our infrastructure, we make sure that the products procured are rich in quality
        and efficient in performance. For the satisfaction of our clients, we also provide 
        installation training and after sales support, spare parts and annual maintenance 
        contracts (AMCs) 
       </p>

       <p>
       As TTES, we Endeavour to build a face-to-face relationship with customers worthy of 
       trust and fast access to reliable service, engineering expertise and parts support. 
       </p>

       <div class="aboutLink">
         <a href="aboutTTES.php" class="btn">Read More</a>
       </div>
       
      
    </div>

    </div>
</Section>
<!----------------------TTES About design Ends------------------------>

<!----------------------footer section design starts------------------>
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

   <marquee ><p class="marquee">Copyright &copy ; 2023 by <span class="josh">Joshua</span> <span class="kahush"> Kahura</span> | All Rights Reserved || for websites contact me @ <span class="gold">0794863503.</span></p></marquee>

</section>
<!---------footer section design End-------->
 
<script src="home.js"> </script> 
</body>
</html>