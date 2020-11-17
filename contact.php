<?php 
session_start();
$sessionset = "false";
$uname = "";

if (isset($_SESSION['username']))
{
	$uname=$_SESSION['username'];
	 
	$sessionset = "true";
	
}
else
{
	$sessionset = "false";
	$uname = "";
	
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Alliance Bowling Machine, the need of Batsman</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .fa {
            padding: 05px;
            font-size: 15px;
            width: 20px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        .fa-youtube {
            background: #bb0000;
            color: white;
        }

        .fa-instagram {
            background: #125688;
            color: white;
        }
    </style>
    <title>Alliance Bowling Machine, the need of Batsman</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Alliance Bowling Machine</a>
        <a href="https://www.facebook.com/Alliance-Bowling-Machine-109188480622182/?view_public_for=109188480622182"
            class="fa fa-facebook"></a>
        <a href="https://www.youtube.com/playlist?list=PL2ckW2Whw3XM9lXwc3SzguI7b7zCga0Nc" class="fa fa-youtube"></a>
        <a href="https://www.instagram.com/officeofabm/" class="fa fa-instagram"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/ABM/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ABM/Aboutus.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/ABM/Products.php" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Products
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/ABM/SW.php">Single Wheel Bowling Machines</a>
                        <a class="dropdown-item" href="/ABM/DW.php">Double Wheel Bowling Machines</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/ABM/BF.php">Ball Feeders</a>
                        <a class="dropdown-item" href="/ABM/Access.php">Dimple Balls</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/ABM/contact.php">Contact ABM</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/ABM/gallary.php">Gallery</a>
                </li>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0"> -->
            <div class="mx-2" id = "Loginsignup" <?php if ($sessionset=='true'){?>style="display:none"<?php } ?>>
                <button class="btn btn-danger" data-toggle="modal" data-target="#loginModal">login</button>
                <button class="btn btn-danger" data-toggle="modal" data-target="#SignUpModal">SignUp</button>
            </div>
			
			<div class="mx-2" id="Loggedin" <?php if ($sessionset=='false'){?>style="display:none"<?php } ?>>
                <p class="text-primary" > Welcome <?php echo $uname ?> </p>
				<a href="/ABM/logout.php" > LOGOUT </a>
                
            </div>
        </div>
    </nav>
	<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" <?php if ($sessionset==true){?>style="display:none"<?php } ?>>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login to ABM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/ABM/Login.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="lexampleInputEmail1"
                                aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else. Login to get exciting offers and information</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="lexampleInputPassword1">
                        </div>
                        <!-- <div class="form-group form-check"> -->
                            <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                            <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
                        <!-- </div> -->
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->

    <!-- SignupModal -->
    <div class="modal fade" id="SignUpModal" tabindex="-1" aria-labelledby="SignUpModalLabel" aria-hidden="true" <?php if ($sessionset==true){?>style="display:none"<?php } ?>>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="SignUpModalLabel">Please SignUp at ABM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/ABM/UserRegistration.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="cexampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="cexampleInputPassword1" name="cexampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="cexampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" id="cexampleInputPassword2" name="cexampleInputPassword2">
                        </div>
						<div class="form-group">
                            <label for="cexampleInputPassword1">Contact Number</label>
                            <input type="text" class="form-control" id="ccontact" name="ccontact">
                        </div>
                        <!-- <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> -->
                        <button type="submit" class="btn btn-primary">Create Account</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <form action="/ABM/UserInfo.php" method="post">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="cemail">
            </div>
            <div class="form-group col-md-4">
                <label for="inputEmail4">Contact Number</label>
                <input type="text" class="form-control" id="inputContactNo" name="ccontactno">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">Name</label>
                <input type="text" class="form-control" id="inputPassword4" name="cname">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="cadd1">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"
                name="cadd2">
        </div>
		<div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity" name="ccity">
        </div>
        <div class="form-group col-md-3">
            <label for="inputState">State</label>
            <input type="text" class="form-control" id="inputState" name="cstate">
            
        </div>
        <div class="form-group col-md-3">
            <label for="inputCountry">Country</label>
            <input type="text" class="form-control" id="inputCountry" name="ccountry">

        </div>
        <div class="form-group col-md-3">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip" name="czip">
        </div>
	</div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Enquiries/Concerns</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="cenq"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    <footer class="container">
        <p class="float-right"><a href="/ABM/index.php">Home</a></p>
        <p>@ 2020-2022, alliancebowlingmachine, co<a href="/ABM/Term.php"> Privacy & Terms</a></p>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>