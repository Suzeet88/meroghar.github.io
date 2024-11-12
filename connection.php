<?php 
  $con = mysqli_connect('localhost' , 'root' , '' , 'meroghar');

  if(mysqli_connect_error()){
     echo `<script>cannot connect to database </script>`;   
     exit();
  }
?>