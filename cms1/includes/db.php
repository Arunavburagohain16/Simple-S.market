<?php 
    $SERVER = 'localhost';
    $USER = 'root';
    $PASSWORD = 'pobitro_mon16';

    
    $_dbx = new mysqli_connect($SERVER,$USER,$PASSWORD);
    
    if ($_dbx->connect_error)
    {
        echo "Connection not detected".$_dbx->connect_error;
    }

    $database_sql = "CREATE DATABASE IF NOT EXISTS marketing1";
    if ($_dbx->query($database_sql) === FALSE)
    {
        return true;
    }
    //-------------------------------------------------------------------------------------------------------------------------
    $table_sql_customer = "CREATE TABLE IF NOT EXISTS marketing1.customer(CUS_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, CUS_NAME VARCHAR(30), SEX VARCHAR(30), ADDRESS VARCHAR(10), PHONE INT, GRADES VARCHAR(2) )";
/*
    //-------------------------------------------------------------------------------------------------------------------------
    $table_sql_employee = "CREATE TABLE IF NOT EXISTS marketing1.employee(EMP_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, EMP_NAME VARCHAR(30), SEX VARCHAR(30), ADDRESS VARCHAR(10), DESIGNATION VARCHAR(20), SALARY INT, DEPT_NAME VARCHAR(20) )";
    //-------------------------------------------------------------------------------------------------------------------------
    $table_sql_item = "CREATE TABLE IF NOT EXISTS marketing1.item(ITEM_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, ITEM_NAME VARCHAR(30), QUANTITY INT, MFD_DATE DATE, EXP_DATE DATE, BRAND, MRP INT)";
    //-------------------------------------------------------------------------------------------------------------------------
    $table_sql_storage = "CREATE TABLE IF NOT EXISTS marketing1.storage(ITEM_AVAILABLE INT, FOREIGN KEY(ITEM_ID) REFERENCES item(ITEM_ID))";
    //-------------------------------------------------------------------------------------------------------------------------
    $table_sql_itemsold = "CREATE TABLE IF NOT EXISTS marketing1.itemsold(CUS_ID INT, ITEM_ID INT, NO_OF_UNITS INT, COST INT, FOREIGN KEY(ITEM_ID) REFERENCES item(ITEM_ID), FOREIGN KEY(CUS_ID) REFERENCES customer(CUS_ID))";
    //-------------------------------------------------------------------------------------------------------------------------
    #$table_sql = "CREATE TABLE IF NOT EXISTS <name_of_database>.status_table(ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, NAME VARCHAR(30) NOT NULL, STATUS VARCHAR(5) NOT NULL)";
*/
    if ($_dbx->query($table_sql_customer) === FALSE)
    {
        echo "Table not created: ".$_dbx->error;
    }
/*
    if ($_dbx->query($table_sql_employee) === FALSE)
    {
        echo "Table not created: ".$_dbx->error;
    }
    if ($_dbx->query($table_sql_item) === FALSE)
    {
        echo "Table not created: ".$_dbx->error;
    }
    if ($_dbx->query($table_sql_storage) === FALSE)
    {
        echo "Table not created: ".$_dbx->error;
    }
    if ($_dbx->query($table_sql_itemsold) === FALSE)
    {
        echo "Table not created: ".$_dbx->error;
    }
*/
mysql_close($_dbx);
?>