<?php
function check_login($conn){
    if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];
        $query = "SELECT * FROM limregsystem  WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0){
            $data = mysqli_fetch_assoc($result);
            return $data;
        }
    }
    header("Location: login.php");
    die;
}



?>