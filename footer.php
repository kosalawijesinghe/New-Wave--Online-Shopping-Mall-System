</div>
<!DOCTYPE html>
<html> 
<head>
	<title>Footer Design</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
        *{
        margin:0;
        padding:0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }
    .container{
        max-width:1170px;
        margin:auto;
        display:bottom;
    }
    .row{
        display:flex;
        flex-wrap: wrap;
        margin:20px 0 0 0;
    }
    ul{
        list-style:none;
    }
    .footer{
        background-color: #24262b;
        padding:70px 0;
    }

    .footer-col{
        width:50%;
        padding:0 15px;
        
    }
    .footer-col h4{
        font-size:18px;
        font-family: Arial, Helvetica, sans-serif;
        color:#ffff;
        text-transform: capitalize;
        margin-bottom: 10px;
        font-weight:500;
        position: relative;
        margin: 0 0 20px 0;
        
    }
    .footer-col h4::before{
        content: '';
        position: absolute;
        left: 0;
        bottom: -5px;
        background-color: #eb9834;
        height: 2px;
        box-sizing: border-box;
        width: 50px;
    }

    .footer-col ul li:not(:last-child){
        margin-bottom: 10px;
    }
    .footer-col ul li a{
        font-size: 16px;
        text-transform: capitalize;
        color: #ffff;
        text-decoration: none;
        font-weight: 300;
        color:orange;
        display: block;
        transition: all 0.3s ease;
    }

    .footer-col ul li a:hover{
        color: #ffff;
        padding-left: 8px;
    }
    .footer-col .social-links a{
        display: inline-block;
        height: 40px;
        width: 40px;
        background-color:#f5dab5 ;
        margin: 0 10px 10px 0;
        text-align: center;
        line-height: 20px;
        border-radius: 50%;
        color: black;
        transition: all 0.5s ease;
        margin: 10px;
        padding: 10px;
        
    }
    .footer-col .social-links a:hover{
        color: black;
        background-color: orange;
    }
</style>
</head>
 <body>
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col">
				<h4>Customer care</h4>
					<ul>
						<li><a href="contactus.php">contact us</a></li>
						<li><a href="FAQ.php">FAQ</a></li>
						<li><a href="feedback.php">Feedback page</a></li>
					</ul>
				</div>
				<div class="footer-col">
				<h4>The New Wave</h4>
					<ul>
						<li><a href="payment.php">About us</a></li>
						<li><a href="privacy.php">Privacy policy</a></li>
						<li><a href="term.html">Terms & conditions</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="footer-col">
				<h4>Payment method</h4>
					<div>
						<img src="image\visa.png" height="50" width="50" >
						<img src="image\card.png" height="50" width="50"  >
						<img src="image\american-express.png" height="50" width="50"  >
						<img src="image\discover.png" height="50" width="50"  >
						
						
					</div>
				</div>
				<div class="footer-col">
				<h4>Follow us</h4>
					<div class="social-links">
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-google-plus"></i></a>
						
					
					</div>
				</div>
			</div>
		</div>
	</footer>
		
 
 </body>

</html>

</body>
</html>