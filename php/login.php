<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

if(isset($_POST['login']))
{
    $loginnumber = $_POST['mobilenumber'];

    $search = " SELECT * FROM  `user`  WHERE mobile = '$loginnumber' ";
    $query = mysqli_query($connect,$search);

    $emailcount = mysqli_num_rows($query);

    if($emailcount)
    {
        ?>
        <script>
          swal("Good Job", "Login Successfully", "success");
          location.replace("../testfile/home.html");
        </script>
     <?php

    }
    else
    {
        ?>
              <script>
                swal("Wrong", "Invalid mobile number Try Again....", "error");
              </script>
         <?php
    }

}





?>