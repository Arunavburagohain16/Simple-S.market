<?php
    include "../includes/db1.php";
    function createDATA()
    {
        global $connection;
        if(isset($_POST["submit"]))
        {
            $CUS_ID=$_POST["CUS_ID"];
            $ITEM_ID=$_POST["ITEM_ID"];
            $NO_OF_UNITS=$_POST["NO_OF_UNITS"];
            $MRP=mysqli_query($connection,"SELECT MRP FROM item WHERE ITEM_ID=$ITEM_ID");
            while($row = mysqli_fetch_assoc($MRP)) 
            {
                $A=$row['MRP'];
            }
            $COST=$A*$NO_OF_UNITS;
            //creating part
            $query="INSERT INTO itemsold(CUS_ID,ITEM_ID,NO_OF_UNITS,COST) VALUES('$CUS_ID','$ITEM_ID','$NO_OF_UNITS','$COST')";
            $result=mysqli_query($connection,$query);
            if(!$result)
            {
                die("Query failed".mysqli_error($connection));
            }
            else
            {
                echo "Data created";
            }/*
            $query1="INSERT INTO itemsold(COST) SELECT SUM(NO_OF_UNITS*MRP) FROM item,itemsold WHERE item.ITEM_ID=itemsold.ITEM_ID GROUP BY item.ITEM_ID";
            $result1=mysqli_query($connection,$query1);
            if(!$result1)
            {
                die("Query failed".mysqli_error($connection));
            }
            else
            {
                echo "Data created";
            }
            */
            
        }
    }
?>