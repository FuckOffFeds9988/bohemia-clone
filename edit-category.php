<?php 

include('adminMiddleware.php'); 

include('myfunctions.php');

include('alertify.php');
include('db.php');

if(isset($_POST['update_category_btn']))
{
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keywords = $_POST['meta_keywords'];
    $status = isset($_POST['status']) ? '1':'0' ;
    $popular = isset($_POST['popular']) ? '1':'0';

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];

    if($new_image != "")
    {
        // $update_filename = $new_image;
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = time().'.'.$image_ext;
    }
    else
    {
        $update_filename = $old_image;
    }
    $path = "uploads";

    $update_query = "UPDATE categories SET name='$name', slug='$slug', description='$description', 
    meta_title='$meta_title', meta_description='$meta_description', meta_keywords='$meta_keywords', 
    status='$status', popular='$popular', image='$update_filename' WHERE id='$category_id' ";

    $update_query_run = mysqli_query($con, $update_query);

    if($update_query_run)
    {
        if($_FILES['image']['name'] != "")
        {
            move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$update_filename);
            if(file_exists("uploads".$old_image))
            {
                unlink("uploads".$old_image);
            }
        }
        ?>
        <script>
            $(document).ready(function () {
                
                alertify.set('notifier','position', 'top-right');
                alertify.success('Category Edited Successfully');
            });
        </script>
        <?php
        // echo '<script>alert("Edited Category Successfully")</script>';
        // redirect("edit-cat-successful.php", "");
       
    }
    else
    {
        redirect("edit-category.php?id=$category_id", "Something Went wrong");
    }

}


?>
<!DOCTYPE html>
<html>
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
        
</head>

<body>
    <div class="navigation">
        <div class="wrapper">
            <ul>
                <li class="nav-logo"><a href="http://2fzhe7csdmsl6tqfevrabnctewlh3ynro7zlkd5ie4xlai4mahr2fqid.onion/"><img src="Bohemia%20-%20Homepage_files/logo_small.png" style="height: 100%;"></a></li>
                <div class="responsive-menu">
                    <li class="menu-toggler"><a href="#">Navigation&nbsp; <div class="sprite sprite--caret" style="float: none; display: inline-block; margin-left:5px;"></div></a></li>
                    <div class="menu-links">
                        <li class=""><a href="homepage.php">Home</a></li>
                        
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
                                All Categories
                                                                    </a>
                            <a href="add-category.php">
                                Categories
                                                                    </a>
                        <a href="edit-category.php" style = background-color:#4b7aa2;>
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
<div class="container">
    <div class="row">
       <div class="col-md-12">
           <?php 
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
                $category = getByID("categories", $id);

                if(mysqli_num_rows($category) > 0)
                {
                    $data = mysqli_fetch_array($category);
                    ?>
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h3 class="text-white" style="text-align:center;">Edit Category
                                    <!--<a href="category.php" class="btn btn-primary float-end">Back</a>-->
                                </h4>
                            </div>
                            <div class="card-body">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="hidden" name="category_id" value="<?= $data['id'] ?>">
                                                <label for="">Name</label>
                                                <input type="text" name="name" value="<?= $data['name'] ?>" placeholder="Enter Category Name" class="form-control">
                                            </div>
                                           
                                            <div class="col-md-6">
                                                <label for="">Slug</label>
                                                <input type="text" name="slug" value="<?= $data['slug'] ?>" placeholder="Enter slug" class="form-control">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Description</label>
                                                <textarea rows="3" name="description" placeholder="Enter description" class="form-control"><?= $data['description'] ?></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Upload Image</label>
                                                <input type="file" name="image" class="form-control">
                                                <label for="">Current Image</label>
                                                <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
                                                <img src="uploads/<?= $data['image'] ?>" style="width:10%;" height="50px" width="50px" alt="">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Meta Title</label>
                                                <input type="text" name="meta_title" value="<?= $data['meta_title'] ?>" placeholder="Enter meta title" class="form-control">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Meta Description</label>
                                                <textarea rows="3" name="meta_description" placeholder="Enter meta description" class="form-control"><?= $data['meta_description'] ?></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Meta Keywords</label>
                                                <textarea rows="3" name="meta_keywords" placeholder="Enter meta keywords" class="form-control"><?= $data['meta_keywords'] ?></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Status</label>
                                                <input type="checkbox" <?= $data['status'] ? "checked":"" ?> name="status">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Popular</label>
                                                <input type="checkbox" <?= $data['popular'] ? "checked":"" ?> name="popular">
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary" name="update_category_btn">Update</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    <?php
                  
                }
                else
                {
                    echo "Category not found";
                }
            }
            else
            {
                echo "Id missing from url";
            } 

            
                ?>
                </div>
       </div>
    </div>
</div>

