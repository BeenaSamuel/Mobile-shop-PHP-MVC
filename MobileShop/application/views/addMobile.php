<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>
    <?php include "components/header.php"; ?>
    
</head>
<body>
<?php include "components/nav.php"; ?>
<style>
.btn-primary {
    
    background: #2196F3 linear-gradient(180deg, #f32d21,#f32d21) repeat-x;
    border-color: #2196F3;
}
    </style>
   <div class="container mt-5">
   <div class="row">
   <div class="col-md-5">
   
   <?php include "components/addMobileForm.php"; ?>

   </div>
   <!-- Close col-md-5 -->
   </div>
   <!-- Close row -->
   </div>
   <!-- Close container --> 
   
   <?php include "components/footer.php"; ?>
</body>
</html>