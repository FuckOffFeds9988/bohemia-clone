<div class="product-heading">
                                                
                                                <h2><a href="#" class="product-link"><?php echo $row['name']; ?></a></h2>
                                                <span class="shadow-text smalltext">In <strong><?php echo $row3['name'] ?></strong></span><br>
                                                <b>Sold By <a href="#">
                                                <?php echo $rowVendorName['vendor_name']?> </a> ( <div class="" style="display: inline-block; margin-left:-8px; float: none; width:20px; position:absolute;"><img src="images/icons8-star-48.png"></div>&nbsp; <strong>
                                                <?php echo $rowVendorRating['vendor_rating']; ?>  </strong> )</b> <span class="badge badge-pill" style="display:inline-block;vertical-align: middle;margin-bottom: 1px; background-color: black; color: white;">Level 1</span>&nbsp;<div class="sprite sprite--shopping-cart" title="Total Sales" style="float: none; display: inline-block; margin-left:5px;;"></div>&nbsp; 0<br>
                                                                        
                                                                    </div>
                                            <div class="product-details-bottom" style="">
                                                <div class="sold-amount smalltext">Sold (Number of Times) times in the last 48 hours</div>
                                               <span class="smalltext"><?php echo $rowTimesSold['times_sold_last_48_hr'] ?></span>
                                               <span class="smalltext">Sold times in total</span>
                                               
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <span class="badge badge-pill badge-secondary">Status</span>                                                                                        <br>                                            Unlimited 
                                            Available <?php echo $rowAvailable['available'] ?>
                                            <h2>USD <?php echo $row['selling_price'] ?> </h2>
                                            <span class="shadow-text smalltext boldtext">
                                               <!--needs to pull data from current bitcoin price--> 0.00010301 BTC<br>0.01870622 XMR<br>                                            </span>