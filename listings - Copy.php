<?php
session_start();
require_once("db.php");
?>

<!DOCTYPE html>
<html><head>
    <title>Bohemia - Listings</title>        <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="Listings_files/flexboxgrid.min.css">
        <link rel="stylesheet" type="text/css" href="Listings_files/fontawesome-all.min.css">
        <link rel="stylesheet" type="text/css" href="Listings_files/style.css">
        <link rel="stylesheet" type="text/css" href="Listings_files/main.css">
        <link rel="stylesheet" type="text/css" href="Listings_files/responsive.css">        
        <link rel="stylesheet" type="text/css" href="sprite.css">
        <link rel="stylesheet" href="style.css">
        
           
</head>

<body><div class="navigation">
        <div class="wrapper">
            <ul>
                <li class="nav-logo"><a href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/"><img src="Listings_files/logo_small.png" style="height: 100%;"></a></li>
                <div class="responsive-menu">
                    <li class="menu-toggler"><a href="#">Navigation&nbsp; <div class="sprite sprite--caret" style="float: none; display: inline-block; margin-left:5px;"></div></a></li>
                    <div class="menu-links">
                        <li><a href="homepage.php">Home</a></li>
                        
                        <li class="dropdown-link dropdown-large ">
                            <a href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/usercp.php?action=orders" class="dropbtn">
                                Orders
                                                            </a>
                            <div class="dropdown-content right-dropdown">
                                <a href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/usercp.php?action=orders">Processing&nbsp; <span class="badge badge-secondary right">0</span></a>
                                <a href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/usercp.php?action=orders&amp;do=shipped">Dispatched&nbsp; <span class="badge badge-secondary right">0</span></a>
                                <a href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/usercp.php?action=orders&amp;do=processed">Completed&nbsp; <span class="badge badge-danger right">1</span></a>
                                <a href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/usercp.php?action=orders&amp;do=disputed">Disputed&nbsp; <span class="badge badge-secondary right">0</span></a>
                                <a href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/usercp.php?action=orders&amp;do=canceled">Cancelled</a>
                            </div>
                        </li>

                        
                        <li class="active"><a href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/listings.php">Listings</a></li>
                        <li class="dropdown-link dropdown-large ">
                            <a href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/messages.php" class="dropbtn">
                                Messages&nbsp;
                                <span class="badge badge-secondary">0</span>                            </a>
                            <div class="dropdown-content right-dropdown">
                                <a href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/messages.php?action=compose">Compose Message</a>
                                <a href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/messages.php">Inbox</a>
                                <a href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/messages.php?action=sent">Sent Items</a>
                            </div>
                        </li>
			<li class="dropdown-link dropdown-large">
			    <a href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/usercp.php?action=wallet" class="dropbtn">Wallet</a>
			    <div class="dropdown-content right-dropdown">
                                <a href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/usercp.php?action=exchange">Exchange</a>
                            </div>
			</li>
                        <li class="dropdown-link dropdown-large ">
                            <a href="#" class="dropbtn">
                                Support
                                                            </a>
                            <div class="dropdown-content right-dropdown">
                                <a href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/faq.php">F.A.Q</a>
                                <a href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/support.php">
                                    Support Tickets
                                                                    </a>
                                <a href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/support?action=new&amp;do=bugreport">
                                    Report Bug
                                </a>
                            </div>
                        </li>
                    </div>
                </div>

                <li class="dropdown-link user-nav right fix-gap">
                    <button class="dropbtn">60Agent&nbsp; <div class="sprite sprite--caret" style="float: right; top: 1px;"></div></button>
                    <div class="dropdown-content">
                        
                        <div class="user-balance">
                            <span class="shadow-text">Balances</span><br>
                            <span class="balance">$</span>4.73 <sup>0.00016300 BTC</sup><br><span class="balance">$</span>0.23 <sup>0.00141754 XMR</sup><br>
                        </div>
                                                <a href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/profile.php?id=60Agent">My Profile</a>

                        <a href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/theme.php">Night Mode</a>
                        <a href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/usercp.php">User CP</a>
                        <a href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/logout.php">Logout</a>
                    </div>
                </li>
                <li class="right shopping-cart-link ">
                    <a href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/cart.php">
                        <div class="sprite sprite--cart" style="float: none; display: inline-block; margin-left:5px;;"></div>
                                            </a>
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
                <li class="right shopping-cart-link ">
                  <a href="http://2fzhe7csdmsl6tqfevrabnctewlh3ynro7zlkd5ie4xlai4mahr2fqid.onion/cart.php">
                    <img src="alert-bell.png" style="    
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
             
                
                <li class="right fix-gap "><a href="#"><b>Become A Merchant</b></a></li>
                
        </div>
    </div>
    <div class="wrapper">
        <div class="row">
            <div class="col-md-3 sidebar-navigation">
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
                    Computers
                    <span class="amount">0</span>
                </a>
            </li>

		
            <li class="secondary-category">
                <a href="#">
                    <input type="checkbox" name="catid" value="28">
                    Motherboards
                    <span class="amount">0</span>
                </a>
            </li>

		
            <li class="secondary-category">
                <a href="#">
                    <input type="checkbox" name="catid" value="29">
                    Ram
                    <span class="amount">0</span>
                </a>
            </li>

		</ul>            </li><li>
        
    </div>
</div>
                <div class="container listing-sorting detail-container">
    <div class="container-header">
        <div class="sprite sprite--search"></div>&nbsp; Advanced Search
    </div>
    <div class="container-content">
        <form action="listings.php" method="GET">
            <div class="form-group">
                <div><label>Search by Keyword / Merchant Name</label></div>
                <input type="text" class="form-control" name="query">
	    </div>
	    <div class="form-group">
                <div><label>Sort by</label></div>
                <select class="form-control" name="sortby">
                    <option value="mosthighest" selected="selected">Highest to lowest price</option>
                    <option value="cheapest">Lowest to highest price</option>
                    <option value="oldest">Oldest to newest</option>
                    <option value="newest">Newest to oldest</option>
                    <option value="mostrated">Highest rated</option>
                </select>
            </div>
            <div class="form-inline">
                    <div><label>Price range</label></div>
                <div class="form-group" style="width: 45%;">
                    <input type="number" name="priceFrom" step="0.01" class="form-control" placeholder="Price from">
                </div>
                <div class="form-group" style="float: right; width: 45%;">
                    <input type="number" name="priceTo" step="0.01" class="form-control" placeholder="Price to">
                </div>
            </div>
            <div class="form-group">
                <div><label>Ships from</label></div>
                <select class="form-control" name="shipFrom">
                    <option selected="selected"></option>
                    <option value="1">Afghanistan</option><option value="2">Albania</option><option value="3">Algeria</option><option value="4">American Samoa</option><option value="5">Andorra</option><option value="6">Angola</option><option value="7">Anguilla</option><option value="8">Antarctica</option><option value="9">Antigua and Barbuda</option><option value="10">Argentina</option><option value="11">Armenia</option><option value="12">Aruba</option><option value="13">Australia</option><option value="14">Austria</option><option value="15">Azerbaijan</option><option value="16">Bahamas</option><option value="17">Bahrain</option><option value="18">Bangladesh</option><option value="19">Barbados</option><option value="20">Belarus</option><option value="21">Belgium</option><option value="22">Belize</option><option value="23">Benin</option><option value="24">Bermuda</option><option value="25">Bhutan</option><option value="26">Bolivia</option><option value="27">Bosnia and Herzegovina</option><option value="28">Botswana</option><option value="29">Bouvet Island</option><option value="30">Brazil</option><option value="31">British Indian Ocean Territory</option><option value="32">Brunei Darussalam</option><option value="33">Bulgaria</option><option value="34">Burkina Faso</option><option value="35">Burundi</option><option value="36">Cambodia</option><option value="37">Cameroon</option><option value="38">Canada</option><option value="39">Cape Verde</option><option value="40">Cayman Islands</option><option value="41">Central African Republic</option><option value="42">Chad</option><option value="43">Chile</option><option value="44">China</option><option value="45">Christmas Island</option><option value="46">Cocos (Keeling) Islands</option><option value="47">Colombia</option><option value="48">Comoros</option><option value="51">Cook Islands</option><option value="52">Costa Rica</option><option value="53">Croatia (Hrvatska)</option><option value="54">Cuba</option><option value="55">Cyprus</option><option value="56">Czech Republic</option><option value="49">Democratic Republic of the Congo</option><option value="57">Denmark</option><option value="58">Djibouti</option><option value="59">Dominica</option><option value="60">Dominican Republic</option><option value="61">East Timor</option><option value="62">Ecuador</option><option value="63">Egypt</option><option value="64">El Salvador</option><option value="65">Equatorial Guinea</option><option value="66">Eritrea</option><option value="67">Estonia</option><option value="68">Ethiopia</option><option value="69">Falkland Islands (Malvinas)</option><option value="70">Faroe Islands</option><option value="71">Fiji</option><option value="72">Finland</option><option value="73">France</option><option value="74">France, Metropolitan</option><option value="75">French Guiana</option><option value="76">French Polynesia</option><option value="77">French Southern Territories</option><option value="78">Gabon</option><option value="79">Gambia</option><option value="80">Georgia</option><option value="81">Germany</option><option value="82">Ghana</option><option value="83">Gibraltar</option><option value="85">Greece</option><option value="86">Greenland</option><option value="87">Grenada</option><option value="88">Guadeloupe</option><option value="89">Guam</option><option value="90">Guatemala</option><option value="84">Guernsey</option><option value="91">Guinea</option><option value="92">Guinea-Bissau</option><option value="93">Guyana</option><option value="94">Haiti</option><option value="95">Heard and Mc Donald Islands</option><option value="96">Honduras</option><option value="97">Hong Kong</option><option value="98">Hungary</option><option value="99">Iceland</option><option value="100">India</option><option value="102">Indonesia</option><option value="103">Iran (Islamic Republic of)</option><option value="104">Iraq</option><option value="105">Ireland</option><option value="101">Isle of Man</option><option value="106">Israel</option><option value="107">Italy</option><option value="108">Ivory Coast</option><option value="110">Jamaica</option><option value="111">Japan</option><option value="109">Jersey</option><option value="112">Jordan</option><option value="113">Kazakhstan</option><option value="114">Kenya</option><option value="115">Kiribati</option><option value="116">Korea, Democratic People's Republic of</option><option value="117">Korea, Republic of</option><option value="118">Kosovo</option><option value="119">Kuwait</option><option value="120">Kyrgyzstan</option><option value="121">Lao People's Democratic Republic</option><option value="122">Latvia</option><option value="123">Lebanon</option><option value="124">Lesotho</option><option value="125">Liberia</option><option value="126">Libyan Arab Jamahiriya</option><option value="127">Liechtenstein</option><option value="128">Lithuania</option><option value="129">Luxembourg</option><option value="130">Macau</option><option value="132">Madagascar</option><option value="133">Malawi</option><option value="134">Malaysia</option><option value="135">Maldives</option><option value="136">Mali</option><option value="137">Malta</option><option value="138">Marshall Islands</option><option value="139">Martinique</option><option value="140">Mauritania</option><option value="141">Mauritius</option><option value="142">Mayotte</option><option value="143">Mexico</option><option value="144">Micronesia, Federated States of</option><option value="145">Moldova, Republic of</option><option value="146">Monaco</option><option value="147">Mongolia</option><option value="148">Montenegro</option><option value="149">Montserrat</option><option value="150">Morocco</option><option value="151">Mozambique</option><option value="152">Myanmar</option><option value="153">Namibia</option><option value="154">Nauru</option><option value="155">Nepal</option><option value="156">Netherlands</option><option value="157">Netherlands Antilles</option><option value="158">New Caledonia</option><option value="159">New Zealand</option><option value="160">Nicaragua</option><option value="161">Niger</option><option value="162">Nigeria</option><option value="163">Niue</option><option value="164">Norfolk Island</option><option value="131">North Macedonia</option><option value="165">Northern Mariana Islands</option><option value="166">Norway</option><option value="167">Oman</option><option value="168">Pakistan</option><option value="169">Palau</option><option value="170">Palestine</option><option value="171">Panama</option><option value="172">Papua New Guinea</option><option value="173">Paraguay</option><option value="174">Peru</option><option value="175">Philippines</option><option value="176">Pitcairn</option><option value="177">Poland</option><option value="178">Portugal</option><option value="179">Puerto Rico</option><option value="180">Qatar</option><option value="50">Republic of Congo</option><option value="181">Reunion</option><option value="182">Romania</option><option value="183">Russian Federation</option><option value="184">Rwanda</option><option value="185">Saint Kitts and Nevis</option><option value="186">Saint Lucia</option><option value="187">Saint Vincent and the Grenadines</option><option value="188">Samoa</option><option value="189">San Marino</option><option value="190">Sao Tome and Principe</option><option value="191">Saudi Arabia</option><option value="192">Senegal</option><option value="193">Serbia</option><option value="194">Seychelles</option><option value="195">Sierra Leone</option><option value="196">Singapore</option><option value="197">Slovakia</option><option value="198">Slovenia</option><option value="199">Solomon Islands</option><option value="200">Somalia</option><option value="201">South Africa</option><option value="202">South Georgia South Sandwich Islands</option><option value="203">South Sudan</option><option value="204">Spain</option><option value="205">Sri Lanka</option><option value="206">St. Helena</option><option value="207">St. Pierre and Miquelon</option><option value="208">Sudan</option><option value="209">Suriname</option><option value="210">Svalbard and Jan Mayen Islands</option><option value="211">Swaziland</option><option value="212">Sweden</option><option value="213">Switzerland</option><option value="214">Syrian Arab Republic</option><option value="215">Taiwan</option><option value="216">Tajikistan</option><option value="217">Tanzania, United Republic of</option><option value="218">Thailand</option><option value="219">Togo</option><option value="220">Tokelau</option><option value="221">Tonga</option><option value="222">Trinidad and Tobago</option><option value="223">Tunisia</option><option value="224">Turkey</option><option value="225">Turkmenistan</option><option value="226">Turks and Caicos Islands</option><option value="227">Tuvalu</option><option value="228">Uganda</option><option value="229">Ukraine</option><option value="230">United Arab Emirates</option><option value="231">United Kingdom</option><option value="233">United States</option><option value="234">Uruguay</option><option value="235">Uzbekistan</option><option value="236">Vanuatu</option><option value="237">Vatican City State</option><option value="238">Venezuela</option><option value="239">Vietnam</option><option value="240">Virgin Islands (British)</option><option value="241">Virgin Islands (U.S.)</option><option value="242">Wallis and Futuna Islands</option><option value="243">Western Sahara</option><option value="244">Yemen</option><option value="245">Zambia</option><option value="246">Zimbabwe</option>                </select>
            </div>
            <div class="form-group">
                <div><label>Ships to</label></div>
                <select class="form-control" name="shipTo">
                    <option selected="selected"></option>
                    <option value="250">Africa</option><option value="232">America</option><option value="249">Asia</option><option value="248">Europe</option><option value="252">Worldwide</option><option value="1">Afghanistan</option><option value="2">Albania</option><option value="3">Algeria</option><option value="4">American Samoa</option><option value="5">Andorra</option><option value="6">Angola</option><option value="7">Anguilla</option><option value="8">Antarctica</option><option value="9">Antigua and Barbuda</option><option value="10">Argentina</option><option value="11">Armenia</option><option value="12">Aruba</option><option value="13">Australia</option><option value="14">Austria</option><option value="15">Azerbaijan</option><option value="16">Bahamas</option><option value="17">Bahrain</option><option value="18">Bangladesh</option><option value="19">Barbados</option><option value="20">Belarus</option><option value="21">Belgium</option><option value="22">Belize</option><option value="23">Benin</option><option value="24">Bermuda</option><option value="25">Bhutan</option><option value="26">Bolivia</option><option value="27">Bosnia and Herzegovina</option><option value="28">Botswana</option><option value="29">Bouvet Island</option><option value="30">Brazil</option><option value="31">British Indian Ocean Territory</option><option value="32">Brunei Darussalam</option><option value="33">Bulgaria</option><option value="34">Burkina Faso</option><option value="35">Burundi</option><option value="36">Cambodia</option><option value="37">Cameroon</option><option value="38">Canada</option><option value="39">Cape Verde</option><option value="40">Cayman Islands</option><option value="41">Central African Republic</option><option value="42">Chad</option><option value="43">Chile</option><option value="44">China</option><option value="45">Christmas Island</option><option value="46">Cocos (Keeling) Islands</option><option value="47">Colombia</option><option value="48">Comoros</option><option value="51">Cook Islands</option><option value="52">Costa Rica</option><option value="53">Croatia (Hrvatska)</option><option value="54">Cuba</option><option value="55">Cyprus</option><option value="56">Czech Republic</option><option value="49">Democratic Republic of the Congo</option><option value="57">Denmark</option><option value="58">Djibouti</option><option value="59">Dominica</option><option value="60">Dominican Republic</option><option value="61">East Timor</option><option value="62">Ecuador</option><option value="63">Egypt</option><option value="64">El Salvador</option><option value="65">Equatorial Guinea</option><option value="66">Eritrea</option><option value="67">Estonia</option><option value="68">Ethiopia</option><option value="69">Falkland Islands (Malvinas)</option><option value="70">Faroe Islands</option><option value="71">Fiji</option><option value="72">Finland</option><option value="73">France</option><option value="74">France, Metropolitan</option><option value="75">French Guiana</option><option value="76">French Polynesia</option><option value="77">French Southern Territories</option><option value="78">Gabon</option><option value="79">Gambia</option><option value="80">Georgia</option><option value="81">Germany</option><option value="82">Ghana</option><option value="83">Gibraltar</option><option value="85">Greece</option><option value="86">Greenland</option><option value="87">Grenada</option><option value="88">Guadeloupe</option><option value="89">Guam</option><option value="90">Guatemala</option><option value="84">Guernsey</option><option value="91">Guinea</option><option value="92">Guinea-Bissau</option><option value="93">Guyana</option><option value="94">Haiti</option><option value="95">Heard and Mc Donald Islands</option><option value="96">Honduras</option><option value="97">Hong Kong</option><option value="98">Hungary</option><option value="99">Iceland</option><option value="100">India</option><option value="102">Indonesia</option><option value="103">Iran (Islamic Republic of)</option><option value="104">Iraq</option><option value="105">Ireland</option><option value="101">Isle of Man</option><option value="106">Israel</option><option value="107">Italy</option><option value="108">Ivory Coast</option><option value="110">Jamaica</option><option value="111">Japan</option><option value="109">Jersey</option><option value="112">Jordan</option><option value="113">Kazakhstan</option><option value="114">Kenya</option><option value="115">Kiribati</option><option value="116">Korea, Democratic People's Republic of</option><option value="117">Korea, Republic of</option><option value="118">Kosovo</option><option value="119">Kuwait</option><option value="120">Kyrgyzstan</option><option value="121">Lao People's Democratic Republic</option><option value="122">Latvia</option><option value="123">Lebanon</option><option value="124">Lesotho</option><option value="125">Liberia</option><option value="126">Libyan Arab Jamahiriya</option><option value="127">Liechtenstein</option><option value="128">Lithuania</option><option value="129">Luxembourg</option><option value="130">Macau</option><option value="132">Madagascar</option><option value="133">Malawi</option><option value="134">Malaysia</option><option value="135">Maldives</option><option value="136">Mali</option><option value="137">Malta</option><option value="138">Marshall Islands</option><option value="139">Martinique</option><option value="140">Mauritania</option><option value="141">Mauritius</option><option value="142">Mayotte</option><option value="143">Mexico</option><option value="144">Micronesia, Federated States of</option><option value="145">Moldova, Republic of</option><option value="146">Monaco</option><option value="147">Mongolia</option><option value="148">Montenegro</option><option value="149">Montserrat</option><option value="150">Morocco</option><option value="151">Mozambique</option><option value="152">Myanmar</option><option value="153">Namibia</option><option value="154">Nauru</option><option value="155">Nepal</option><option value="156">Netherlands</option><option value="157">Netherlands Antilles</option><option value="158">New Caledonia</option><option value="159">New Zealand</option><option value="160">Nicaragua</option><option value="161">Niger</option><option value="162">Nigeria</option><option value="163">Niue</option><option value="164">Norfolk Island</option><option value="131">North Macedonia</option><option value="165">Northern Mariana Islands</option><option value="166">Norway</option><option value="167">Oman</option><option value="168">Pakistan</option><option value="169">Palau</option><option value="170">Palestine</option><option value="171">Panama</option><option value="172">Papua New Guinea</option><option value="173">Paraguay</option><option value="174">Peru</option><option value="175">Philippines</option><option value="176">Pitcairn</option><option value="177">Poland</option><option value="178">Portugal</option><option value="179">Puerto Rico</option><option value="180">Qatar</option><option value="50">Republic of Congo</option><option value="181">Reunion</option><option value="182">Romania</option><option value="183">Russian Federation</option><option value="184">Rwanda</option><option value="185">Saint Kitts and Nevis</option><option value="186">Saint Lucia</option><option value="187">Saint Vincent and the Grenadines</option><option value="188">Samoa</option><option value="189">San Marino</option><option value="190">Sao Tome and Principe</option><option value="191">Saudi Arabia</option><option value="192">Senegal</option><option value="193">Serbia</option><option value="194">Seychelles</option><option value="195">Sierra Leone</option><option value="196">Singapore</option><option value="197">Slovakia</option><option value="198">Slovenia</option><option value="199">Solomon Islands</option><option value="200">Somalia</option><option value="201">South Africa</option><option value="202">South Georgia South Sandwich Islands</option><option value="203">South Sudan</option><option value="204">Spain</option><option value="205">Sri Lanka</option><option value="206">St. Helena</option><option value="207">St. Pierre and Miquelon</option><option value="208">Sudan</option><option value="209">Suriname</option><option value="210">Svalbard and Jan Mayen Islands</option><option value="211">Swaziland</option><option value="212">Sweden</option><option value="213">Switzerland</option><option value="214">Syrian Arab Republic</option><option value="215">Taiwan</option><option value="216">Tajikistan</option><option value="217">Tanzania, United Republic of</option><option value="218">Thailand</option><option value="219">Togo</option><option value="220">Tokelau</option><option value="221">Tonga</option><option value="222">Trinidad and Tobago</option><option value="223">Tunisia</option><option value="224">Turkey</option><option value="225">Turkmenistan</option><option value="226">Turks and Caicos Islands</option><option value="227">Tuvalu</option><option value="228">Uganda</option><option value="229">Ukraine</option><option value="230">United Arab Emirates</option><option value="231">United Kingdom</option><option value="233">United States</option><option value="234">Uruguay</option><option value="235">Uzbekistan</option><option value="236">Vanuatu</option><option value="237">Vatican City State</option><option value="238">Venezuela</option><option value="239">Vietnam</option><option value="240">Virgin Islands (British)</option><option value="241">Virgin Islands (U.S.)</option><option value="242">Wallis and Futuna Islands</option><option value="243">Western Sahara</option><option value="244">Yemen</option><option value="245">Zambia</option><option value="246">Zimbabwe</option>                </select>
	    </div>
	    	<div class="form-group">
		<label><input type="checkbox" name="autoship" value="1">&nbsp; Autoship</label>
		</div>
		<div class="form-group">
                <div><label>Accepted Currencies</label></div>
                <label><input type="checkbox" name="currencies[]" value="4"> Bitcoin</label>&nbsp; 
           
            </div>
            <div class="form-group">
                <div><label>Product Type</label></div>
                <label><input type="radio" name="type" value="all" checked="checked"> All</label>&nbsp; 
                <label><input type="radio" name="type" value="digital"> Digital</label>&nbsp; 
                <label><input type="radio" name="type" value="physical"> Physical</label>&nbsp; <br>
            </div>
            <div class="form-group text-right">
                <button type="submit" class="btn btn-larger btn-blue" style="margin-bottom: 2px;">Search</button>
                            </div>
        </form>
    </div>
</div>
                <div class="container nopadding">
                    <table class="table exchange-table" cellspacing="0" cellpadding="0">
                        <tbody><tr>
                            <th></th>
                                                            <th><strong>
                                    <div class="sprite sprite--bitcoin" style="top:2px;"></div>&nbsp;Bitcoin 
                                </strong></th>
                                                            <th><strong>
                                    <div class="sprite sprite--monero" style="top:2px;"></div>&nbsp;Monero 
                                </strong></th>
                                                    </tr>
                                                    <tr>
                                <td><strong>
                                    AUD                                </strong></td>
                                    <td class="text-center"><?php require_once("aud-current-price-btc.php") ?></td>
                               
                                    <td class="text-center">Not Accepted</td>
                            </tr>
                                                    <tr>
                                <td><strong>
                                    CAD                                </strong></td>
                                <td class="text-center"><?php require_once("cad-current-price-btc.php") ?></td>
                                <td class="text-center">Not Accepted</td>
                            </tr>
                                                    <tr>
                                <td><strong>
                                    EUR                                </strong></td>
                                <td class="text-center"><?php require_once("euro-current-price-btc.php") ?></td>
                                <td class="text-center">Not Accepted</td>
                            </tr>
                                                    <tr>
                                <td><strong>
                                    GBP                                </strong></td>
                                <td class="text-center"><?php require_once("GBP-current-price-btc.php") ?></td>
                                <td class="text-center">Not Accepted</td>
                            </tr>
                                                    <tr>
                                <td><strong>
                                    USD                                </strong></td>
                                <td class="text-center"><?php require_once("usd-current-price-btc.php") ?></td>
                                <td class="text-center">Not Accepted</td>
                            </tr>
                                            </tbody></table>
                </div>
            </div>
            <div class="col-md-9 sidebar-content-right listing-content">
                <div class="product-listing">
                                                <div class="product-link">
                                <div class="product">
                                    <div class="container">
                                        <div class="product-photo">
                                                                                            <img src="images/samsung-galazy-z-flip.jpg">
                                                                                    </div>
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
                                 $total_items_query = "SELECT total_sold FROM products";
                                 $result_total_items = mysqli_query($con,$total_items_query);
                                 $total_items_row = mysqli_fetch_array($result_total_items);



                              ?>
                            <?php
                                    
                                  

                            ?>
                            <!-- listings?page=2&type=all&catid=11 make a database name it listings pulll table data from products page query 
                                 the database for the the listings,page,type,and category id -->

                                        <div class="product-details">
                                            <div class="product-heading">
                                                
                                                <h2><a href="#" class="product-link"><?php echo $row['name']; ?></a></h2>
                                                <span class="shadow-text smalltext">In <strong><?php echo $row3['name'] ?></strong></span><br>
                                                <b>Sold By <a href="#">
                                                <?php echo $rowVendorName['vendor_name']?> </a> ( <div class="" style="display: inline-block; margin-left:-8px; float: none; width:20px; position:absolute;"><img src="images/icons8-star-48.png"></div>&nbsp; <strong>
                                                <?php echo $rowVendorRating['vendor_rating']; ?>  </strong> )</b> <span class="badge badge-pill" style="display:inline-block;vertical-align: middle;margin-bottom: 1px; background-color: black; color: white;">Level 1</span>&nbsp;<div class="sprite sprite--shopping-cart" title="Total Sales" style="float: none; display: inline-block; margin-left:5px;;"></div>&nbsp; 0<br>
                                                                        
                                                                    </div>
                                            <div class="product-details-bottom">
                                                <div class="sold-amount smalltext">Sold (Number of Times) times in the last 48 hours</div>
                                               <span class="smalltext"><?php echo $rowTimesSold['times_sold_last_48_hr'] ?></span>
                                               <span class="smalltext">Sold times in total</span>
                                               
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <span class="badge badge-pill badge-secondary">Status</span>                                                                                        <br>                                            Unlimited 
                                            Available <?php echo $rowAvailable['available'] ?>
                                            <h2>USD <?php echo $row['selling_price'] ?> </h2>
                                            <span class="shadow-text smalltext boldtext">0.00010301 BTC<br>0.01870622 XMR<br>                                            </span></div>
                                    </div>
                                </div>
                            </div>
                         

                            <?php
$start = 0;
$rows_per_page = 1;
$products_query = "SELECT * FROM products";
$result = mysqli_query($con, $products_query);

// Count total records
$records_query = "SELECT * FROM products";
$records_result = mysqli_query($con, $records_query);
$nr_of_rows = mysqli_num_rows($records_result);

// Calculate total pages
$pages = ceil($nr_of_rows / $rows_per_page);

// Initialize current page variable
$current_page = isset($_GET['page']) ? max(1, min($_GET['page'], $pages)) : 1;

// Adjust the query to retrieve the specific page
$start = ($current_page - 1) * $rows_per_page;
$products_query = "SELECT * FROM products LIMIT $start, $rows_per_page";
$result = mysqli_query($con, $products_query);
?>

<!-- Display products -->
<?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <div class="product">
                                    <div class="container">
                                        <div class="product-photo">
                                                                                            <img src="images/samsung-galazy-z-flip.jpg">
                                                                                    </div>
                                                                                                                                                                       <!-- listings?page=2&type=all&catid=11 make a database name it listings pulll table data from products page query 
                                 the database for the the listings,page,type,and category id -->

                                        <div class="product-details">
                                            <div class="product-heading">
                                                
                                                <h2><a href="#" class="product-link">Samsung Galaxy Z Flip 2</a></h2>
                                                <span class="shadow-text smalltext">In <strong>Mobiles</strong></span><br>
                                                <b>Sold By <a href="#">
                                                logitech </a> ( <div class="" style="display: inline-block; margin-left:-8px; float: none; width:20px; position:absolute;"><img src="images/icons8-star-48.png"></div>&nbsp; <strong>
                                                5  </strong> )</b> <span class="badge badge-pill" style="display:inline-block;vertical-align: middle;margin-bottom: 1px; background-color: black; color: white;">Level 1</span>&nbsp;<div class="sprite sprite--shopping-cart" title="Total Sales" style="float: none; display: inline-block; margin-left:5px;;"></div>&nbsp; 0<br>
                                                                        
                                                                    </div>
                                            <div class="product-details-bottom">
                                                <div class="sold-amount smalltext">Sold (Number of Times) times in the last 48 hours</div>
                                               <span class="smalltext">0</span>
                                               <span class="smalltext">Sold times in total</span>
                                               
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <span class="badge badge-pill badge-secondary">Status</span>                                                                                        <br>                                            Unlimited 
                                            Available 0                                            <h2>USD 100 </h2>
                                            <span class="shadow-text smalltext boldtext">0.00010301 BTC<br>0.01870622 XMR<br>                                            </span></div>
                                    </div>
                                </div>
                                <div class="container" style="display:inline-block; width:100%;">
                                    <div class="product-photo">
                                    <?php
                                    $host = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $database = "market";
                                    
                                    // creating database connection
                                    $con = mysqli_connect($host,$username,$passsword,$database);
                                    
                                    //Check database connection
                                    if($con)
                                    {
                                        die("Connection Failed ". mysqli_connect_error());
                                    }
                                    
                                

$sql = "SELECT products FROM image WHERE id=?";
$result = mysqli_execute_query($link, $sql, [$_GET['id']]);
$image = mysqli_fetch_column($result);

header("Content-type: image/jpeg");
echo $image;
                ?>                    


</div>
   <div class="product-details"style="display:inline-block; width:100%;">>
                                            <div class="product-heading">
                                                
                                                <h2><a href="#" class="product-link"><?php echo $row['name']; ?></a></h2>
                                                <span class="shadow-text smalltext">In <strong><?php echo $row3['name'] ?></strong></span><br>
                                                <b>Sold By <a href="#">
                                                <?php echo $rowVendorName['vendor_name']?> </a> ( <div class="" style="display: inline-block; margin-left:-8px; float: none; width:20px; position:absolute;"><img src="images/icons8-star-48.png"></div>&nbsp; <strong>
                                                <?php echo $rowVendorRating['vendor_rating']; ?>  </strong> )</b> <span class="badge badge-pill" style="display:inline-block;vertical-align: middle;margin-bottom: 1px; background-color: black; color: white;">Level 1</span>&nbsp;<div class="sprite sprite--shopping-cart" title="Total Sales" style="float: none; display: inline-block; margin-left:5px;;"></div>&nbsp; 0<br>
                                                                        
                                                                    </div>
                                            <div class="product-details-bottom">
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
                                               <!--needs to pull data from current bitcoin price--> 0.00010301 BTC<br>0.01870622 XMR<br>                                            </span></div>
                                    </div>
                                </div>
                            </div>
</div>
</div>
</div>
   
<?php endwhile; ?>

<!-- Pagination -->
<ul class="pagination justify-content-end">
    <div style="margin-right: auto; padding: .5rem .75rem;">
        Page <?php echo $current_page; ?> of <?php echo $pages; ?> (<?php echo $nr_of_rows; ?> Total items)
    </div>
    <li class="page-item <?php echo ($current_page == 1) ? 'disabled' : ''; ?>">
        <a class="page-link" href="listings.php?page=<?php echo $current_page - 1; ?>" tabindex="-1" aria-disabled="true">Previous</a>
    </li>

    <?php for ($i = 1; $i <= $pages; $i++) : ?>
        <li class="page-item <?php echo ($i == $current_page) ? 'active' : ''; ?>">
            <a class="page-link" href="listings.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        </li>
    <?php endfor; ?>

    <li class="page-item <?php echo ($current_page == $pages) ? 'disabled' : ''; ?>">
        <a class="page-link" href="listings.php?page=<?php echo $current_page + 1; ?>">Next</a>
    </li>
</ul>
<ul class="pagination justify-content-end"><div style="margin-right: auto; padding: .5rem .75rem;">Page (Num of current page) of (Total Num Of Pages) (52429 Total items)</div><li class="page-item active first-child"><a class="page-link" href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/listings.php?page=1&amp;type=all">1</a></li><li><a class="page-link" href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/listings.php?page=2&amp;type=all">2</a></li><li><a class="page-link" href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/listings.php?page=3&amp;type=all">3</a></li><li><a class="page-link" href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/listings.php?page=4&amp;type=all">4</a></li><li><a class="page-link" href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/listings.php?page=5&amp;type=all">5</a></li><li><a class="page-link" href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/listings.php?page=6&amp;type=all">6</a></li><li><a class="page-link" href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/listings.php?page=7&amp;type=all">7</a></li><li><a class="page-link" href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/listings.php?page=8&amp;type=all">8</a></li><li><a class="page-link" href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/listings.php?page=9&amp;type=all">9</a></li><li class="page-item disabled"><a class="page-link" href="#">...</a></li><li><a class="page-link" href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/listings.php?page=2622&amp;type=all">2622</a></li><li class="page-item"><a class="page-link" href="http://phfbc3whrbtij36skevox76eqckcwrpyzvegbtpx3afmhdrsrrzjj6id.onion/listings.php?page=2&amp;type=all">Next 
                    »</a></li></ul></div>

        </div>
    </div>



</body></html>