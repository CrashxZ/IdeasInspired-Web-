<!DOCTYPE HTML>
<html>

<head>
  <title>2017 Team Merlyn</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <script src="js/script.js" type="text/javascript"></script>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- color change-->
          <h1><a href="Home.php">ideas<span class="logo_colour">Inspired</span></a></h1>
          <h2>Sharing ideas, made simple</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- Page select -->
          <li class="selected"><a href="Sign_Up.php">Sign Up</a></li>
          <li><a href="Home.php">Home</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- Slididebar -->
        <h3>Technology Direct</h3>
        <h4>AMD Realeases new efficient mobile GPUs.</h4>
        <h5>March 18th, 2017</h5>
        <p> AMD released the embedded Radeon E9550 on September 27. That card packs 2304 SPs with a base clock of 1.12GHz and a boost clock of up to 1.26 Hz, along with 8GB of GDDR5 at 7 GT/s on a 256-bit bus.<br /><a href="http://techreport.com/news/30806/rumor-polaris-refresh-incoming-for-rx-465-475-and-485">Read more</a></p>
        <p></p>
        <h4>Mainak reaches to class in time.</h4>
        <h5>february 24th, 2017</h5>
        <p>A special thanks to everyone for reading this.!<br /><a href="#">Read more</a></p>
        <h3>Useful Links</h3>
        <ul>
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li><a href="#">link 3</a></li>
          <li><a href="#">link 4</a></li>
        </ul>
        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
		</div>
      <div id="content">
        <!-- Content -->
		<div style="border:2px solid green">
        <h1 style="padding:15px">Sign Up:</h1>
        <form style="padding:15px" name="login" method="post" class="form_settings" action="Sign_Up_Php.php">
		<h4 style="padding:15px"><span>First Name :</span> <input type="text" name="fi_name"></h4>
		<h4 style="padding:15px"><span>Last Name :</span> <input type="text" name="la_name"></h4>
		<h4 style="padding:15px"><span>Username :</span> <input type="text" name="username"></h4>
		<h4 style="padding:15px"><span>Email :</span><input type="text" name="email"/></h4>
		<h4 style="padding:15px"><span>Password :</span> <input type="password" name="pass"></h4>
		<h4 style="padding:15px"><span>Confirm Password :</span> <input type="password" name="cpass"></h4>
		<h4 style="padding:15px" class="center"><input type="submit" class="button" value="Submit"></h4></form>
		</div>
      </div>
    </div>
    <div id="footer">
      Copyright &copy; Web Development | <a href="mailto:mainakme2140@gmail.com">Email</a> | <a href="#"  onclick="popup()">Information</a> |<a href="#" onclick="popup2()">ITA1007</a>
    </div>
  </div>
    <?php
        echo "Hello";
    ?>
</body>
</html>
