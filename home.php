<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
}

if(isset($_POST['add_to_wishlist'])){
    
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    
    $check_wishlist_numbers = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
    
    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
    
    if(mysqli_num_rows($check_wishlist_numbers) > 0){
        $message[] = 'already added to wishlist';
    }elseif(mysqli_num_rows($check_cart_numbers) > 0){
        $message[] = 'already added to cart';
    }else{
        mysqli_query($conn, "INSERT INTO `wishlist`(user_id, pid, name, price, image) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_image')") or die('query failed');
        $message[] = 'product added to wishlist';
    }
    
}

if(isset($_POST['add_to_cart'])){
    
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];
    
    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
    
    if(mysqli_num_rows($check_cart_numbers) > 0){
        $message[] = 'already added to cart';
    }else{
        
        $check_wishlist_numbers = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
        
        if(mysqli_num_rows($check_wishlist_numbers) > 0){
            mysqli_query($conn, "DELETE FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
        }
        
        mysqli_query($conn, "INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
        $message[] = 'product added to cart';
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">
   

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h1><span>Your </span>Happiness <br>is <span>under CONSTRUCTION</span></h1>
       <p>We provide you best.</p>
      <a href="about.php" class="btn">discover more</a>
   </div>

</section>

<section class="recent" id="recent">
			<h1 class="abt">About Us</h1>
			<div class="row">
				<div class="video">
					<video src="img/video.mp4" loop muted autoplay></video>
				</div>
				<div class="content">
					<h3>We will provide you with best materials<br> with best price.</h3>
				</div>
				
			</div>
</section>

<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p>Want to get in touch?We'd love to here from you. Here's how you can reach us...</p>
      <a href="contact.php" class="btn">contact us</a>
   </div>

</section>

<section class="find" id="find">	
			<div class="row">
    		<div class="col-sm-6">
    		<div class="text">
    		Find material in your nearest locality<br>
    		We are available at : <br>
    		<i class="fa-solid fa-location-dot"></i> Pune<br>
    		<i class="fa-solid fa-location-dot"></i> Mumbai
    		</div>
    		</div>
			<div class="col-sm-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242117.68101876182!2d73.7228790230887!3d18.524890421369644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1652817313586!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
			</div>
</section>


<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>