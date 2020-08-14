<?php require_once('connect.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Custom styles for this template-->
    <link href="/css/style.css" rel="stylesheet">

</head>

<body id="page-top">

    <div class="header_insertion">
        <h1 id="main_head_insertion" class="text-center">INSERT PRODUCT DETIALS</h1>
    </div>

    <div id="insertion_test_of_product">
        <form class="form_1" method="POST" action="index.php">
            <div class="form-group">
                <select class="form-control" id="product" name="product_selection" value="sdfsd">
                <option id="Selecter1" name="" disabled selected>Please select</option>
             <?php   
  
                 $sql = "SELECT * FROM `product`";
                 $result = mysqli_query($conn,$sql) ;
                 $id = 0;
                 while($row = mysqli_fetch_assoc($result)){
                     $id = $id +1;
                   echo '
                        <option id="Selecter" value="'.$row['id'].'" name="product_disply">'.$row['name'].'</option>';
            }  ?>
                </select><br>
                <select class="form-control" id="product_Type" name="product_Type_selection">
                <option id="Selecter2" name="" disabled selected>Please select</option>                                   
                </select><br>
                <select class="form-control" id="product_Volt_Type" name="product_Volt_Type_selection">
                <option id="Selecter3" name="" disabled selected>Please select</option>
                </select>
            </div>
        </form>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <!-- <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <!-- <script src="../vendor/chart.js/Chart.min.js"></script> -->

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
    <!-- <script src="../js/app.js"></script> -->
<script>
    $(document).ready(function() {
    $("#product").change(function() {
        var course_id = $(this).val();
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {courseID:course_id },
            success:function(data) {
                $("#product_Type").html(data);
            }
        });
    });
});

$(document).ready(function() {
    $("#product_Type").change(function() {
        var course_id = $(this).val();
        $.ajax({
            url: "action2.php",
            method: "POST",
            data: {courseID_2:course_id },
            success:function(data) {
                $("#product_Volt_Type").html(data);
            }
        });
    });
});



</script>
</body>

</html>