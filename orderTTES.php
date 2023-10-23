<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once('connection.php');
    $sql ="Select * from customerorder";
    $results = mysqli_query($Conn, $sql);
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Orders</title>

     <!------------custom Css link-------->
     <link rel="Stylesheet" type="text/css" href="TTESStyle.css">

    <!------------boxIcon Css link-------->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="orderBody">
  <section class="OTSection">
    <div class="OTSHeading"> <h3> <span class="spn">Customer</span>s ord<span class="gold">ers</span></h3> </div>
    <div class="OTSContent">
      <table>
            <tr>
                <th><h2>orderId</h2></th>
                <th><h2>customerName</h2></th>
                <th><h2>phoneNumber</h2></th>
                <th><h2>Address</h2></th>
                <th><h2>email</h2></th>
                <th><h2>order</h2></th>
                <th><h2>orderDate</h2></th>
                <th><h2>deliveryDate</h2></th>
                <th><h2>feedbacks</h2></th>
                <th><h2>Quetions</h2></th>
            </tr>
            <tr>
                <?php
                   while($row=mysqli_fetch_assoc($results))
                   {
                  ?>
                  <td data-cell="order-id"><?php echo $row['user_Id'];?></td>
                  <td data-cell="Name"><?php echo $row['username'];?></td>
                  <td data-cell="Phone Number"><?php echo $row['phone_Number'];?></td>
                  <td data-cell="Address"><?php echo $row['address'];?></td>
                  <td data-cell="Email"><?php echo $row['email'];?></td>
                  <td data-cell="Order"><?php echo $row['customer_Order'];?></td>
                  <td data-cell="order Date"><?php echo $row['order_Date'];?></td>
                  <td data-cell="delivery Date"><?php echo $row['delivery_Date'];?></td>
                  <td data-cell="Feedback"><?php echo $row['feedback'];?></td>
                  <td data-cell="Questions"><?php echo $row['questions'];?></td>
           </tr>
                  <?php
                   }
                ?>
            
        </table>
        </div>
    <div class="TButton"><a href="homeTTES.php"class="btn">HOME</a></div>
  </section>
 </body>
</html>