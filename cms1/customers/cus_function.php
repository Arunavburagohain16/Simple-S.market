<?php

include "../includes/db1.php";
function createDATA()
{
    global $connection;
    if(isset($_POST["submit"]))
    {
        $CUS_NAME=$_POST["CUS_NAME"];
        $SEX=$_POST["SEX"];
        $ADDRESS=$_POST["ADDRESS"];
        $PHONE=$_POST["PHONE"];
        $GRADES=$_POST["GRADES"];
        //creating part
        $query="INSERT INTO customer(CUS_NAME,SEX,ADDRESS,PHONE,GRADES) VALUES('$CUS_NAME','$SEX','$ADDRESS','$PHONE','$GRADES')";
        $result=mysqli_query($connection,$query);
        if(!$result)
        {
            die("Query failed".mysqli_error($connection));
        }
        else
        {
            echo "Data created";
        }
    }
}


?>