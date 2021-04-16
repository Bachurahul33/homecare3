<?php
include('../include/config.php');
session_start();
$id = $_SESSION['id'];

if(isset($_POST['someAction1']))
{
    $id = $_POST['someAction1'];
    echo $_POST['someAction1'];
    $sql6 = "UPDATE fac_appoint set facstatus='0' where id=$id";
    if(mysqli_query($conn,$sql6))
    {
        unset($_POST['someAction1']);
        echo '<script>alert("Booking Cancelled");
              window.location.href="profile1.php";
              </script>';
    }
    else
    {
        echo '<script>alert("Error occured please try again");
              window.location.href="profile1.php";
              </script>';
    }
    

    

}
?>