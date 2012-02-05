
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>CodeNinja</title>
		<link href="http://localhost/citest/style/css/styles.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="http://localhost/citest/style/css/superfish.css" rel="stylesheet" type="text/css" media="screen" />

		
		<script type="text/javascript" src="http://localhost/citest/jquery/jquery-1.6.2.min.js"></script>

		<script src="http://localhost/citest/jquery/supersubs.js" type="text/javascript"></script>
	
        <script>

            $(document).ready(function(){
                $("ul.sf-menu").supersubs({
                    minWidth:    12,
                    maxWidth:    38,
                    extraWidth:  1
                }).superfish();


            });

        </script>

		
	</head>
	<body>

		<div id="header_wrapper">

			<div class="container_10" id="header_content">

				<h1>CodeNinja</h1>

			</div>

		</div>

		<div id="navigation_wrapper">

			<ul class="sf-menu" id="navigation">

                
<li>
        <a href="#">Dashboard</a>        </li>


<li>
        <a href="#">Clients</a>            <ul>
                        <li><a href="#">Add Client</a></li>
                                <li><a href="#">View Clients</a></li>
                    </ul>
    </li>


<li>
        <a href="#">Quotes</a>            <ul>
                        <li><a href="#">Create Quote</a></li>
                                <li><a href="#">View Quotes</a></li>
                    </ul>
    </li>


<li>
        <a href="#">Invoices</a>            <ul>
                        <li><a href="#">Create Invoice</a></li>
                                <li><a href="#">View Invoices</a></li>
                                <li><a href="#">Invoice Search</a></li>
                                        <li><a href="#">Setup</a>
                    <ul>
                        <li><a href="#">Invoice Groups</a></li>
                        <li><a href="#">Invoice Statuses</a></li>
                        <li><a href="#">Tax Rates</a></li>
                        </ul>
        </li>
                    </ul>
    </li>


<li>
        <a href="#">Payments</a>            <ul>
                        <li><a href="#">Enter Payment</a></li>
                                <li><a href="#">View Payments</a></li>
                                <li><a href="#">Account Deposits</a></li>
                                <li><a href="#">Payment Methods</a></li>
                                <li><a href="#">Receipt Templates</a></li>
                    </ul>
    </li>


<li>
        <a href="#">Inventory</a>            <ul>
                        <li><a href="#">Inventory Items</a></li>
                                <li><a href="#">Inventory Types</a></li>
                    </ul>
    </li>


<li>
        <a href="#">Reports</a>
            <ul>
                        <li><a href="#">Client List</a></li>
                                <li><a href="#">Client Statement</a></li>
                                <li><a href="#">Inventory History</a></li>
                                <li><a href="#">Inventory Sales</a></li>
                                <li><a href="#">Sales by Customer</a></li>
                    </ul>
    </li>



<li><a href="#">Log Out</a></li>
			</ul>

		</div>

		<div class="container_10" id="center_wrapper">
		


</body>
</html>