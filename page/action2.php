<?php
require_once('connect.php');
 $output2 = '';
 echo $_SESSION['courseID_2'];
 $sql = "SELECT * FROM `volt_type` where cid='".$_POST['courseID_2']."'  ORDER BY name";
//  $sql2="SELECT * from `types_product`";
 $result = mysqli_query($conn,$sql) ;
 $output2 .='  <option id="Selecter" disabled selected>Please select</option>';
 
    while($row = mysqli_fetch_assoc($result)){
        $output2 .='  <option value="'.$row['id'].'" >'.$row['name'].'</option>';
    }      
 
 echo $output2;
?>