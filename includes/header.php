<!DOCTYPE html>

<html lang="en">

<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>TUCON - Trade Union</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/shopping-page.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!-- <link rel="icon" type="image/png" href="img/favicon.png"> -->

  <!-- Javascript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script type="text/javascript" src="js/jquery.v2.1.3.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>
<body>


  <!-- Modal -->
<div class="modal fade bs-modal-md" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
<div class="modal-dialog modal-md">
  <div class="modal-content">
      <br>
      <div class="bs-example bs-example-tabs">
          <ul id="myTab" class="nav nav-tabs">
            <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
            <li class=""><a href="#signup" data-toggle="tab">Register</a></li>
          </ul>
      </div>
    <div class="modal-body">
      <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade active in" id="signin">
          <form class="form-horizontal">
          <fieldset>
          <!-- Sign In Form -->
          <!-- Text input-->
          <div class="control-group">
            <label class="control-label" for="userid">Email :</label>
            <div class="controls">
              <input required="" id="userid" name="userid" type="text" class="form-control" placeholder="JoeSixpack" class="input-medium" required="">
            </div>
          </div>

          <!-- Password input-->
          <div class="control-group">
            <label class="control-label" for="passwordinput">Password :</label>
            <div class="controls">
              <input required="" id="passwordinput" name="passwordinput" class="form-control" type="password" placeholder="********" class="input-medium">
            </div>
          </div>

          <!-- Multiple Checkboxes (inline) -->
          <div class="control-group">
            <label class="control-label" for="rememberme"></label>
            <div class="controls">
              <label class="checkbox inline" for="rememberme-0">
                <input type="checkbox" name="rememberme" id="rememberme-0" value="Remember me">
                Remember me
              </label>
            </div>
          </div>

          <!-- Button -->
          <div class="control-group">
            <label class="control-label" for="signin"></label>
            <div class="controls">
              <button id="signin" name="signin" class="btn btn-danger">Sign In</button>
            </div>
          </div>
          </fieldset>
          </form>
      </div>
      <div class="tab-pane fade" id="signup">
          <form class="form-horizontal">
          <fieldset>
          <!-- Sign Up Form -->
          <!-- Text input-->
          <div class="control-group">
            <label class="control-label" for="Email">Email :</label>
            <div class="controls">
              <input id="Email" name="Email" class="form-control" type="text" placeholder="JoeSixpack@sixpacksrus.com" class="input-large" required="">
            </div>
          </div>

          <!-- Text input-->
          <div class="control-group">
            <label class="control-label" for="userid">Full Name :</label>
            <div class="controls">
              <input id="userid" name="userid" class="form-control" type="text" placeholder="JoeSixpack" class="input-large" required="">
            </div>
          </div>

          <!-- Password input-->
          <div class="control-group">
            <label class="control-label" for="password">Password :</label>
            <div class="controls">
              <input id="password" name="password" class="form-control" type="password" placeholder="********" class="input-large" required="">
              <em>1-8 Characters</em>
            </div>
          </div>

          <!-- Text input-->
          <div class="control-group">
            <label class="control-label" for="reenterpassword">Re-Enter Password:</label>
            <div class="controls">
              <input id="reenterpassword" class="form-control" name="reenterpassword" type="password" placeholder="********" class="input-large" required="">
            </div>
          </div>

          <!-- Multiple Radios (inline) -->
          <br>

          <!-- Button -->
          <div class="control-group">
            <label class="control-label" for="confirmsignup"></label>
            <div class="controls">
              <button id="confirmsignup" name="confirmsignup" class="btn btn-danger">Sign Up</button>
            </div>
          </div>
          </fieldset>
          </form>
    </div>
  </div>
    </div>
    <div class="modal-footer">
    <center>
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </center>
    </div>
  </div>
</div>
</div>

  <!-- List Layout Right Sidebar Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

	<div class="all_content animsition container-fluid">
		<div class="row">

			<div class="header"><!-- Start header -->
				<div class="top_bar"><!-- Start top_bar -->
					<div class="min_top_bar"><!-- Start min_top_bar -->
						<div class="container">
							<div class="top_nav"><!-- Start top_nav -->
								<ul>
                  <li><a href="#">info@tucon.com</a></li>
									<li><a href="#">tucon@gmail.com</a></li>
								</ul>
							</div><!-- End top_nav -->

							<div id="top_search_ico"><!-- Start top_search_ico -->
								<div class="top_search"><!-- Start top_search -->
									<form method="get"><input type="text" placeholder="Search and hit enter..."></form>
									<i class="fa fa-search search-desktop"></i>
								</div><!-- End top_search -->

								<div id="top_search_toggle"><!-- Start top_search_toggle -->
									<div id="search_toggle_top">
									<form method="get"><input type="text" placeholder="Search and hit enter..."></form>
									</div>
									<i class="fa fa-search search-desktop"></i>
								</div><!-- End top_search_toggle -->
							</div><!-- End top_search_ico -->

							<div class="social_icon"><!-- Start social_icon -->
								<span><a href="#"><i class="fa fa-facebook"></i></a></span>
								<span><a href="#"><i class="fa fa-twitter"></i></a></span>
								<span><a href="#"><i class="fa fa-google-plus"></i></a></span>
                <span><a href="#"><i class="fa fa-youtube"></i></a></span>
                <span class="login"><a href="#signup" data-toggle="modal" data-target=".bs-modal-md"><i class="fa fa-user m-r-5"></i> Login</a></span>
							</div><!-- End social_icon -->


						</div>
					</div><!-- End min_top_bar -->
				</div><!-- End top_bar -->

				<div class="main_header"><!-- Start main_header -->
					<div class="container">

						<div class="logo logo_blog_layout"><!-- Start logo -->
							<!-- <h3>logo</h3> -->
							<a href="index.php"><img src="img/logo.png" alt="Logo"></a>
						</div><!-- End logo -->

						<div class="nav_bar"><!-- Start nav_bar -->
							<nav id="primary_nav_wrap"><!-- Start primary_nav_wrap -->
								<ul>
								  <li class="current-menu-item"><a href="index.php">Home</a></li>
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="issue.php">Issue/Campaigns</a></li>
                  <li><a href="publication.php">Publications</a></li>
								  <li><a href="#">Multimedia</a></li>
								</ul>
							</nav><!-- End primary_nav_wrap -->
						</div><!-- End nav_bar -->

						<div class="hz_responsive"><!--button for responsive menu-->
							<div id="dl-menu" class="dl-menuwrapper">
								<button class="dl-trigger">Open Menu</button>
							<ul class="dl-menu">
							  <li class="current-menu-item"><a href="index.php">Home</a>
							    <ul class="dl-submenu">
							      <li><a href="full_width.php">full width</a>
							      	<ul class="dl-submenu">
							      		<li><a href="layout_left_sidebar.php">Lift Sidebar</a></li>
							      		<li><a href="index.php">Right Sidebar</a></li>
							      	</ul>
							      </li>
							      <li><a href="grid_layout.php">Grid Layout</a>
							      	<ul class="dl-submenu">
							      		<li><a href="grid_layout_left_sidebar.php">Left Sidebar</a></li>
							      		<li><a href="grid_layout_right_sidebar.php">Right Sidebar</a></li>
							      	</ul>
							      </li>
							      <li><a href="list_layout.php">List Layout</a>
							      	<ul class="dl-submenu">
							      		<li><a href="list_layout_left_sidebar.php">List Left Sidebar</a></li>
							      		<li><a href="list_layout_right_sidebar.php">List Right Sidebar</a></li>
							      	</ul>
							      </li>
							    </ul>
							  </li>
							  <li><a href="#">Pages</a>
							    <ul class="dl-submenu">
							      <li><a href="single.php">Single</a></li>
							      <li><a href="about_me.php">about me</a></li>
							      <li><a href="contact.php">contact</a></li>
							      <li><a href="authors.php">Authors</a></li>
							      <li><a href="archive.php">archive</a></li>
							      <li><a href="404.php">404</a></li>
							    </ul>
							  </li>
							  <li><a href="#">single post</a>
							    <ul class="dl-submenu">
							      <li><a href="single_full_width.php">single full Width</a></li>
							      <li><a href="single_left_sidebar.php">single left sidebar</a></li>
							      <li><a href="single_right_sidebar.php">single right sidebar</a></li>
							    </ul>
							  </li>
							  <li><a href="#">Category</a>
							    <ul class="dl-submenu">
							      <li><a href="#">Category 1</a></li>
							      <li><a href="#">Category 2</a></li>
							      <li><a href="#">Category 3</a></li>
							    </ul>
							  </li>
						      <li><a href="about_me.php">about me</a></li>
						      <li><a href="contact.php">contact</a></li>
							</ul>
							</div><!-- /dl-menuwrapper -->
						</div><!--End button for responsive menu-->

					</div>
				</div><!-- End main_header -->
			</div><!-- End header -->
