<?php
if (isset($_GET['id'])) {
include("connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM books WHERE id='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Book Deleted Successfully!";
    echo "<script>window.location='index.php'</script>";
}else{
    die("Something went wrong");
}
}else{
    echo "Book does not exist";
}
?>