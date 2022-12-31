<?php
// Start the session
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1)
?>
<?php
$_SESSION["status"] = "LoggedOut";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Rain World Fansite - Login</title>
        <link rel="icon" type="image/x-icon" href="https://static.wikia.nocookie.net/rain-world-game/images/f/f2/Slugcat.jpg">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="home.php">Home</a>
                <a class="navbar-brand" href="index.php">Login</a>
            </div>
        </nav>
        <!-- Header-->
        <header style="background: url(https://static.miraheze.org/rainworldwiki/3/3d/RW_SB_region_art.png); background-repeat: no-repeat; background-attachment: fixed; background-size: cover; background-position: center; image-rendering: auto; image-rendering: crisp-edges; image-rendering: pixelated; background-color:black"; class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0">Fansite Login</h1>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Login</a>
                </div>
            </div>
        </header>
        <!-- Content section 1-->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
							<form class="border border-light p-5" action="logindb.php" method="POST">
			    				<p class="h4 mb-4 text-center">Enter Login Details</p>
			    				<input type="email" id="defaultLoginFormEmail" name="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">
			    				<input type="password" id="defaultLoginFormPassword" name="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">
			    				<p style="color: #FF0000">
				  				<?php
									if (isset($_SESSION["errorMessage"]))
									{
										echo($_SESSION["errorMessage"]);
										?>
										<br>
										<?php
									}
									unset($_SESSION["errorMessage"]);
								?>
								</p>
			  					<input type="submit" value="Login">
							</form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Joshua Rhodes 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
