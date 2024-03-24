<?php 
//include("myfunctions.php");
include("db.php");
include("userfunctions.php");

if (isset($_GET['category']))
{

$category_slug = $_GET['category'];
$category_data = getSlugActive("categories", $category_slug);
$category = mysqli_fetch_array($category_data);
if($category)
{
    $cid = $category['id'];
}


?>
<head>
    <title>Bohemia - Homepage</title>
            <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="Bohemia%20-%20Homepage_files/flexboxgrid.min.css">
        <link rel="stylesheet" type="text/css" href="Bohemia%20-%20Homepage_files/fontawesome-all.min.css">
        <link rel="stylesheet" type="text/css" href="Bohemia%20-%20Homepage_files/style.css">
        <link rel="stylesheet" type="text/css" href="Bohemia%20-%20Homepage_files/main.css">
        <link rel="stylesheet" type="text/css" href="Bohemia%20-%20Homepage_files/responsive.css">        
        <link rel="stylesheet" type="text/css" href="Bohemia%20-%20Homepage_files/sprite.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="day.css">
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

                        
                        <li><a href="http://2fzhe7csdmsl6tqfevrabnctewlh3ynro7zlkd5ie4xlai4mahr2fqid.onion/listings.php">Listings</a></li>
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
                            <a href="categories.php" class="dropbtn">
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
                  <a href="http://2fzhe7csdmsl6tqfevrabnctewlh3ynro7zlkd5ie4xlai4mahr2fqid.onion/cart.php">
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
                    <a href="http://2fzhe7csdmsl6tqfevrabnctewlh3ynro7zlkd5ie4xlai4mahr2fqid.onion/notifications.php">
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
<div class="py-3 bg-primary" style="color: #fff;
    background-color: black;">
    <div class="container">
        <h6 class="text-white"> 
        <a class="text-white" href="categories.php">    
        Home / 
</a>
<a class="text-white" href="categories.php">    
        Categories / 
</a>
        <?=$category['name'];?></h6>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3><?$category['name']; ?></h3>
                <hr>
                <div class="row" style="">
                    <?php 
                        $products = getProdByCategory($cid);

                        if(mysqli_num_rows($products) > 0)
                        {
                            foreach($products as $item)
                            {
                                ?>
                                    <div class="col-md-3 mb-2">
                                        <a href="product-view.php?product=<?= $item['slug'];?>">
                                            <div class="card shadow">
                                                <div class="card-body" style="    
                                                  
                                                  width: 300px;
                                                  height: auto;
                                                  display:inline-block;
                                                  text-align:center;
                                                  ">
                                                  
                                                    <img src="uploads/<?= $item['image']; ?>" alt="Product Image" class="w-100" width="50%" height="10%">
                                                    <h4 class="text-center"><?= $item['name']; ?></h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php
                            }
                        }else{
                            echo "No products under this category";
                        }
                    }
                        else
                        {
                            echo "Something Went Wrong";
                        }
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>
                    </div>