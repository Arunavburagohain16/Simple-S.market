<head>
  <title>SuperMarket Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Super Market</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost/cms1/index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Customer<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://localhost/cms1/customers/customer_table/customer_details.php">Customer Details</a></li>
          <li><a href="http://localhost/cms1/customers/customer_reg.php">Customer Register</a></li>
        </ul>
      </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Employee<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://localhost/cms1/Employee/employee_table/employee_details.php">Employee Details</a></li>
          <li><a href="http://localhost/cms1/Employee/emp_register.php">Employee Register</a></li>
        </ul>
      </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Item<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://localhost/cms1/items/item_table/item_details.php">Item Details</a></li>
          <li><a href="http://localhost/cms1/items/item_register.php">Item Register</a></li>
          <li><a href="http://localhost/cms1/item_sold/itemsold_table/itemsold_details.php">Item Sold Details</a></li>
          <li><a href="http://localhost/cms1/item_sold/itemsold_register.php">Item Sold</a></li>
        </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Storage<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://localhost/cms1/storage/storage_table/storage_details.php">Storage Details</a></li>
          <li><a href="http://localhost/cms1/storage/storage_register.php">Storage Register</a></li>
        </ul>
      </li>
      <li><a href="http://localhost/cms1/billing/billing.php">Billing</a></li>
      <li><a href="http://localhost/cms1/contactus/contact.php">Contact us</a></li>
    </ul>
  </div>
</nav>