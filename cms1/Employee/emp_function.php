<?php
    include "../includes/db1.php";
    function createDATA()
    {
        global $connection;
        if(isset($_POST["submit"]))
        {
            $EMP_NAME=$_POST["EMP_NAME"];
            $SEX=$_POST["SEX"];
            $ADDRESS=$_POST["ADDRESS"];
            $DESIGNATION=$_POST["DESIGNATION"];
            $SALARY=$_POST["SALARY"];
            $DEPT_NAME=$_POST["DEPT_NAME"];
            //creating part
            $query="INSERT INTO employee(EMP_NAME,SEX,ADDRESS,DESIGNATION,SALARY,DEPT_NAME) VALUES('$EMP_NAME','$SEX','$ADDRESS','$DESIGNATION','$SALARY','$DEPT_NAME')";
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