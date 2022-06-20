<!DOCTYPE html>
<html>
<head>
        <meta charset = utf-8>
        <title>Assignment_part2</title>
        <script type="text/javascript" src="pricecal.js" ></script>
        <link rel="stylesheet"
            type="text/css" href="css/home.css"/> <!-- stylesheet page link -->
        
    </head>
        <body>
            <nav>
                <ul id="mainnav">
                    <li>
                        <div id="logo"> <!-- brand logo -->
                            <img src="img/826954.png" alt="logo" width="65" height="65">
                        </div>
                    </li>
                    <li>
                        
                        <div class="dropdown"> <!-- dropdown list -->
                            <button class="dropbtn">MEN<i class="fa fa-caret-down"></i></button>
                            <div class="dropdown-content">
                                <a href="product.html">Top Wear</a>
                                <a href="product.html">Bottom Wear</a>
                                <a href="product.html">Accessories</a>
                              </div>
                        </div>

                    </li>
                    <li>

                        <div class="dropdown"> <!-- dropdown list -->
                            <button class="dropbtn">WOMEN</i><i class="fa fa-caret-down"></i></button>
                            <div class="dropdown-content">
                                <a href="product.html">Top Wear</a>
                                <a href="product.html">Bottom Wear</a>
                                <a href="product.html">Accessories</a>
                              </div>
                        </div>
                    </li>
                    <li>

                        <div class="dropdown"> <!-- dropdown list -->
                            <button class="dropbtn">KIDS</i><i class="fa fa-caret-down"></i></button>
                            <div class="dropdown-content">
                                <a href="product.html">Top Wear</a>
                                <a href="product.html">Bottom Wear</a>
                                <a href="product.html">Accessories</a>
                              </div>
                        </div>
                    </li>
                    <li>

                        <div class="dropdown"> <!-- dropdown list -->
                            <button class="dropbtn">BEAUTY</i><i class="fa fa-caret-down"></i></button>
                            <div class="dropdown-content">
                                <a href="product.html">Men</a>
                                <a href="product.html">Women</a>
                              </div>
                        </div>
                    </li>

                    <li>
                        <div >
                        <form class="searchbar" action="home.php" method ="get"> <!-- searchbar -->
                            <input type="text" id ="productSearch" name="productSearch" placeholder="Search..">
                        </form>
                        </div>
                    </li>
                    <li>
                        <div class = "rightalign"> <!-- order page link -->
                            <button><a href="order.html">Order</a></button>
                        </div>
                    </li>
                    <li>
                        <div class = "rightalign"> <!-- cart page link -->
                            <button><a href="cart.html">Cart</a></button>
                        </div>
                    </li>
                    <li>
                        <div class = "rightalign"><!-- profile page link -->
                            <button><a href="profile.php">Profile</a></button>
                        </div>
                    </li>
                    
                </ul>
            </nav>
            <h3>User Details</h3>
            <!-- form to take user data with different attributes and input types -->
            <form id="userform" action=profile.php  method= "post" method="get">
                <div class="container">
                <label for="fname">First Name:</label> <!-- first name -->
                <input type="text" id="fname" name="fname"><br>
                <br><br>

                <label for="lname">Last Name:</label> <!-- last name -->
                <input type="text" id="lname" name="lname"><br>
                <br><br>

                <label for="uname">Username:</label> <!-- username -->
                <input type="text" id="uname" name="uname"><br>
                <br><br>
                
                <label for="pass">Password:</label> <!-- password -->
                <input type="password" id="pass" name="pass"><br>
                <br><br>

                <label for="mail">Email:</label> <!-- email id -->
                <input type="email" id="mail" name="mail"><br>
                <br><br>

                <label for="phone">Phone:</label> <!-- phone number -->
                <input type="tel" id="phone" name="phone"><br>
                <br><br>

                <label for="dob">Date of Birth:</label> <!-- date of birth -->
                <input type="date" id="dob" name="dob"><br>
                <br><br>
            </div>
                <!-- dummy term and conditions -->
                <label for="tandc">Terms and Conditions:</label><br>
                
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pharetra vestibulum est vitae euismod. Nullam at pharetra quam, ut consectetur erat. In eleifend eros blandit, consequat diam vel, malesuada odio. Pellentesque dolor velit, volutpat ac dignissim ac, suscipit in ante. Praesent quis tortor est. Etiam lectus ipsum, sagittis vitae imperdiet non, viverra non lacus. Integer aliquet libero eu feugiat tempor. Aliquam consequat finibus metus. Quisque volutpat porttitor massa nec accumsan. Curabitur et vehicula tortor. Nam tortor purus, rutrum lacinia ipsum a, volutpat fermentum neque.</p>
                
                <input type="checkbox" id="checkbox" name="checkbox">
                <label for="checkbox">Agree</label><br> <!-- check box -->
                <br><br>

               <!-- buttons -->
               <input type="submit" onClick="validateForm(event)"  value="Submit">    
                
                <input type="reset" id="reset" value="Reset">
                
                <input type="button" id="exit" value="Exit" onclick="history.back()"> 
            </form>

            <?php // saving data from form to the database
require_once "queryDb.php";
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];
    $mail = $_POST["mail"];
    $phone = $_POST["phone"];
    $dob = $_POST["dob"];
    if(isset($_POST["fname"]) and isset($_POST["lname"]) and isset($_POST["uname"]) and isset($_POST["pass"]) and isset($_POST["mail"]) and isset($_POST["phone"]) and isset($_POST["dob"]))
    {
        $customers = addCustomer($_POST["fname"],$_POST["lname"],$_POST["uname"],$_POST["pass"],$_POST["mail"],$_POST["phone"],$_POST["dob"]);
    }
    else
    {
        echo "";
    }
?>  
<footer class="foot"> <!-- footer with page links -->
                <a href="aboutUs.html">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="contactUs.html">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="feedback.html">Feedback</a>
            </footer>
        </body>
    </html>