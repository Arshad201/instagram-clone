<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/bac5e06bc7.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
    <?php require "./components/navbar/navbar.php" ?>
  

   
  <div class="mega-container">    


  <!-- --------------container1 containing story-section and post-section--------------------- -->


<div class="container1">
<?php require "./components/story/story.php" ?>
<?php require "./components/post/post.php" ?>
</div>


<!-- ------------container2 containing suggestion section------------------------------------ -->


<div class="container2">
<?php require "./components/sidebar/sidebar.php" ?>
</div>
</div>

</body>
</html>