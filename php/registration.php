<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if (isset($_POST['registration'])) {
    $firstnameuser = $_POST['firstname'];
    $lastnameuser = $_POST['lastname'];
    $emailaddressuser = $_POST['emailaddress'];
    $mobilenumberuser = $_POST['mobilenumber'];

    $datainserted = "INSERT INTO `user`(`firstname`, `lastname`, `email`, `mobile`) 
                 VALUES ('$firstnameuser','$lastnameuser','$emailaddressuser','$mobilenumberuser')";


    $data = mysqli_query($connect,$datainserted);

    if ($data) {

        ?>
        <script>
          swal("Congratulations", "data inserted into Database", "success");
        </script>
     <?php
    } else {
        ?>
        <script>
          swal("Wrong", "Not data inserted", "error");
        </script>
     <?php
    }
}
?>