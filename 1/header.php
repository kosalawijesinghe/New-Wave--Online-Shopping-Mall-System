<!DOCTYPE html>
<html>
<head>
  <title>New Wave Shopping Mall</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

#header {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
  border: 2px solid #000;
}

#header h1 {
  margin: 0;
}

#menu-bar-container {
  background-color: #f1f1f1;
  text-align: center;
  padding: 10px;
  border: 2px solid #000;
}

#menu-bar {
  display: inline-block;
}

#menu-bar ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: inline-block;
}

#menu-bar li {
  display: inline-block;
  margin-right: 10px;
}

#menu-bar li a {
  display: block;
  color: #333;
  text-align: center;
  padding: 8px 16px;
  text-decoration: none;
  border: 2px solid #000;
}

#menu-bar li a:hover {
  background-color: cyan;
}

#logo {
  display: inline-block;
  width: 80px;
  height: 80px;
  background-color: #ddd;
  margin-right: 10px;
  border: 2px solid #000;
}

#main-content {
  padding: 20px;
}

#right-corner {
  text-align: right;
  border: 2px solid #000;
  padding: 10px;
}

#right-corner input[type="text"],
#right-corner input[type="password"] {
  padding: 5px;
  margin: 5px;
  width: 150px;
  border: 2px solid #000;
}

#right-corner input[type="submit"] {
  padding: 5px 10px;
  margin: 5px;
  border: 2px solid #000;
}

.product {
  display: inline-block;
  width: 200px;
  margin: 10px;
  border: 1px solid #ddd;
  padding: 10px;
  border: 2px solid #000;
}

.product img {
  max-width: 100%;
  height: auto;
}

.product h3 {
  margin: 0;
  font-size: 16px;
  font-weight: bold;
}

.product p {
  margin: 5px 0;
}

  </style>
</head>
<body>
	
<!--Header start-->
<div id="header">
    <h1>New Wave Shopping Mall</h1>
  </div>
  
  <div id="menu-bar-container">
    <label for="logo"></label>
    <img src="image\3.png" alt="logo" width="100px" height="100px" border="1px">
    
    <nav id="menu-bar">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Category</a></li>
        <li><a href="#">Seller Account</a></li>
        <li><a href="#">Customer Account</a></li>
        <li><a href="#">Order History</a></li>
        <li>
          <form>
            <input type="text" name="search" placeholder="Browse Items">
            <input type="submit" value="Search">
          </form>
        </li>
      </ul>
    </nav>
  </div>
   <!--Header end-->