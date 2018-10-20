<?php
    $conn = mysqli_connect("localhost","root","pobitro_mon16","marketing");
    
    if (!$conn) 
    {
    die("Connection failed: " );
    }


    $table_sql_customer= "CREATE TABLE IF NOT EXISTS customer(CUS_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, CUS_NAME VARCHAR(30), SEX VARCHAR(30), ADDRESS VARCHAR(10), PHONE INT, GRADES VARCHAR(2) )"; 
    if (mysqli_query($conn, $table_sql_customer)) 
    {
        echo "Table customer created successfully";
    } 
    else 
    {
        echo "Error creating table: " . mysqli_error($conn);
    }
    //-------------------------------------------------------------------------------------------------------------------------

    $table_sql_employee = "CREATE TABLE IF NOT EXISTS employee(EMP_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, EMP_NAME VARCHAR(30), SEX VARCHAR(30), ADDRESS VARCHAR(10), DESIGNATION VARCHAR(20), SALARY INT, DEPT_NAME VARCHAR(20) )";

    if (mysqli_query($conn, $table_sql_employee)) 
    {
        echo "Table employee created successfully";
    } 
    else 
    {
        echo "Error creating table: " . mysqli_error($conn);
    }
    //-------------------------------------------------------------------------------------------------------------------------
    $table_sql_item = "CREATE TABLE IF NOT EXISTS item(ITEM_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, ITEM_NAME VARCHAR(30), QUANTITY INT, MFD_DATE DATE, EXP_DATE DATE, BRAND VARCHAR(20), MRP INT)";

    if (mysqli_query($conn, $table_sql_item)) 
    {
        echo "Table item created successfully";
    } 
    else 
    {
        echo "Error creating table: " . mysqli_error($conn);
    }
    //-------------------------------------------------------------------------------------------------------------------------
    $table_sql_storage = "CREATE TABLE IF NOT EXISTS storage(ITEM_ID INT, ITEM_AVAILABLE INT, FOREIGN KEY(ITEM_ID) REFERENCES item(ITEM_ID))";

    if (mysqli_query($conn, $table_sql_storage)) 
    {
        echo "Table storage created successfully";
    } 
    else 
    {
        echo "Error creating table: " . mysqli_error($conn);
    }
    //-------------------------------------------------------------------------------------------------------------------------
    $table_sql_itemsold = "CREATE TABLE IF NOT EXISTS itemsold(CUS_ID INT, ITEM_ID INT, NO_OF_UNITS INT, COST INT, FOREIGN KEY(ITEM_ID) REFERENCES item(ITEM_ID), FOREIGN KEY(CUS_ID) REFERENCES customer(CUS_ID))";
    
    if (mysqli_query($conn, $table_sql_itemsold)) 
    {
        echo "Table itemsold created successfully";
    } 
    else 
    {
        echo "Error creating table: " . mysqli_error($conn);
    }
    //-------------------------------------------------------------------------------------------------------------------------
    #$table_sql = "CREATE TABLE IF NOT EXISTS <name_of_database>.status_table(ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, NAME VARCHAR(30) NOT NULL, STATUS VARCHAR(5) NOT NULL)";

    
    mysqli_close($conn);
?>