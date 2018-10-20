<?php
    include "../includes/db1.php";
    function createDATA()
    {
        global $connection;
        if(isset($_POST["submit"]))
        {
            $ITEM_NAME=$_POST["ITEM_NAME"];
            $QUANTITY=$_POST["QUANTITY"];
            $MFD_DATE=$_POST["MFD_DATE"];
            $EXP_DATE=$_POST["EXP_DATE"];
            $BRAND=$_POST["BRAND"];
            $MRP=$_POST["MRP"];
            //creating part
            $query="INSERT INTO item(ITEM_NAME,QUANTITY,MFD_DATE,EXP_DATE,BRAND,MRP) VALUES('$ITEM_NAME','$QUANTITY','$MFD_DATE','$EXP_DATE','$BRAND','$MRP')";
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