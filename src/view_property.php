<!DOCTYPE html>

<html>
<head>
<title>Land Mark(Pvt)Ltd.</title>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 <link rel="stylesheet" href="css/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
<div class="header">
<nav>
     <img src="media/LAND MARK.png" class="logo">
	 <ul class="nav-links">
	 <li><a href="index.html">Home</a></li>
	 <li><a href="index1.php">Search Property</a></li>
	 <li><a href="Add_property.html">Sell Property</a></li>
	 <li><a href="contact_us.html">Contact Us</a></li>
	 	 <li class="btn" href="#">Login</li>
	 <li class="btn2" href="#">Register</li>
	
	 </ul>
	

	  <a href=" " target="_blank">
	 <img src="media/user.png" class="user-pic"></a>
</nav>
 
</div>
</head>
<body>
    <div class="container7">
        
     
            <?php
            include("config.php");
            $id = $_GET['id'];
            if ($id) {
                $sql = "SELECT * FROM tb_property WHERE id = $id";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                 ?>
				 
   
                 <h3>Property Title:</h3>
                 <p><?php echo $row["Property_Title"]; ?></p><br>
                 <h3>Total Area:</h3>
                 <p><?php echo $row["Total_Area"]; ?></p><br>
                 <h3>Property Price:</h3>
                 <p><?php echo $row["Property_Price"]; ?></p><br>
				 <h3>Nearest City:</h3>
                 <p><?php echo $row["Property_City"]; ?></p><br>
				 <h3>Address:</h3>
                 <p><?php echo $row["Property_Address"]; ?></p><br>
				 <h3>Property Owner:</h3>
                 <p><?php echo $row["Property_Owner"]; ?></p><br>
				 <h3>Contact Details:</h3>
                 <p><?php echo $row["Contact_Details"]; ?></p><br>
				 <h3>More Details About Property:</h3>
                 <p><?php echo $row["More_details"]; ?></p><br>
				 
            <?php
                }
            }
            else{
                echo "<h3>No More details found</h3>";
            }
            ?>
            
        </div>
    </div>
</body>

  <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Quick Links</h4>
  	 			<ul>
  	 				<li><a href="search.php">Search Property</a></li>
  	 				<li><a href="Add_property.html">Sell Property</a></li><BR>
  	 				<li><a>©Copyrigt LandMark.com 2023</a></li>
					<li><a>All Right Reserved</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Company</h4>
  	 			<ul>
  	 				<li><a href="about_us.html">About Us</a></li>
  	 				<li><a href="Privacy_Policy.html">privacy policy</a></li>
  	 				<li><a href="terms_&_conditions.html">Terms & Conditions</a></li>
  	 				
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Contact Us</h4>
  	 			<ul>
  	 			<li><a href="#">📍121,Kandy Road,Malabe.</li>
  	 				<li><a href="#">📧 landmark@gmail.com</li>
  	 				<li><a href="#">✆ 077 2425678</li>
  	 				<li><a href="#">☏ 011 2425987</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>

</body>
</html>

