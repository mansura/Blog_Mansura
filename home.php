<?php
    
	session_start();
	
	if(isset($_SESSION['username'])|| isset($_COOKIE['username'])){
		header ("Location: index.php");	
	}
	
	  include_once('resources\init.php');
	
	error_reporting(0);
	
	if($_POST['submit'])
	{
		
		if(isset($_POST['remember'])){
           $_SESSION['cookie'] = 'enable';  
        // setcookie('useremail', $_SESSION['username'], time()+3600);	
         	
     }
		
	 if(!in_array(null, $_POST)){
      $check = login_checker($_POST);
       if($check === 1){
           $useremail = $_POST['email'];
           $_SESSION['username'] = $useremail;           
           header('Location: index.php');
       }else{
           $message = $check;
       }
   }
   
   
	
	}
	
	
?>	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
		<div class="container" style="background-color: ashgray;">

			<div class="row">
				<div class="col-md-12">
				    <img src="Image/header.jpg" style="width:100%;height:200px;">
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<ul class="nav  nav-justified" style="background-color: firebrick; width:100%;height:60px;">
						<li class="active"><a href="home.php">Home</a></li>
						<li class="active"><a href="contact.php">Contact Me</a></li>
						<li class="active"><a href="#">Help</a></li>
					</ul>
				</div>
			</div>
				
			<div class="row">
				<div class="col-md-4">
					<div class="well" style="background-color: ashgray; color: black;">
                        <h2 align="center"><font color="navy">Login</font></h2><br><br>
							  
							<form action="home.php" method="post" class="form-horizontal" role="form">
							  <h2 class="alert-warning"><?php if(isset($message)) echo $message ?></h2>
										
								<div class="form-group">
									<label class="control-label col-sm-3" for="email">Email:</label>
									<div class="col-sm-9">
										<input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
											
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-sm-3" for="pwd">Password:</label>
									<div class="col-sm-9">
										<input type="password" name="pass" class="form-control" id="pwd" placeholder="Enter password">
									</div>
								</div>
										
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
										<label align="left"><input type="submit" name="submit" value="Login" class="btn btn-primary"></label>
												
										<label class="checkbox pull-center"><br>
											<input type="checkbox" value="rememberme" name="remember">
												Remember me
										</label>
										<a href="register.php" class="text-left new-account"><p align="left"><font color="navy">Create an account</font></a></p>
									</div>
								 </div>
										
							</form>
                    </div>
				</div>
						
				<div class="col-md-8">
				  <div class="well" style="background-color: lightcyan;color: black;">
				  <img src="Image/dictionary.jpg">
				  
					   <h2 align="left"><font color="navy">Definition of dictionary</font></h2><hr>
					   
					   <p align="left">A dictionary is a collection of words in one or more specific languages, often listed alphabetically 
					    with usage of information, definitions, etymologies, phonetics, pronunciations, translation, and other information;or a book of
						words in onelanguage with their equivalents in another, also known as a lexicon.[1] It is a lexicographical product designed for 
						utility and function, curated with selected data, presented in a way that shows inter-relationships among the data.</p>
					   <img src="Image/IELTS.jpg">
					   <h2 align="left"><font color="navy">IELTS practice</font></h2><hr>
					   
					   <p align="left">The international English language testing system (IELTS) is the world’s most popular English language proficiency 
					   test for higher education and global migration, with over 2 million tests taken in the last year.</p>
					   
					   
				   
				  </div> 
				</div>
			</div>
							
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="well" style="background-color:auburn; color: navy;">
							<p align="center">Copyright@2015.All Rights Reserved</p>
							<p align="center">All information of this blogsite is deemed accurate but not guaranteed.</p>
							<p align="right">Blogsite designed by Mansura Begum.</p>
							<h4 align="right">
								<span class="label label-primary">f</span>
								<span class="label label-info">t</span>
								<span class="label label-danger">g+</span>
								<span class="label label-primary">in</span>
							</h4>
						</div>
					</div>
			    </div>
		</div>
</body>	