<?php
    include "../includes/db1.php";
    function createDATA()
    {
        global $connection;
        if(isset($_POST["submit"]))
        {
            $ITEM_ID=$_POST["ITEM_ID"];
            $ITEM_AVAILABLE=$_POST["ITEM_AVAILABLE"];
            $query="INSERT INTO storage(ITEM_ID,ITEM_AVAILABLE) VALUES('$ITEM_ID','$ITEM_AVAILABLE')";
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