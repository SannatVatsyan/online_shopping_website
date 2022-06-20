<!DOCTYPE html>
<html>
    <head>
        <meta charset = utf-8>
        <title>Assignment_part2</title>
        <link rel="stylesheet"
            type="text/css" href="css/home.css"/> <!-- style sheet link -->
        
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
                        
                        <div class="dropdown"> <!-- dropdown menu -->
                            <button class="dropbtn">MEN<i class="fa fa-caret-down"></i></button>
                            <div class="dropdown-content">
                                <a href="product.html">Top Wear</a>
                                <a href="product.html">Bottom Wear</a>
                                <a href="product.html">Accessories</a>
                              </div>
                        </div>

                    </li>
                    <li>

                        <div class="dropdown"> <!-- dropdown menu -->
                            <button class="dropbtn">WOMEN</i><i class="fa fa-caret-down"></i></button>
                            <div class="dropdown-content">
                                <a href="product.html">Top Wear</a>
                                <a href="product.html">Bottom Wear</a>
                                <a href="product.html">Accessories</a>
                              </div>
                        </div>
                    </li>
                    <li>

                        <div class="dropdown"> <!-- dropdown menu -->
                            <button class="dropbtn">KIDS</i><i class="fa fa-caret-down"></i></button>
                            <div class="dropdown-content">
                                <a href="product.html">Top Wear</a>
                                <a href="product.html">Bottom Wear</a>
                                <a href="product.html">Accessories</a>
                              </div>
                        </div>
                    </li>
                    <li>

                        <div class="dropdown"> <!-- dropdown menu -->
                            <button class="dropbtn">BEAUTY</i><i class="fa fa-caret-down"></i></button>
                            <div class="dropdown-content">
                                <a href="product.html">Men</a>
                                <a href="product.html">Women</a>
                              </div>
                        </div>
                    </li>

                    <li>
                        <div >
                        <form class="searchbar" action="home.php" method ="get"> <!-- search bar -->
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
                        <div class = "rightalign"><!-- cart page link -->
                            <button><a href="cart.html">Cart</a></button>
                        </div>
                    </li>
                    <li>
                        <div class = "rightalign"> <!-- profile page link -->
                            <button><a href="profile.php">Profile</a></button>
                        </div>
                    </li>
                    
                </ul>
            </nav>

            <div>
                <img class = "poster" src ="https://assets.myntassets.com/w_980,c_limit,fl_progressive,dpr_2.0/assets/images/2022/5/16/5dbfe05b-cf14-4bae-b6af-1ce144bfa18c1652718466927-Bestselling-Styles_Desk.jpg">
            </div>

            <div>
            <?php // php query to get the value user entered in search bar
                require_once "queryDb.php";
                $search = $_GET["productSearch"];
                if(isset($_GET["productSearch"]))
                {
                    $products = getProducts($_GET["productSearch"]);
                }
                else
                {
                    $products = getProducts();
                }
            ?>
            <table>
        <!-- creating table after retriving data from database -->
        <thread>
                    <tr>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Manufacturer</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
        </thread>
        <tbody>
            <?php 
                foreach($products as $products)
                {
            ?>
                    <!-- getting data from database -->
                    <tr>
                    <td><?=$products["productID"]?></td>
                    <td><?=$products["productName"]?></td>
                    <td><?=$products["manufacturer"]?></td>
                    <td><?=$products["description"]?></td>
                    <td><?=$products["price"]?></td>
                    </tr>
            <?php }
            ?>
        
        </tbody>
        </table>
            <div>
                    <!-- products to display -->
                <h2 class="heading">Koala Exclusive Products</h2><br>

            </div>
            <div class ="content">
            <ul>
                <li class="productList">
                    <div class="box">
                        <img src="https://t4.ftcdn.net/jpg/04/39/59/19/240_F_439591914_jZyp0drOWKphjmIrmJsjVrXdmIo58sSh.jpg" width= "300px",
                        height= "200px"/>
                        <br>
                        <h4>Exclusive #1</h4> <!-- product 1 -->
                    </div>
                </li>

                <li class="productList">
                    <div class="box">
                        <img src="https://t3.ftcdn.net/jpg/04/14/40/48/240_F_414404870_ITUoUcTPQKp4Ds1AxmFm1Eeq5JYrPoKY.jpg" width= "300px",
                        height= "200px"/>
                        <br>
                        <h4>Exclusive #2</h4> <!-- product 2 -->
                    </div>
                </li>

                <li class="productList">
                    <div class="box">
                        <img src="https://as2.ftcdn.net/v2/jpg/00/49/23/91/1000_F_49239188_ywSfMeY43USpLnDBI2lCRduYRWfgTumI.jpg" width= "300px",
                        height= "200px"/>
                        <br>
                        <h4>Exclusive #3</h4> <!-- product 3 -->
                    </div>
                </li>

            </ul>
                </div>
            <div>
                <h2 class="heading">Latest Trending</h2><br> <!-- different category -->
            </div>
            <div class ="content">
            <ul>
                <li class="productList">
                    <div class="box">
                        <img src="https://t4.ftcdn.net/jpg/03/33/80/89/240_F_333808972_qFA3Rjgk56Xo4N80kI1IvaeSCtdLeQcK.jpg" width= "300px",
                        height= "200px"/>
                        <br>
                        <h4>Exclusive #1</h4> <!-- product 1 -->
                    </div>
                </li>

                <li class="productList">
                    <div class="box">
                        <img src="https://t3.ftcdn.net/jpg/03/20/33/16/240_F_320331611_mIPqVnUmSaeL1OEWQRBNpF0FM7eaYmPB.jpg" width= "300px",
                        height= "200px"/>
                        <br>
                        <h4>Exclusive #2</h4> <!-- product 2 -->
                    </div>
                </li>

                <li class="productList">
                    <div class="box">
                        <img src="https://t3.ftcdn.net/jpg/04/73/67/56/240_F_473675693_lGt5Cv4tVQTjJ7xMgUUBJRKFuZWU6LBe.jpg" width= "300px",
                        height= "200px"/>
                        <br>
                        <h4>Exclusive #3</h4> <!-- product 3 -->
                    </div>
                </li>

            </ul>
                </div>
            <div>
                <h2 class="heading">Seasonal Wear</h2><br> <!--different category  -->
            </div>
            <div class ="content">
            <ul>
                <li class="productList">
                    <div class="box">
                        <img src="https://t3.ftcdn.net/jpg/02/94/21/76/240_F_294217699_CpCsEz43ZmeZy4TIqLkGZ1jJZN2Fnruq.jpg" width= "300px",
                        height= "200px"/>
                        <br>
                        <h4>Exclusive #1</h4> <!-- product 1 -->
                    </div>
                </li>

                <li class="productList">
                    <div class="box">
                        <img src="https://t3.ftcdn.net/jpg/03/91/99/78/240_F_391997883_gibpZ73zqyo51PVj3i6rI4YRwawubrk7.jpg" width= "300px",
                        height= "200px"/>
                        <br>
                        <h4>Exclusive #2</h4> <!-- product 2 -->
                    </div>
                </li>

                <li class="productList">
                    <div class="box">
                        <img src="https://t3.ftcdn.net/jpg/02/93/21/28/240_F_293212816_HYUTC9ZIkDTNzONEyAUMDzOtuBxPjOHq.jpg" width= "300px",
                        height= "200px"/>
                        <br>
                        <h4>Exclusive #3</h4> <!-- product 3 -->
                    </div>
                </li>

            </ul>
                </div>
            <footer class="foot"> <!-- page links in footer -->
                <a href="aboutUs.html">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="contactUs.html">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="feedback.html">Feedback</a>
            </footer>

    </body>
</html>