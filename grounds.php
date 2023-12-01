<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ground</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
	

  <link  rel="stylesheet" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">

	
   <link rel="stylesheet" href="styles.css">
   <link rel="stylesheet" href="admin.css">
   <link rel="stylesheet" href="assets/css/main.css">
   <link rel="stylesheet" href="box.css">
	

</head>
<body>

<?php include 'topbar.php'; ?>
<?php include 'header.php'; ?>
	<?php include 'connect.php'; ?>


<section class="show-products">

   <div class="box-container">

      <?php
         $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
      <div class="box">
         <img src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
         <div class="name"><?php echo $fetch_products['name']; ?></div>
         <div class="price">SLR<?php echo $fetch_products['price']; ?> Per Hour</div>
         <button type="button" class="btn btn-primary" ><a href="ground_details.php">Read Mores</a></button>
           
      </div>
	   
      <?php
         }
      }else{
         echo '<p class="empty">No Grounds added yet!</p>';
      }
      ?>
   </div>

</section>
	
	
	
	

<?php include 'footer.php'; ?>
</body>
	
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
	
	
	<script src="assets/js/main.js"></script>
</html>