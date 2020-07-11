<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" language="javascript" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/60ba3855ae.js" crossorigin="anonymous"></script>
    <script src="./js/portfolio.js"></script>
    <meta name="Author" content="Calvin Voss">
    <meta name="Description" content="This is the project information for Calvin Voss">
    <title><?php echo $_POST["projnameu"];?></title>
  </head>
  <body class=nothome>
    <div class="bodytest">
      <nav id="sidebar" class="navnav">
				<div class="navlist">
					<ul class="sidebarlist">
						<li><a href="../home.html" class="toplink">Home</a></li>
            <li><a href="../portfolio.html" class="toplink">Portfolio</a></li>
						<li><a href="../aboutme.html" class="toplink">About Me</a></li>
						<li><a href="../contactme.html" class="toplink">Contact Me</a></li>
					</ul>
				</div>
			</nav>
      <div class="row">
        <div class="col-md-12 prjname">
          <p><?php echo $_POST["projname"];?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 smalldesc">
          <p>Company: <?php echo $_POST["company"];?></p>
        </div>
        <div class="col-md-4 smalldesc">
          <p>My Role: <?php echo $_POST["myrole"];?></p>
        </div>
        <div class="col-md-4 smalldesc">
          <p>Sponsor: <?php echo $_POST["sponsor"];?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 projectdesc">
          <p><?php echo $_POST["projdesc"];?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 techtitle">
          <p>TECHNOLOGIES UTILIZED</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8 techcontainer">
          <?php
          $x=sizeof($_POST["techutil"]);
          $y = 12/$x;
          foreach( $_POST["techutil"] as $tech ) {
            echo "<div class='col-md-$y tech'><p>$tech</p></div>";
          }
          ?>
        </div>
        <div class="col-md-2">

        </div>
      </div>
    </div>
    <div class="footer">
			<nav class="footnav">
				<div class="pageslist">
					<ul class="footerlist">
						<li><a href="../home.html" class="botlink">Home</a></li>
						<li><a href="../portfolio.html" class="botlink">Portfolio</a></li>
            <li><a href="../aboutme.html" class="botlink">About Me</a></li>
						<li><a href="../contactme.html" class="botlink">Contact Me</a></li>
					</ul>
				</div>
				<div class="linkcontainer">
					<ul class="listcontainer">
						<li>
							<div class="githubcontainer">
								<a name="github" href="https://github.com/mtu-cvoss"><img border="0" src="../img/GitHub-Mark-Light-120px-plus.png" width="75" height="75"></a>
							</div>
						</li>
						<li>
							<div class="linkedincontainer">
								<a name="linkedin" href="https://www.linkedin.com/in/calvin-voss/"><img border="0" src="../img/LI-In-Bug.png" width="88" height="75"></a>
							</div>
						</li>
						<li>
							<div class="handshakecontainer">
								<a name="handshake" href="https://mtu.joinhandshake.com/users/3798139"><img border="0" src="../img/handshake_mark_light.png" width="75" height="75"></a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
  </body>
</html>
