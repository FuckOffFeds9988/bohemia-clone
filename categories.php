<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Categories</title>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<!-- AlertifyJS -->
<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<!-- AlertifyJS CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="day.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="password-strength-indicator.css">
<link rel="stylesheet" type="text/css" href="Bohemia%20-%20Homepage_files/flexboxgrid.min.css">
<link rel="stylesheet" type="text/css" href="Bohemia%20-%20Homepage_files/fontawesome-all.min.css">
<link rel="stylesheet" type="text/css" href="Bohemia%20-%20Homepage_files/style.css">
<link rel="stylesheet" type="text/css" href="Bohemia%20-%20Homepage_files/main.css">
<link rel="stylesheet" type="text/css" href="Bohemia%20-%20Homepage_files/responsive.css">
<link rel="stylesheet" type="text/css" href="Bohemia%20-%20Homepage_files/sprite.css">

</head>
<body>

<div class="navigation">
    <div class="wrapper">
        <ul>
            <!-- Your navigation links -->
        </ul>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary" style="background-color:black;">
                    <h4 class="text-white" style="color:white; text-align:center;"> Categories</h4>
                </div>
                <div class="card-body" id="category_table">
                    <!-- Your table content -->
                    <table class="table table-bordered table-striped">
                        <thead>
                            <!-- Table header -->
                        </thead> 
                        <tbody>
                            <!-- Table body -->
                            <tr>
                                <!-- Table row -->
                                <td>
                                    <!-- Table data -->
                                    <!-- Wrap the delete button inside a div for alignment -->
                                    <div class="delete-btn-container">
                                        <a href="edit-category.php?id=1" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="" style="display:inline-block; margin-left:20px" method="POST">
                                            <input type="hidden" name="category_id" value="1">
                                            <button type="submit" onclick="confirm('Are you sure to delete this?')" style="color: #fff;background-color: #bd2130;border-color: #b21f2d;margin-top: 0px;margin-left: 20px;position: absolute;
" class="btn btn-sm btn-danger" name="delete_category_btn">Delete</button>
                                        </form> 
                                    </div>
                                </td>
                            </tr>
                            <!-- Repeat the above structure for other table rows -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- Your custom scripts here -->
</body>
</html>
