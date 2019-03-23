<!DOCTYPE html>
<html>
<head>
	<title>ABOUT</title>
</head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
<style type="text/css">
	
	nav{
  height: 70px;

}
nav ul{  
float: left; 
 width: auto;
  margin: 0;
   padding: 0; 
    line-height: 80px;
    text-align: center;
    list-style-type: none;
     
  }
nav ul li{
float: left;
 list-style-type: none;
position: relative; }
nav ul li a{
 padding: 22px 14px;
 display: block;
 color:#787878;
 text-decoration: none;
width: 212px; 
text-align: center;
font: bold 19px Arial;

}
nav ul li a:hover{
  text-decoration:none;
   color: #00009C;
    opacity: 0.5;
  font-size:20px;
   } 
  ul li.active a:hover{
  color: red;
  font: bold 19px Arial;

}
nav ul li ul{
 display: none;
 position: absolute;
 color:black;
  background-color:#00563F;
  padding:5px;
  border-radius: 5px 6px 10px 5px; 
}
nav ul li:hover ul{
 display: block;

}
nav ul li ul li{
  width:100%;
  border-radius:2px;   
}
nav ul li ul li a{
  padding: 22px 14px;
  } 
  nav ul li ul li a:hover{
  background-color:green; 
color: black;
  opacity: 0.5;
  font-size:19px;

}

</style>

<body>
<nav style="background-color:#00CC99;border-radius: width:auto; 12px;">
<ul>
<li  class="active"><a href="index.php"><img src="home.png"  width="20" height="17" border="0" margin-bottom="0"  />  Home</a></li>
<li><a href="index.php?link=view">ADMIN<img src="dropdown.png" width="10" height="14"></a>
  <ul><li><a href="login1.php">Login</a></li></ul>
</li>
<li><a href="#">TEACHERS<img src="dropdown.png"  width="10" height="14"/></a>
  <ul><li><a href="teacherslogin.php">Login</a></li></ul></li>
<li><a>PARENTS<img src="dropdown.png"  width="10" height="14"/></a>
<ul><li><a href="studentlogin.php">Login</a></li></ul>
</li>
</ul>
  
</nav>
</body>
</html>