<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OSSA Grievance Inquiries</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/half-slider.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  
  		
		<script>
			function myfun()
			{
				var guidebutton=document.getElementById("butn");
				var guidelines=document.getElementById('Guidelines');
				if(guidebutton.value=="Click to see Guidelines")
				{
				
					guidelines.style.display='block';
					guidebutton.value='Click to hide Guidelines';
				}
				else if(guidebutton.value=="Click to hide Guidelines")
				{
			
					guidelines.style.display='none';
					guidebutton.value='Click to see Guidelines';
				}
			}
		</script>
	
 

</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li>
                        <a href="<?php $_SERVER['DOCUMENT_ROOT'];?>/ossagrievance/users/index.php">USER LOGIN</a>
                        </li>
                    <li>
                        <a href="<?php $_SERVER['DOCUMENT_ROOT'];?>/ossagrievance/about.php">ABOUT</a>
                    </li>
                    <li>
                        <a href="<?php $_SERVER['DOCUMENT_ROOT'];?>/ossagrievance/home.php">HOME</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    </header>
    <div class="bg-image" style="background-image: url('123.jpg'); background-size: cover; background-repeat: no-repeat; height: 100vh">
            
             <!-- Page Content -->
    <div class="container">

<div class="row">
    <div class="col-lg-12">
    <br><br><br><br><br><center><h1>WELCOME</h1></center>
    <center><h2>CPSU OSSA GRIEVANCE AND INQUIRY</h2></center>
    </div>
</div>
<br>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
 <!-- Footer -->
 <footer>
            <div class="row">
                <div class="col-lg-12">
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><center><p Style="color:white;">Copyright &copy;  | OSSA-GI 2023</p></center>
                </div>
            </div>
            <!-- /.row -->
        </footer>

</html>
