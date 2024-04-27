<?php
    include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The New Wave</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
</head>
<body>
    
     
   <section id ="search-container"> 
       
        <div class="category-list">
            <form method="POST" action="Category.php">
            <select id="category-select" name="description ">
              <option value="category1">Electronic Devices</option>
              <option value="category2">Electronic Accessories</option>
              <option value="category3">TV & Home Appliances</option>
              <option value="category4">Fashion & Beauty</option>
            </select>
            
          </div>
          
    </div>
  </section>
    

<div class="category-list2">
    <input type="text" class="textBox" placeholder="Categories " readonly>
    <div class="option">
        
        <li>Electronic Devices</li>
        <li>Electronic Accessories</li>
        <li>TV & Home Appliances</li>
        <li>Fashion & Beauty</li>
    
    </div>
    </div>
    <div class="brand-list2">
        <input type="text" class="textBox" placeholder="Brands " readonly>
        <div class="option">
            
            <li>Adidas</li>
            <li>Nike</li>
            <li>Apple</li>
            <li>Samsung</li>
            <li>Huawai</li>
            <li>Dior</li>
            <li>Chanel</li>
            <li>Sunsilk</li>
            <li>Dove</li>
            
        
        </div>
    
  </div>

  <button class="back-button" onclick="goBack()" style="display:none;">Back</button>
<section id="category1" class="section-p1">
    <h3>Electronic Devices</h3>
    <div class="pro-container">
         
        <div class="pro">
            <img src="img/c1p2.png" alt="">
            <div class="des">
                <h5>Apple iphone 6</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>$50</h4>
            </div>
            <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        <div class="pro">
            <img src="img/product h2.jpg" alt="">
            <div class="des">
                <h5>Camera</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$10</h4>
            </div>
            <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        <div class="pro">
            <img src="img/product h3.jpg" alt="">
            <div class="des">
                <h5>Airpods</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>$20</h4>
            </div>
            <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        <div class="pro">
            <img src="img/c1p4.png" alt="">
            <div class="des">
                <h5>Printer</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>$50</h4>
            </div>
            <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        <div class="pro">
            <img src="img/c1p5.png" alt="">
            <div class="des">
                <h5>Apple iphone 13</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$1000</h4>
            </div>
            <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        <div class="pro">
            <img src="img/c1p6.png" alt="">
            <div class="des">
                <h5>Samsung Tab</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>$20</h4>
            </div>
            <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        <div class="pro">
            <img src="img/c1p7.png" alt="">
            <div class="des">
                <h5>Speaker</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>$50</h4>
            </div>
            <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        <div class="pro">
            <img src="img/c1p8.png" alt="">
            <div class="des">
                <h5>Iron</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$10</h4>
            </div>
            <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        <div class="pro">
            <img src="img/c1p3.png" alt="">
            <div class="des">
                <h5>Bluetooth Speaker</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>$20</h4>
            </div>
            <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        
    </section>
        <section id="category2" class="section-p2">
            <h3>Electronic Accessories</h3>

            <div class="pro-container">
                
        <div class="pro">
            <img src="img/c2p1.png" alt="">
            <div class="des">
                <h5>USB cable C-Type</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>$5</h4>
            </div>
            <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        <div class="pro">
            <img src="img/c2p2.png" alt="">
            <div class="des">
                <h5>Phone Charger</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>$5</h4>
            </div>
            <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        <div class="pro">
            <img src="img/c2p3.png" alt="">
            <div class="des">
                <h5>Power Bank</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                   
                </div>
                <h4>$20</h4>
            </div>
            <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        <div class="pro">
            <img src="img/c2p4.png" alt="">
            <div class="des">
                <h5>ABC Earphone</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>$5</h4>
            </div>
            <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        <div class="pro">
            <img src="img/c2p5.png" alt="">
            <div class="des">
                <h5>Mouse</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>$5</h4>
            </div>
            <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        <div class="pro">
            <img src="img/c2p6.png" alt="">
            <div class="des">
                <h5>Apple USB Cable</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                   
                </div>
                <h4>$5</h4>
            </div>
            <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        <div class="pro">
            <img src="img/c2p7.png" alt="">
            <div class="des">
                <h5>SONY Earphone</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>$5</h4>
            </div>
            <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        <div class="pro">
            <img src="img/c2p8.png" alt="">
            <div class="des">
                <h5>USB Drive</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>$5</h4>
            </div>
            <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        <div class="pro">
            <img src="img/c2p9.png" alt="">
            <div class="des">
                <h5>Wireless Charger</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                   
                </div>
                <h4>$20</h4>
            </div>
            <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
        </div>
        
        
    </section>
        <section id="category3" class="section-p3"> 
        
        <h3>TV & Home Appliances</h3>

        <div class="pro-container">
            
    <div class="pro">
        <img src="img/c3p1.png" alt="">
        <div class="des">
            <h5>Samsung TV 32 inch</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
            </div>
            <h4>$75</h4>
        </div>
        <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
    </div>
    <div class="pro">
        <img src="img/c3p2.png" alt="">
        <div class="des">
            <h5>Samsung TV 55 inch</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
            </div>
            <h4>$90</h4>
        </div>
        <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
    </div>
    <div class="pro">
        <img src="img/c3p3.png" alt="">
        <div class="des">
            <h5>Samsung Fridge</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
               
            </div>
            <h4>$100</h4>
        </div>
        <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
    </div>
    <div class="pro">
        <img src="img/c3p4.png" alt="">
        <div class="des">
            <h5>Fan</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
            </div>
            <h4>$15</h4>
        </div>
        <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
    </div>
    <div class="pro">
        <img src="img/c3p5.png" alt="">
        <div class="des">
            <h5>Sofa</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
            </div>
            <h4>$90</h4>
        </div>
        <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
    </div>
    <div class="pro">
        <img src="img/product h1.png" alt="">
        <div class="des">
            <h5>Office Chair</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
               
            </div>
            <h4>$15</h4>
        </div>
        <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
    </div>
    <div class="pro">
        <img src="img/c3p7.png" alt="">
        <div class="des">
            <h5>Plastic Drawers</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
            </div>
            <h4>$15</h4>
        </div>
        <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
    </div>
    <div class="pro">
        <img src="img/product h4.jpg" alt="">
        <div class="des">
            <h5>phone Back Cover</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
            </div>
            <h4>$5</h4>
        </div>
        <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
    </div>
    <div class="pro">
        <img src="img/c3p9.png" alt="">
        <div class="des">
            <h5>Oven</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
               
            </div>
            <h4>$100</h4>
        </div>
        <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
    </div>
    
    
</section>         
<section id="category4" class="section-p4">
        <h3>Fashion & Beauty</h3>

        <div class="pro-container">
            
    <div class="pro" >
        <img src="img/c4p1.png" alt="">
        <div class="des">
            <h5>Sunsilk Shampoo</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                
            </div>
            <h4>$7</h4>
        </div>
        <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
    </div>
<div class="pro">
    <img src="img/c4p2.png" alt="">
    <div class="des">
        <h5>Dove Body Wash</h5>
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            
        </div>
        <h4>$5</h4>
    </div>
    <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
</div>
<div class="pro">
    <img src="img/c4p3.png" alt="">
    <div class="des">
        <h5>Adidas Shoe</h5>
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
           
        </div>
        <h4>$10</h4>
    </div>
    <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
</div>
<div class="pro">
    <img src="img/c4p4.png" alt="">
    <div class="des">
        <h5>NIKE Shoe</h5>
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            
        </div>
        <h4>$10</h4>
    </div>
    <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
</div>
<div class="pro">
    <img src="img/product h5.jpg" alt="">
    <div class="des">
        <h5>Sunglass</h5>
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
           
        </div>
        <h4>$25</h4>
    </div>
    <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
</div>
<div class="pro">
    <img src="img/product h6.jpg" alt="">
    <div class="des">
        <h5>Cap</h5>
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            
        </div>
        <h4>$5</h4>
    </div>
    <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
</div>
<div class="pro">
    <img src="img/product h7.jpg" alt="">
    <div class="des">
        <h5>School Bag</h5>
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
           
        </div>
        <h4>$30</h4>
    </div>
    <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
</div>
<div class="pro">
    <img src="img/product h8.jpg" alt="">
    <div class="des">
        <h5>Hand Bag</h5>
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
           
        </div>
        <h4>$150</h4>
    </div>
    <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
</div>
<div class="pro">
    <img src="img/c4p5.png" alt="">
    <div class="des">
        <h5>ROLEX Watch</h5>
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            
        </div>
        <h4>$50</h4>
    </div>
    <a href="cart.html"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
</div>


</section>



<script src="script.js"></script>


    

</body>

</html>

<?php
    include_once 'footer.php';
?>