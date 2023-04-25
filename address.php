<?php
include"conn-1.php";
include"conn.php";
/*if ($connection) {
    echo "<h4 style='color:yellow'>Connection Established </h4>";
}else{
    echo "<h4 style='color:red'>Error".mysqli_error($connection)."</h4>";
}*/
$doorno=$_POST['doorno'];
$landmark=$_POST['landmark'];
$village=$_POST['village'];
$mandal=$_POST['mandal'];
$district=$_POST['district'];
$state=$_POST['state'];
$mobilenumber=$_POST['mobilenumber'];
$query = "CREATE TABLE address (door_number varchar(30),landmark varchar(20),village varchar(20),mandal varchar(20),district varchar(15),state varchar(20),mobile_number varchar(20));";
/*if(mysqli_query($connection, $query))
{
    echo "Table Created";
}
else
{
    echo "Table not Created . ".mysqli_error($connection)."";
}*/
$query = "INSERT INTO address VALUES(?, ?, ?, ?, ?, ?, ?);";
$initialize = mysqli_stmt_init($connection);
if(mysqli_stmt_prepare($initialize, $query))
{
    mysqli_stmt_bind_param($initialize, "sssssss",$doorno,$landmark,$village,$mandal,$district,$state,$mobilenumber);
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
