<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>
   
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="about">
	<div class="flex">
	<div class="welcome">
	<div class="w1">Welcome</div><br>
	<div class="w2">Each of us is carving a stone, erecting a column, cutting a piece of stained glass,or dragging bricks in the construction of something much bigger than ourselves because<br> It is not only beauty of the building you should look at !!!</div>
	</div>
	</div>


    <div class="flex">

        <div class="image">
            <img src="img/try2.jpg" alt="">
        </div>

        <div class="content">
            <h3>What we do ?</h3>
            <p> SkyLine is platform where dealers can bring there products in global market and customer have ability to choose over wide varity of products .We help to deliver the best quality product in some city with the help of our strong affiliate network and channel stores.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

	<div class="flex">
    <div class="welcome">
	<div class="w1">Our Services</div><br>
	<div class="w2">Each of us is carving a stone, erecting a column, cutting a piece of stained glass,or dragging bricks in the construction of something much bigger than ourselves because<br> It is not only beauty of the building you should look at !!!</div>
	</div>
	</div>
	
	
<section class="reviews" id="reviews">	
    <div class="box-container">

        <div class="box">
            <img src="img/s1.png" alt="">
            <h3>smita wagh</h3>
            <p>You guys made my day. Great service n gifts delivered on time. Thanks for making my dad happy. Cake was super delicious. Commandable job </p>
        </div>

        <div class="box">
            <img src="img/s2.png" alt="">
            <h3>smita wagh</h3>
            <p>Thank you so much Classy Heaven for your service.I would reccommend it for all my friends who want to make their celebrations beautiful.Thank You</p>
        </div>

        <div class="box">
            <img src="img/s3.png" alt="">
            <h3>smita wagh</h3>
            <p>hi, thank u for sending my gift to my husband for the first time i used this site for sending this cake and flowers u have made my wish true am very happy for this. thank u</p>
            </div>
        
          </div>
          
    <div class="flex"><br>
	<div class="welcome">
	<div class="w1">Popular Brands</div><br>
	<div class="w2">Each of us is carving a stone, erecting a column, cutting a piece of stained glass,or dragging bricks in the construction of something much bigger than ourselves because<br> It is not only beauty of the building you should look at !!!</div>
	</div>
	</div>
	  <div class="row" id="r">
    <div class="col" id="i"><img src="img/b1.png"></div>
    <div class="col" id="i"><img src="img/b2.jpg"></div>
    <div class="col" id="i"><img src="img/b3.png"></div>
    <div class="col" id="i"><img src="img/b4.png"></div>
    <div class="col" id="i"><img src="img/b5.png"></div>
    <div class="col" id="i"><img src="img/b6.jpg"></div>
  </div>
</div>
	
         
</section>
      </section>

<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>