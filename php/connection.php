<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

$server="localhost";
$username="root";
$password="";
$database="updatedchatapplication";

$connect = mysqli_connect($server, $username, $password, $database);

if ($connect) {

?>
<script>
  swal("Congratulations", "Server is Connected", "success");
</script>
<?php
} else {

    ?>
    <script>
      swal("wrong", "Not connected", "error");
    </script>
 <?php
}



?>