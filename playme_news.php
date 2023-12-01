<?php

@include 'connect.php';

if(isset($_POST['add_product'])){

   $id = $_POST['id'];
   $main_image = $_FILES['main_image'];
   $title = $_POST['title'];
   $writer = $_POST['writer'];
   $date = $_POST['date'];
   $comments = $_POST['comments'];
   $p1 = $_POST['p1'];
   $p2 = $_POST['p2'];
   $block = $_POST['block'];
   $p3 = $_POST['p3'];
   $p4 = $_POST['p4'];
   $heading1 = $_POST['heading1'];
   $p5 = $_POST['p5'];
   $p6 = $_POST['p6'];
   $image = $_FILES['image'];
   $heading2 = $_POST['heading2'];
   $p7 = $_POST['p7'];
	
	
   if(empty($id) || empty($main_image) || empty($title) || empty($writer) || empty($date) || empty($comments) || empty($p1) || empty($p2) || empty($block) || empty($p3) || empty($p4) || empty($heading1) || empty($p5) || empty($p6) || empty($image) || empty($heading2) || empty($p7)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO news(id, main_image, title,writer,date,comments,p1,p2,block,p3,p4,heading1,p5,p6,image,heading2,p7) VALUES('$id', '$main_image', '$title','$writer','$date','$comments','$p1','$p','$block','$p3','$p4','$heading1','$p5','$p6','$image','$heading2','$p7')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($news_folder);
         $message[] = 'new product added successfully';
      }else{
         $message[] = 'could not add the product';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM news WHERE id = $id");
   header('location:playme_news.php');
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="php admin crud/css/style.css">

</head>
<body>
	
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
   
<div class="container">

   <div class="admin-product-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a news</h3>
         <input type="number" placeholder="id" name="id" class="box">
         
        <input type="file" accept="image/png, image/jpeg, image/jpg" name="main_image" class="box">
		  
		 <input type="text" placeholder="title" name="title" class="box">
		 <input type="text" placeholder="writer" name="writer" class="box">
		 <input type="date" placeholder="date" name="date" class="box">
		 <input type="text" placeholder="p1" name="p1" class="box">
		 <input type="text" placeholder="p2" name="p2" class="box">
		 <input type="text" placeholder="block" name="block" class="box">
		 <input type="text" placeholder="p3" name="p3" class="box">
		 <input type="text" placeholder="p4" name="p4" class="box">
		 <input type="text" placeholder="heading1" name="heading1" class="box">
		 <input type="text" placeholder="p5" name="p5" class="box">
		 <input type="text" placeholder="p6" name="p6" class="box">
	    <input type="file" accept="image/png, image/jpeg, image/jpg" name="image" class="box">
		  
		 <input type="text" placeholder="heading2" name="heading2" class="box">
		 <input type="text" placeholder="p7" name="p7" class="box">
		  
        <input type="submit" class="btn" name="news" value="add news">
      </form>

   </div>
</div>
	</body>
</html>