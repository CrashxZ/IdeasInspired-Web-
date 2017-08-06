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
          <!-- Page Select-->
          <li class="selected"><a href="Home.php">Home</a></li>
          <li><a href="Idea.php">Ideas</a></li>
          <li><a href="Book.php">Book Reviews</a></li>
          <li><a href="Movie.php">Movie Reviews</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- Slidebar -->
        <h3>Technology Direct</h3>
        <h4>AMD Realeases new efficient mobile GPUs.</h4>
        <h5>March 18th, 2017</h5>
        <p> AMD released the embedded Radeon E9550 on September 27. That card packs 2304 SPs with a base clock of 1.12GHz and a boost clock of up to 1.26 Hz, along with 8GB of GDDR5 at 7 GT/s on a 256-bit bus.<br /><a href="http://techreport.com/news/30806/rumor-polaris-refresh-incoming-for-rx-465-475-and-485">Read more</a></p>
        <p></p>
        <h4>Mainak reaches to class in time.</h4>
        <h5>February 24th, 2017</h5>
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
		<a href="login.html"><input class="button" type="button" value="Submit Your Entry" /></a>
      </div>
      <div id="content">
        <!-- Content -->
        <h1>Share your dreams with others.</h1>
        <p>Welcome to everone out there. This is a website targetted to a abstract concept where everyone can heiglight their work and share it with others for educational purposes. Your ideas can make this world a better place, share your ideas, projects and all sorts of stuff you can imagine.</p>
        <p>Any registered user can show off their resumes and blogs by creating a personalised, preformatted template and mailing it to <a href="mailto:mainakme2140@gmail.com">me</a>.</p>
        <p>Welcome !</p>
        <p>I will also be attaching a resume to the showcases page and let this be the refrence to the future endevours I encounter.</p>
        <h2></h2>
        <p>Shout outs to the most frequent submitors</p>
        <ul>
            <?php
                $db=  mysqli_connect("localhost", "crashxz", "", "project_wd")
                        or('Error Connectind Database');
                $query="SELECT * FROM entry ORDER BY ID DESC LIMIT 5";
                $result=  mysqli_query($db, $query);
                if($result)
                {
                    for($i=0;$i<5;$i++)
                    {
                        $row=  mysqli_fetch_assoc($result);
                        echo "<li>".$row["Byline"]."--".$row["Category"]."</li>";
                    }
                }
                else 
                {
                    echo mysqli_error($db);
                }
            ?>
        </ul>
       <a href='affili.html' ><p>Generate Flipkart/Amazon Affiliate Links</p></a> 
      </div>
    </div>
    <div id="footer">
      Copyright &copy; Web Development | <a href="mailto:mainakme2140@gmail.com">Email</a> | <a href="#"  onclick="popup()">Information</a> |<a href="#" onclick="popup2()">ITA1007</a>
    </div>
  </div>
</body>
</html>
