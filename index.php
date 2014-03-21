<?php 
session_start();
session_destroy();
?>

<!DOCTYPE HTML>
<head>
  <title>Dowling Social Network </title>
  <meta name="description" content="Dowling's Social Network">
  <meta name="keywords" content="Connecting, College, Students, Profile">
  <meta name="author" content="Tyler Treadwell">
  <meta charset="UTF-8">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width = device-width, initial-scale = 1, user-scalable = no">
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="stylesheet" href="css/style.css">
  <style>
  html{background: url("img/hero.jpg")no-repeat center;
background-size: cover;}
  #feedback{font-size: 27px; width: 900px; margin: auto; text-align: center; margin-top: 22px; color:#6B6B6B;}
  header{background:white;border:solid 1px rgba(0,0,0,0.06)}
  ol{float:right;margin-right:2px;margin-top:0px}
  li img{width:31px;margin-top:-3px;padding-right:13px}
  h5{font-size:15px;font-weight:100;}
  footer,p{margin-left:5px;margin-top: 163px;}
  button{margin-right:-150px;border:1px solid #2c3e50;border-bottom:none;border-radius:3px;background:#2c3e50 url(img/button_overlay.png) repeat-x 0 50%;margin-top:10px;width:209px;font-weight:700}
  h2{margin-left:10px}
  form{font-size: 27px;
width: 300px;
text-align: center;
margin: auto;
margin-right: 21px;}
  #profile-template{height: 325px;
padding: 20px 25px 30px;
width: 304px;
border-radius: 2px;
margin: auto;
margin-top: 3%;}
  #profile-pic{width:150px;height:150px}
  #profile-pic img{margin-top:21px;width:205px;margin-left:23px;background:#2ecc71;border-bottom:solid rgba(85,231,114,0.4)}
  #user-tools{background:rgba(85,231,114,0.4);width:685px;margin-right:20px;float:right;margin-top:-131px;height:49px;border-radius:10px 10px 10px 10px;border-bottom:solid 2px rgba(0,0,0,0.06)}
  #Username{border:1px solid #2be573;margin-top:50px;margin-left:23px;width:203px;height:57px;background:#3dd570}
  #Username p{font-size:20px;margin-top:30px;text-align:center;width:90%}
  #profile-menu a{color:#333}
  #profile-menu{background:transparent;width:205px;height:300px;margin-left:23px;margin-top:48px}
  #display-name{font-size:20px;width:100px;height:20px;margin-left:26px;margin-top:7px}
  #display-name input[type=text]{background:transparent;border:none}
  #user-tools li{display:inline;padding-right:36px;padding-top:17px;padding-bottom:11px;font-size:17px;margin-left:32px;font-weight:700}
  #user-tools ul{margin:-3px auto auto}
  #user-tools a:hover{font-weight:700}
  #profile-Activity{background:#FFF;color:#bbb;width:683px;margin-right:20px;margin-top:-585px;min-height:200px;height:auto;float:right;border-radius:10px;border-bottom:solid 4px rgba(0,0,0,0.06)}
  #profile-Activity p{margin-top:90px;margin-right:auto;margin-left:200px;text-align:center}
  #profile-menu ol{text-align:left;float:none;margin:auto}
  #profile-menu hr{margin-top:12px;border:1px solid rgba(0,0,0,0.06)}
  #editprofile{float:left;margin:auto auto auto 20px}
  form input[type=text],form input[type=password]{height:21px;background:transparent;color:#FFF;border:solid 1px #FFF}
  #Searchbox{width:500px;height:40px;margin-left:200px}

   form input[type="text"]{ height: 49px;
text-align: left;
background: rgba(255, 255, 255, 1);
color: #938F8F;
font-size: 22px;
width: 314px;
border: none;
padding-left: 5px;
border: 1px solid rgba(255, 255, 255, 1);
border-bottom: 2px solid #eee;
}
    form input[type="password"]{height: 49px;
text-align: left;
background: rgba(255, 255, 255, 1);
color: #938F8F;
font-size: 22px;
width: 314px;
border: none;
border: 1px solid rgba(255, 255, 255, 1);
padding-left: 5px;}
    form input[type="submit"]{ padding: 1em;
color: white;
margin-top: 17px;
width: 320px;
font-size: 17px;
margin-right: 0px;
border-radius: 4px;
float: none;
text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
background-color: #2c3e50;
background-image: -moz-linear-gradient(top, #2c3e50 #2c3e50);
background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#2c3e50), to(#2c3e50));
background-image: -webkit-linear-gradient(top, #2c3e50, #2c3e50);
background-image: -o-linear-gradient(top, ##2c3e50, #2c3e50);
background-image: linear-gradient(to bottom, #2c3e50, #2c3e50);
background-repeat: repeat-x;
border-color: #2c3e50#2c3e50#2c3e50;
border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);}
    form{font-size: 27px;
width: 200px;
margin: auto;
margin-left: 0px;}
 
  
  nav,#nav{margin-top:-59px;}
  ::-webkit-input-placeholder,:-moz-placeholder,::-moz-placeholder,:-ms-input-placeholder{color:#bbb;font-weight:100}

::-webkit-input-placeholder {
   color: #938F8F;
}

:-moz-placeholder { /* Firefox 18- */
   color: #938F8F;  
}

::-moz-placeholder {  /* Firefox 19+ */
   color: #938F8F;  
}

:-ms-input-placeholder {  
   color: #938F8F;  
}

p{float: right;
margin-top: 13px;
color: #fff;}


  </style>
<script>
      function save_data() 
      {var g = document.getElementById("dsajerwklje");
      localStorage.setItem("dsajerwklje", g.value);
      var storedValue = localStorage.getItem("dsajerwklje");}
    </script>
</head>
<header>
<a href="http://dc.remmly.com/"><img src="img/logo.png" alt="logo" ></a>
<div id="nav">
<ol>
<li>
</li>
<li><?php 
session_start();
if(isset($_SESSION['myusername'])){
    echo "<a href='login'>logout</a>";
}else
 {
  echo "<a href='register'>signup</a>";
}?></li>

</ol>
</div>
</header>
<body>
<?php include_once("analyticstracking.php") ?>
<div id="profile-template">
<form method="post" action="checklogin.php">
<table>
    <tr><td><input type="text" name="myusername" id="myusername" placeholder=" Email or Username" padding-left="2px" /></tr></td> <br />
    <tr><td><input type="password" name="mypassword" id="mypassword" placeholder=" Password" padding-left="2px"/></tr></td><br />
    <tr><td><input type="submit" name="submit" value="Login" /><tr></td>
    <tr><td><a href="forgotpass.php"><p>Forgot your password?</p></a><tr></td>
    <br /><br />
</form>
</table>
</div>

</div>
</div>
</body>
<footer>&copy; 2014 Tyler Treadwell and Dowling College</footer>
