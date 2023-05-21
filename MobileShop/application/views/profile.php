<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Dashboard</title>
    <?php include "components/header.php" ?>
    <?php linkCSS("assets/css/dataTables.bootstrap4.min.css"); ?>
</head>
<body>
<?php include "components/nav.php"; ?>
   
   <div class="m-5 container mt-7">
   <div class="row">
   <div class="col-md-10">
   <?php include "components/messages.php"; ?>

   <?php include "components/datatable.php"; ?>
   <style> 
   table {
    
    
    background-color: #fcf6ca;
}

    th{
        background-color: darkred !important ;
        color: azure !important;
    }

    td{
        color:"black";
    }
    </style>
   </div>
   <!-- Close col-md-5 -->
   </div>
   <!-- Close row -->
   </div>
   <?php include "components/footer.php"; ?>
   <script>
   $(document).ready(function() {
    $('#example').DataTable();
} );
   </script>

   <?php linkJS('assets/js/jquery.dataTables.min.js');?>
   <?php linkJS('assets/js/dataTables.bootstrap4.min.js');?>

</body>
</html>