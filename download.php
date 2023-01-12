<?php
error_reporting (E_ALL ^ E_NOTICE);
// if (isset($_POST['generated'])) {
//     $value = $_POST['generated'];

    // $conn = mysqli_connect("localhost","root","","demo");
    // $sql = "INSERT INTO `info`(`value`)VALUES('$value')";
    // $query = mysqli_query($conn,$sql);
    // if ($query) {
    //     echo "inserted";
    // } else {
    //    echo "not inserted";
    // }

//     echo $value;

    
// }
sleep(20);
if (isset($_GET['new'])) {
   echo "I see the variables";
}else{
    echo "I cant find the variables";
}
?>