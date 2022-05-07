<?php
session_start();
$con = mysqli_connect("localhost","root","","login");
{
    $brands = $_POST['brands'];
    $del = $_POST['Del'];
    $name=$_SESSION['username'];
    foreach($del as $delete){
       if( $delete="DELETE")
       {
        $flag=1;
        $query_run = mysqli_query($con, $query);
        $query ="UPDATE users SET portfolio='' WHERE username='$name'";
        $query_run = mysqli_query($con, $query); 
       }
    }
    $str=implode(" ",$brands);
    $query ="SELECT portfolio FROM users WHERE username='$name'";
    $result = $con->query($query);
    while($row = $result->fetch_assoc()) 
    {
        $str=$str." ".$row['portfolio'];
    }
    $query_run = mysqli_query($con, $query);
   $query ="UPDATE users SET portfolio='$str' WHERE username='$name'";
   $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['status'] = "Changes Done";
        header("Location: portfolio.php");
    }
    elseif($flag==1)
    {
        $_SESSION['status'] = "All WatchListed Stock Deleted";
        header("Location: portfolio.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: portfolio.php");
    }
}
?>
