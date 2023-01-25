<?php
include 'config.php';
session_start();
if(isset($_SESSION['username']))
{
    "success";
}
else
{
    "error";
}

$sql = "SELECT * FROM `bill` WHERE 1";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);
echo "Total number of order";
echo $num;

if($num>0)
{
    echo '<pre>';
    echo '<br>';
    while($row = mysqli_fetch_assoc($result))
    {
        echo       "id". "       ".         "Name". "                                                 ".          "Mail". "                                            ".        "Number".  "                           ".  "Address". "                                      ".        "Workerdetail". "               ".  "Workerid". "             " . "Time" ."<br>";                                                               "<br>";
       echo $row["id"]. "       ".  $row["uname"]. "                       ". $row["umail"] .   "                            "        . $row["pnumber"]. "                ".  $row["addrss"].   "                            ". $row["workerd"] . "                     ". $row["workerid"]. "        ". $row["time"];
        echo '<br>';
    }
    echo '</pre>';
}



?>