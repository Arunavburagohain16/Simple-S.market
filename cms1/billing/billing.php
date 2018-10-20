<?php include "../includes/navigation.php"; ?>
<style>
body {
    margin-top: 20px;
}
</style>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php

// Create connection
$conn = mysqli_connect('localhost','root','pobitro_mon16','marketing');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<form action="#" method="post">
        <input class="text" type="number" name="CUS_ID" placeholder="Customer ID" required="">
        <input class="btn btn-success" type="submit" name="submit" value="FIND">
</form>
<?php
if(isset($_POST["submit"]))
{
    $CUS_ID=$_POST["CUS_ID"];
    $sql = "SELECT * FROM customer WHERE CUS_ID=$CUS_ID";
    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        die("Query Failed");
    }
    while($row = mysqli_fetch_assoc($result)) 
    {
            $CUS_NAME=$row["CUS_NAME"];
            $ADDRESS=$row["ADDRESS"];
            $PHONE=$row["PHONE"];
            $COSTT=0;
            $A=mysqli_query($conn,"SELECT COST FROM itemsold WHERE CUS_ID=$CUS_ID ");
            while($row = mysqli_fetch_assoc($A)) 
            {
                $COSTT=$COSTT+$row['COST'];
            }
            $ITEM_ID=$row["ITEM_ID"];
            $NO_OF_UNITS=$row["NO_OF_UNITS"];
?> 

<div class="container">
    
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong><?php echo "$CUS_NAME"; ?></strong>
                        <br>
                        <?php echo "$ADDRESS"; ?>
                        <br>
                        <abbr title="Phone">P:</abbr><?php echo "$PHONE"; ?>
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $B=mysqli_query($conn,"SELECT * FROM itemsold WHERE CUS_ID=$CUS_ID ");
                        while($row = mysqli_fetch_assoc($B)) 
                        {
                            echo "<tr>";
                            $ITEM_ID=$row['ITEM_ID'];
                            $COST=$row['COST'];
                            $NO_OF_UNITS=$row['NO_OF_UNITS'];
                            $C=mysqli_query($conn,"SELECT * FROM item WHERE ITEM_ID=$ITEM_ID ");
                            while($row = mysqli_fetch_assoc($C))
                            {
                                $ITEM_NAME=$row['ITEM_NAME'];
                                $MRP=$row['MRP'];
                            }
                            echo "<td class='col-md-9'><em>".$ITEM_NAME."</em></h4></td>";
                            echo "<td class='col-md-1' style='text-align: center'>".$NO_OF_UNITS."</td>";
                            echo "<td class='col-md-1 text-center'>".$MRP."</td>";
                            echo "<td class='col-md-1 text-center'>".$COST."</td>";
                            echo "</tr>";
                        }
                    }
                } 
        else {
            echo "0 results";
        }   
            mysqli_close($conn);
                    ?>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
                            <p>
                                <strong>Tax: </strong>
                            </p></td>
                            <td class="text-center">
                            <p>
                                <strong>Rs 6.94</strong>
                            </p></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>Rs. <?php echo $COSTT+6.94; ?></strong></h4></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <p><br/>
    </br/>
    </br/>NOTE: Enter the Customer Id to show his bill if exist...</p>