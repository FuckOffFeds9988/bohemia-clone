<?php
session_start();
require_once("db.php");
?>



<!DOCTYPE html>
<html>
    <head>
    <title>Asmodeus - Homepage</title>
            <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="Bohemia%20-%20Homepage_files/flexboxgrid.min.css">
        <link rel="stylesheet" type="text/css" href="Bohemia%20-%20Homepage_files/fontawesome-all.min.css">
        <link rel="stylesheet" type="text/css" href="Bohemia%20-%20Homepage_files/style.css">
        <link rel="stylesheet" type="text/css" href="Bohemia%20-%20Homepage_files/main.css">
        <link rel="stylesheet" type="text/css" href="Bohemia%20-%20Homepage_files/responsive.css">        
        <link rel="stylesheet" type="text/css" href="Bohemia%20-%20Homepage_files/sprite.css">
        <link rel="stylesheet" href="style.css">
        
</head>

<body>
    <div class="navigation">
        <div class="wrapper">
            <ul>
                <li class="nav-logo"><a href="http://2fzhe7csdmsl6tqfevrabnctewlh3ynro7zlkd5ie4xlai4mahr2fqid.onion/"><img src="Bohemia%20-%20Homepage_files/logo_small.png" style="height: 100%;"></a></li>
                <div class="responsive-menu">
                    <li class="menu-toggler"><a href="#">Navigation&nbsp; <div class="sprite sprite--caret" style="float: none; display: inline-block; margin-left:5px;"></div></a></li>
                    <div class="menu-links">
                        <li class="active"><a href="http://2fzhe7csdmsl6tqfevrabnctewlh3ynro7zlkd5ie4xlai4mahr2fqid.onion/">Home</a></li>
                        
                        <li class="dropdown-link dropdown-large ">
                            <a href="http://2fzhe7csdmsl6tqfevrabnctewlh3ynro7zlkd5ie4xlai4mahr2fqid.onion/usercp.php?action=orders" class="dropbtn">
                                Orders
                                                            </a>
                            <div class="dropdown-content right-dropdown">
                                <a href="#">Processing&nbsp; <span class="badge badge-secondary right">0</span></a>
                                <a href="#">Dispatched&nbsp; <span class="badge badge-danger right" style="background-color:grey;">0</span></a>
                                <a href="#">Completed&nbsp; <span class="badge badge-danger right" style= "background-color:grey">0</span></a>
                                <a href="#">Disputed&nbsp; <span class="badge badge-secondary right">0</span></a>
                                <a href="#">Cancelled</a>
                            </div>
                        </li>

                        
                        <li><a href="listings.php">Listings</a></li>
                        <li class="dropdown-link dropdown-large ">
                            <a href="http://2fzhe7csdmsl6tqfevrabnctewlh3ynro7zlkd5ie4xlai4mahr2fqid.onion/messages.php" class="dropbtn">
                                Messages&nbsp;
                                <span class="badge badge-secondary">0</span>                            </a>
                            <div class="dropdown-content right-dropdown">
                                <a href="http://2fzhe7csdmsl6tqfevrabnctewlh3ynro7zlkd5ie4xlai4mahr2fqid.onion/messages.php?action=compose">Compose Message</a>
                                <a href="http://2fzhe7csdmsl6tqfevrabnctewlh3ynro7zlkd5ie4xlai4mahr2fqid.onion/messages.php">Inbox</a>
                                <a href="http://2fzhe7csdmsl6tqfevrabnctewlh3ynro7zlkd5ie4xlai4mahr2fqid.onion/messages.php?action=sent">Sent Items</a>
                            </div>
                        </li>
			<li class="dropdown-link dropdown-large">
			    <a href="http://2fzhe7csdmsl6tqfevrabnctewlh3ynro7zlkd5ie4xlai4mahr2fqid.onion/usercp.php?action=wallet" class="dropbtn">Wallet</a>
			    <div class="dropdown-content right-dropdown">
                                <a href="http://2fzhe7csdmsl6tqfevrabnctewlh3ynro7zlkd5ie4xlai4mahr2fqid.onion/usercp.php?action=exchange">Exchange</a>
                            </div>
			</li>
                        <li class="dropdown-link dropdown-large ">
                            <a href="#" class="dropbtn">
                                Support
                                                            </a>
                            <div class="dropdown-content right-dropdown">
                                <a href="http://2fzhe7csdmsl6tqfevrabnctewlh3ynro7zlkd5ie4xlai4mahr2fqid.onion/faq.php">F.A.Q</a>
                                <a href="http://2fzhe7csdmsl6tqfevrabnctewlh3ynro7zlkd5ie4xlai4mahr2fqid.onion/support.php">
                                    Support Tickets
                                                                    </a>
                                <a href="http://2fzhe7csdmsl6tqfevrabnctewlh3ynro7zlkd5ie4xlai4mahr2fqid.onion/support?action=new&amp;do=bugreport">
                                    Report Bug
                                </a>
                            </div>
                            <li class="dropdown-link dropdown-large " style="margin-left:260px; position:absolute; width:210px; margin-top:-15px;">
                            <a href="control-panel.php" class="dropbtn">
                               <p>C Panel</p>
                                                            </a>
                            <div class="dropdown-content right-dropdown">
                            <a href="products.php">Products</a>
                                <a href="category.php">
                                    All Categories
                                                                    </a>
                                                                    <a href="add-category.php">
                                    Add Category
                                                                    </a>
                                <a href="add-product.php">
                                    Add Products
                                                                    </a>
                            <a href="category.php">
                                List Of Categories
                                                                    </a>
                                                                    <a href="categories.php">
                                View Categories
                                                                    </a>
                            <a href="add-category.php">
                                Categories
                                                                    </a>
                        <a href="edit-category.php">
                                Edit Category
                                                                    </a>
                    </div>
                </div>
              
              
              
               
                <li class="dropdown-link user-nav right fix-gap">
                <div class="dropdown">
              <button class="dropbtn"><?php echo "" . $_SESSION["username"] . "<br>"; ?></button>
                   
                 
                    <div class="dropdown-content">
                       
                        <div class="user-balance">
                            <span class="shadow-text">Balances</span><br>
                            <span class="balance"></span><sup>0.00000000 BTC</sup><br><span class="balance"></span><sup>0.00000000 XMR</sup><br>
                        </div>
                                                <a href="http://2fzhe7csdmsl6tqfevrabnctewlh3ynro7zlkd5ie4xlai4mahr2fqid.onion/profile.php?id=60Agent">My Profile</a>

                        <a href="http://2fzhe7csdmsl6tqfevrabnctewlh3ynro7zlkd5ie4xlai4mahr2fqid.onion/theme.php">Night Mode</a>
                        <a href="http://2fzhe7csdmsl6tqfevrabnctewlh3ynro7zlkd5ie4xlai4mahr2fqid.onion/usercp.php">User CP</a>
                        <a href="logout.php">Logout</a>
                    </div>
                </li>
                
                <li class="right shopping-cart-link ">
                  <a href="bohemia/cart.php">
                    <img src="cart.png" style="    
                    width: 20px;
                    height: 25px;
                    display: inline-block;
                    margin-top: 20px;
                    float:none;
                    ">
                    &nbsp;<span class="badge badge-danger" style="
                    padding: 0.3em 0.4em;
                    font-size: 75%;
                    font-weight: 700;
                    top: 24px;
                    line-height: 1;
                    position: absolute;
                    text-align: center;
                    white-space: nowrap;
                    vertical-align: baseline;
                    border-radius: 0.25rem;
                    background-color:grey;
                    ">0</span>               
                    
                                            </a>
                </li>
                <li class="right ">
                    <a href="#">
                        <img src="alert-bell.png" style="    
                        width: 20px;
                        height: 25px;
                        display: inline-block;
                        margin-top: 20px;">
                        
                        &nbsp;<span class="badge badge-danger" style="
                        padding: 0.3em 0.4em;
                        font-size: 75%;
                        font-weight: 700;
                        top: 24px;
                        line-height: 1;
                        position: absolute;
                        text-align: center;
                        white-space: nowrap;
                        vertical-align: baseline;
                        background-color:grey;
                        border-radius: 0.25rem;
                        ">0</span>                    </a>
                </li>
                
                <li class="right fix-gap "><a href="becoming-a-merchant.php"><b>Become A Merchant</b></a></li>

                                        
            </ul>
        </div>
    </div>
        <div class="wrapper">
                    <div class="row">
                <div class="col-md-12" style="padding-left: 0;">
                    <div class="alert alert-primary">
                        <strong>Current Private Mirror:</strong> buyerajqj4pjnmlkedzma6gok7beynyl3v5tnyx4isv6cyzl5hvmadid.onion
                        <br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="padding-left: 0;">
                    <div class="alert alert-primary">
                        <strong>Cannabia Private Mirror:</strong> smoker3rw32tfgolpi576lnfthp5dp3zvhx2eqzyx4a45rorkyksurid.onion
                        <br>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-12" style="padding-left: 0;">
                    <div class="alert alert-danger">
                        <div class="sprite sprite--triangle"></div>&nbsp;
                        <strong>YOU DO NOT HAVE A PGP KEY ASSIGNED TO YOUR ACCOUNT, PLEASE ATTACH ONE IN THE USER PANEL</strong>
                    </div>
                </div>
            </div>




        
        

        <div class="row" style="margin-bottom: 1rem;">
            <div class="col-md-3 no-padding-left">
                <div class="container" style="height: 100%;">
                    <div class="row">
                        <div class="col col-md-4">
                            <img src="Bohemia%20-%20Homepage_files/image_002.png">
                        </div>
                        <div class="col col-md-8">
                            <div class="user-detail-row">
                                <strong><span style="color:grey;"> <?php echo $_SESSION["username"] . "<br>"; ?></span></strong>
                            </div>
                            <div class="user-detail-row">
                                <div>Status:</div>
                                <div><span style="color:grey; position:absolute; margin-left:-70px;"><?php echo $_SESSION["account_role"] . "<br>"; ?></span></div>
                            </div>
                            <div class="user-detail-row">
                                <div>Joined:</div>
                                <div><?php echo $_SESSION["dateJoined"] . "<br>"; ?></div>
                            </div>
                                 <div class="user-detail-row">
                                 <div style="display: flex; align-items: center; justify-content: center">
            <?php
            $total_orders = $_SESSION["total_orders"];
            echo "Total Spent:"; ?>
            <div style="
  color: <?php echo $total_orders > 0 ? "green" : "red"; ?>;
  margin-left: 30px;
  ">
              <?php
              $locale = "$";
  
              echo $locale . " " . number_format($total_orders, 2, ".", ",") . "<br>"; ?>
            </div>
          </div>
                                </div>
                                                        <div class="user-balance" style="margin-top: 1em;">
                                <strong>Balances</strong><br>
                                <strong class="balance">0.00000000 BTC</strong> <sup>$0</sup><br><strong class="balance">0.00000000 XMR</strong> <sup>$0.23</sup><br>                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 no-padding-left">
                <div class="container nopadding" style="height: 100%;">
                    <div class="container-header"><div class="sprite sprite--info"></div>&nbsp; Information Board</div>
                    <div class="container-content">
                        Your personal login phrase is: <b>Hello... </b> - if this is incorrect, please leave immediately and seek a new mirror.<br>
<br>
Please take precautions prior to placing any orders, this means vetting 
the merchants you wish to use, and encrypting any sensitive data with 
PGP.<br>
<br>
Always verify the mirror you are visiting, safety is key.                    </div>
                </div>
            </div>
            <div class="col-md-5 no-padding-left">
                <div class="container nopadding" style="height: 100%;">
                    <div class="container-header"><div class="sprite sprite--exchange"></div>&nbsp; Exchange Rates</div>
                    <table class="table exchange-table" cellspacing="0" cellpadding="0">
                        <tbody><tr>
                            <th></th>
                            <th class="text-center">USD</th>
                            <th class="text-center">EUR</th>
                            <th class="text-center">GBP</th>
                            <th class="text-center">CAD</th>
                            <th class="text-center">AUD</th>
                        </tr>

                        
                            <tr>
                                <td><strong><div class="sprite sprite--bitcoin" style="top:2px;"></div>&nbsp;Bitcoin</strong></td>
                                <td class="text-center">29032</td>
                                <td class="text-center">26330</td>
                                <td class="text-center">22773</td>
                                <td class="text-center">38857</td>
                                <td class="text-center">44087</td>

                            </tr>

                        
                            <tr>
                                <td><strong><div class="sprite sprite--monero" style="top:2px;"></div>&nbsp;Monero</strong></td>
                                <td class="text-center">159.94</td>
                                <td class="text-center">145.05</td>
                                <td class="text-center">125.46</td>
                                <td class="text-center">214.07</td>
                                <td class="text-center">242.88</td>

                            </tr>

                                            </tbody></table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 sidebar-navigation">
                <div class="container listing-sorting detail-container">
                    <div class="container-header">
                    <div class="sprite sprite--search"></div>&nbsp; Quick Search
                    </div>
                    <div class="container-content">
                        <form action="listings.php" method="GET">
                            <div class="form-group">
                                <div><label>Search by Keyword / Merchant Name</label></div>
                                <input type="text" class="form-control" name="query">
                            </div>
                            <div class="form-group">
                                <div><label>Category</label></div>
                                <select class="form-control" name="catid">
                                    <option selected="selected">Select A Category</option>
                                    <option value="11" style="font-weight: bold;">Electronics</option></select>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-larger btn-blue" style="margin-bottom: 2px;">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="container listing-sorting detail-container">
    <div class="container-header">
        <div class="sprite sprite--diagram"></div>&nbsp; Browse Categories
    </div>
    <div>
        <ul>
                        <li>
                <a href="#">
                    <input type="checkbox" name="catid" value="">
                    <b>Electronics</b>

                    <span class="amount">0</span>
		</a>
		<ul class="sub-categories">
            <li class="secondary-category">
                <a href="#">
                    <input type="checkbox" name="catid" value="26">
                    Mobiles
                    <span class="amount">0</span>
                </a>
            </li>

		
            <li class="secondary-category">
                <a href="#">
                    <input type="checkbox" name="catid" value="27">
                    Motherboards
                    <span class="amount">0</span>
                </a>
            </li>

		
            <li class="secondary-category">
                <a href="#">
                    <input type="checkbox" name="catid" value="28">
                    Ram
                    <span class="amount">0</span>
                </a>
            </li>

		 
            <li class="secondary-category">
                <a href="#">
                    <input type="checkbox" name="catid" value="28">
                    CPU
                    <span class="amount">0</span>
                </a>
            </li>

		
            

		</ul>            </li><li>
            
    </div>
</div>
                <div class="container nopadding">
                    <div class="container-header">
                    <div class="sprite sprite--affiliate"></div>&nbsp; Affiliate Program
                    </div>
                    <div class="container-content">
                        <p>Copy your personal referral link and share it
 with your friends and general public. Passively receive 25% of the 
profit made on each purchase made by the user(s) you have referred.</p>
                        <input type="text" class="form-control" value="" readonly="readonly">
                    </div>
                    <table class="referrals-stats-table" cellspacing="0" cellpadding="0">
                        <tbody><tr>
                            <td><b>Total Referrals</b></td>
                            <td style="text-align: right; padding-right: 15px;">0</td>
                        </tr>
                        <tr>
                            <td><b>Total Earned</b></td>
                            <td style="text-align: right; padding-right: 15px;">$0.00</td>
                        </tr>
                    </tbody></table>
                </div>
            </div>
           
            <div class="col-md-9 sidebar-navigation">
                <h2>
                    Featured Listings                 </h2>

                
<div class="row product-listing">
<div class="col-md-6 product-link" style="padding-left: 0;">
        <div class="product row">
            <div class="container row">
                <div class="col-md-2 photo">
                    <img src="images/samsung-galazy-z-flip.jpg">
                </div>
                 <?


               ?>
                <div class="col-md-9 product-details">
                    <div class="product-heading">
                        <?php
                            $query2 = "SELECT * FROM products";
                            $result2 = mysqli_query($con,$query2);
                            $row = mysqli_fetch_array($result2);
                           

                           ?>
                           <?php 
                                 $query3 = "SELECT * FROM categories";
                                 $result3 = mysqli_query($con,$query3);
                                 $row3 = mysqli_fetch_array($result3);
                                 $queryCatShoes = "SELECT * FROM categories WHERE id='10'";
                                 //$queryCatNameShoes = "SELECT * FROM categories WHERE name='shoes'";
                                 //$resultCatNameShoes = mysqli_query($con,$queryCatNameShoes);
                                 //$rowCatNameShoes = mysqli_fetch_array($resultCatNameShoes);
                                 $resultCatShoes = mysqli_query($con,$queryCatShoes);
                                 $rowCatShoes = mysqli_fetch_array($resultCatShoes);
                                 $queryVendorName = "SELECT vendor_name FROM products";
                                 $resultVendorName = mysqli_query($con,$queryVendorName);
                                 $rowVendorName = mysqli_fetch_array($resultVendorName);
                                 $queryVendorRating= "SELECT vendor_rating FROM products";
                                 $resultVendorRating = mysqli_query($con,$queryVendorRating);
                                 $rowVendorRating = mysqli_fetch_array($resultVendorRating);
                                 $timesSold = "SELECT times_sold_last_48_hr FROM products";
                                 $queryTimesSoldResult = (mysqli_query($con,$timesSold));
                                 $rowTimesSold = mysqli_fetch_array($queryTimesSoldResult);
                                 $available = "SELECT available FROM products";
                                 $queryAvailable = mysqli_query($con,$available);
                                 $rowAvailable = mysqli_fetch_array($queryAvailable);



                              ?>
                            <?php
                                    
                                  

                            ?>

                        
                            <h2><a href="http://localhost/bohemia/product-view.php?product=Samsung%20Galaxy%20Z%20Flip"><?php echo $row['name']; ?></a></h2>
                        <span class="shadow-text smalltext">In <strong><?php echo $row3['name'] ?></strong></span><br>
                            <?php ?>
                        <strong>Sold by <a href="#"><?php echo $rowVendorName['vendor_name']?></a></strong><div class="sprite sprite--stargold" style="display: inline-block; margin-left:5px;;float: none;"></div>&nbsp;Rating <strong>(&nbsp;&nbsp;<div class="" style="display: inline-block; margin-left:-8px; float: none; width:20px; position:absolute;"><img src="images/icons8-star-48.png"></div>&nbsp;&nbsp;&nbsp;<?php echo $rowVendorRating['vendor_rating']; ?>  )</strong> 
                    </div>

                 <?   ?>
                    <div class="product-bottom">
                        <div class="detail-col">
                            <div class="shadow-text">Available</div>
                            <span><?php echo $rowAvailable['available'] ?></span>
                        </div>
                        <div class="detail-col">
                            <div class="shadow-text">Sold (48H)</div>
                            <span><?php echo $rowTimesSold['times_sold_last_48_hr'] ?></span>
                        </div>
                        <div class="detail-col">
                            <div class="shadow-text">Price</div>
                            <span>
                            <?php echo $row['selling_price'] ?>                           </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

        
    
    

        
   

        
   

        
  

        
   
        
   
    
    <div class="col-md-6 product-link" style="padding-left: 0;">
        <div class="product row">
            <div class="container row">
                <div class="col-md-2 photo">
                    <img src="images/samsung-galazy-z-flip.jpg">
                </div>
                 <?


               ?>
                <div class="col-md-9 product-details">
                    <div class="product-heading">
                        <?php
                            $query2 = "SELECT * FROM products";
                            $result2 = mysqli_query($con,$query2);
                            $row = mysqli_fetch_array($result2);
                           

                           ?>
                           <?php 
                                 $query3 = "SELECT * FROM categories";
                                 $result3 = mysqli_query($con,$query3);
                                 $row3 = mysqli_fetch_array($result3);
                                 $queryCatShoes = "SELECT * FROM categories WHERE id='10'";
                                 $queryCatNameShoes = "SELECT * FROM categories WHERE name='shoes'";
                                 $resultCatNameShoes = mysqli_query($con,$queryCatNameShoes);
                                 $rowCatNameShoes = mysqli_fetch_array($resultCatNameShoes);
                                 $resultCatShoes = mysqli_query($con,$queryCatShoes);
                                 $rowCatShoes = mysqli_fetch_array($resultCatShoes);
                                 $queryVendorName = "SELECT vendor_name FROM products";
                                 $resultVendorName = mysqli_query($con,$queryVendorName);
                                 $rowVendorName = mysqli_fetch_array($resultVendorName);
                                // $queryVendorRating= "SELECT vendor_rating FROM products";
                                 //$resultVendorRating = mysqli_query($con,$queryVendorRating);
                                 //$rowVendorRating = mysqli_fetch_array($resultVendorRating);

                              ?>
                            <?php
                                    
                                  

                            ?>

                        
<h2><a href="#"><?php echo $row['name']; ?></a></h2>
                        <span class="shadow-text smalltext">In <strong><?php echo $row3['name'] ?></strong></span><br>
                            <?php ?>
                        <strong>Sold by <a href="#"><?php echo $rowVendorName['vendor_name']?></a></strong><div class="sprite sprite--stargold" style="display: inline-block; margin-left:5px;;float: none;"></div>&nbsp;Rating <strong>(&nbsp;&nbsp;<div class="" style="display: inline-block; margin-left:-8px; float: none; width:20px; position:absolute;"><img src="images/icons8-star-48.png"></div>&nbsp;&nbsp;&nbsp;<?php echo $rowVendorRating['vendor_rating']; ?>  )</strong> 
                    </div>

                 <?   ?>
                    <div class="product-bottom">
                        <div class="detail-col">
                            <div class="shadow-text">Available</div>
                            <span><?php echo $row['qty'] ?></span>
                        </div>
                        <div class="detail-col">
                            <div class="shadow-text">Sold (48H)</div>
                            <span>4</span>
                        </div>
                        <div class="detail-col">
                            <div class="shadow-text">Price</div>
                            <span>
                            <?php echo $row['selling_price'] ?>                           </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 product-link" style="padding-left: 0;">
        <div class="product row">
            <div class="container row">
                <div class="col-md-2 photo">
                    <img src="../bohemia/images/s7edge.png">
                </div>
                <div class="col-md-9 product-details">
                    <div class="product-heading">
                        <h2><a href="localhost/bohemia/product-view.php?product=Samsung%20S%207%20Edge">Samsung S7 Edge</a></h2>
                        <span class="shadow-text smalltext">In <strong><?php echo $row3['name'] ?></strong></span><br>
                        <strong>Sold by <a href="# "><strong><?php echo $rowVendorName['vendor_name']?></a></strong> <div class="sprite sprite--stargold" style="display: inline-block; margin-left:5px;;float: none;"></div>&nbsp;Rating <strong>(&nbsp;&nbsp;<div class="" style="display: inline-block; margin-left:-8px; float: none; width:20px; position:absolute;"><img src="images/icons8-star-48.png"></div>&nbsp;&nbsp;&nbsp;<?php echo $rowVendorRating['vendor_rating']; ?>  )
                    </div>
                    <div class="product-bottom">
                    <div class="detail-col">
                            <div class="shadow-text">Available</div>
                            <span><?php echo $rowAvailable['available'] ?></span>
                        </div>
                        <div class="detail-col">
                            <div class="shadow-text">Sold (48H)</div>
                            <span><?php echo $rowTimesSold['times_sold_last_48_hr'] ?></span>
                        </div>
                        <div class="detail-col">
                            <div class="shadow-text">Price</div>
                            <span>
                            <?php echo $row['selling_price'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


                <div class="row">
                    <div class="col col-md-12" style="padding: 0;">
                        <div class="container detail-container">
    <div class="container-header">
        <div class="sprite sprite--links"></div>&nbsp; Mirrors
    </div>
    <div class="detail-row"><div><a href="http://bohemiaobko4cecexkj5xmlaove6yn726dstp5wfw4pojjwp6762paqd.onion/">Mirror 1</a></div></div><div class="detail-row"><div><a href="http://bohemiaobbpsjvkexpdpnekqai2ebi32xgr6sbhdpapipv547rm6jhad.onion/">Mirror 2</a></div></div><div class="detail-row"><div><a href="http://bhmia6i7dnfazb7n6clhzhsiwscb3fijgjxtpuoihwyixeysb3oq.b32.i2p/">I2P Mirror 3</a></div></div></div>
                    </div>
                </div>
                <div class="container nopadding">
                    <div class="container-header">
                        Latest Announcements &nbsp;―&nbsp; <a href="http://2fzhe7csdmsl6tqfevrabnctewlh3ynro7zlkd5ie4xlai4mahr2fqid.onion/announcements.php">View All</a>
                    </div>
                    <div class="container-content">
                        <div class="form-group"><span class="shadow-text">24th July</span><br><strong>Monero Withdraws</strong><br>Greetings all,<br>
Irrespective of the recent downtime - some users will have experienced a
 delay in withdrawing XMR from the platform. This is simply due to a 
backlog in transactions and synchronisation errors.<br>
<br>
Any and all outstanding XMR withdraws have been manually processed and the server congestion has been realised and mitigated.<br>
<br>
Apologies for any inconvenience.<br>
- The Bohemia Team</div><div class="form-group"><span class="shadow-text">23rd July</span><br><strong>Recent Downtime</strong><br>Greetings all.<br>
<br>
Once again we've been put to the test with recent DDoS attacks etc, and 
we can only apologize for the lack of uptime over the past couple of 
days. Rest assured we are working around the clock and everything is 
gradually being mitigated and will be stamped out in due course.<br>
<br>
Outstanding support tickets and disputes will be attended as soon as possible.<br>
<br>
Furthermore, we are also introducing some behind the scenes upgrades to 
prevent future mishaps as we are now in a position which forces us to 
employ certain measures in order for us to provide the same level and 
quality of service and uptime that you're all used too. We sincerely 
appreciate your patience throughout this time and we will release 
announcements as and when required.<br>
<br>
Stay safe.<br>
Love to all,<br>
- The Bohemia Team</div><div class="form-group"><span class="shadow-text">16th July</span><br><strong>ASAP Refugees</strong><br>Greetings
 all, in light of recent events surrounding the closure of ASAP - we'd 
like to extend a very warm welcome to refugees seeking their new home 
with Bohemia / Cannabia. <br>
<br>
Please take some time to familiarise yourself with the platform(s) and 
don't hesitate to open a ticket if you encounter any difficulties on 
your journey.<br>
<br>
ASAP merchants are welcome to put forward an application to have their 
seller bond waived. We endavour to treat all of our users fairly and the
 bond waiver will be decided on a case-by-case basis.<br>
<br>
Aside from the elephant in the room, we wish all of our users a fruitful summer moving forward.<br>
<br>
Best wishes,<br>
- The Bohemia Team.</div>                    </div>
                </div>
                <div style="text-align:center;font-weight:bold;">
   <p>Find Bohemia On</p>
   <a href="https://bohemia.so/">Bohemia.SO</a> &nbsp;|&nbsp; <a href="http://dreadytofatroptsdj6io7l3xptbet6onoyno2yv7jicoxknyazubrad.onion/d/Bohemia">Dread</a> &nbsp;|&nbsp; <a href="http://recon222tttn4ob7ujdhbn3s4gjre7netvzybuvbq2bcqwltkiqinhad.onion/markets/Bohemia">Recon</a> &nbsp;|&nbsp; <a href="http://darkzzx4avcsuofgfez5zq75cqc4mprjvfqywo45dfcaxrwqg6qrlfid.onion/markets/bohemia/">DarkNetLive</a> &nbsp;|&nbsp; <a href="http://tortaxi7axhn2fv4j475a6blv7vwjtpieokolfnojwvkhsnj7sgctkqd.onion/bohemia">Tor.Taxi</a> &nbsp;|&nbsp; <a href="http://darkfailenbsdla5mal2mxn2uz66od5vtzd5qozslagrfzachha3f3id.onion/bohemia">Dark.Fail</a> &nbsp;|&nbsp; <a href="http://bhmia6i7dnfazb7n6clhzhsiwscb3fijgjxtpuoihwyixeysb3oq.b32.i2p/">I2P</a> &nbsp;
</div>
            </div>
        </div>
        <img src="Bohemia%20-%20Homepage_files/task.html" alt="" width="1" height="1">

            </div>



</body>
</html>