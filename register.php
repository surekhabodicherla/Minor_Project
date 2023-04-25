<?php
include"conn-1.php";
include"conn.php";
/*if ($connection) {
    echo "<h4 style='color:yellow'>Connection Established </h4>";
}else{
    echo "<h4 style='color:red'>Error".mysqli_error($connection)."</h4>";
}*/
$uname=$_POST['name'];
$emailid=$_POST['email'];
$pass=$_POST['password'];
$cpass=$_POST['confirm'];
$number=$_POST['phone'];
$query = "CREATE TABLE register (user_name varchar(30),email_id varchar(20),password varchar(20),confirm_password varchar(20),contact varchar(15));";
/*if(mysqli_query($connection, $query))
{
    echo "Table Created";
}
else
{
    echo "Table not Created . ".mysqli_error($connection)."";
}*/
$query = "INSERT INTO register VALUES(?, ?, ?, ?,?);";
$initialize = mysqli_stmt_init($connection);
if(mysqli_stmt_prepare($initialize, $query))
{
    mysqli_stmt_bind_param($initialize, "sssss",$uname,$emailid,$pass,$cpass,$number);
    mysqli_stmt_execute($initialize);
    /*echo "<h4 style='color:yellow'>Record Inserted</h4><br>";*/
}
/*else
{
    echo "<h4 style='color:red'>Record Not Inserted</h4><br>";
}*/

/*$query = "SELECT * FROM register;";
$check = mysqli_query($connection, $query);
if(mysqli_num_rows($check))
{
    while($row = mysqli_fetch_assoc($check))
    {
      echo  "<b style='color:orange'>".$row["user_name"]."</b>"."  "."<b style='color:blue'>".$row["adhar_id"]."</b>"." "."<b style='color:black'>".	$row["password"]."</b>"."  "."<b style='color:red'>".$row["confirm_password"]."</b>"."  "."<b style='color:green'>".$row["contact"]."</b><br>";
    }
}*/
header("Location: fruits.html");
?>
