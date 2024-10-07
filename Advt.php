<?php
include 'server1.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--Favicon-->
    <link href="images/logo.png" rel="icon">
	
    <title>Advertise with Us</title>
    <link rel="stylesheet" href="Advt.css">
</head>
<body class="body2">
    <article>
        <header></header>
		<main>
			<div class="header">
				<h2>Advertise with Us</h2>
			</div>
			<form id = "myadvert" name ="myadvert" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			
				<div class="input-group">
					<label for="name">Fullname</label>
					<input type="text" name="name" pattern ="[A-Za-z\s]{3,}" title="name must be atleast 3 letters" required="required" />
				</div>


				<div class="input-group">
				<label for="email">Email Address</label>
				<input type="email" name="email" pattern ="[^@\s]+@[^@\s]+\.[^@\s]+" title="must have @ and ." required="required" />
				
				</div>


				<div class="input-group">
				<label for="phone">Phone Number</label>
				<input type="text" name="phone" pattern ="[0]{1}[0-9]{9}" title="Phone number with 0xxx and only 10 digits" required="required"/>
				
				</div>


				<div class="input-group">
				<label for="county">County</label>
				<input type="text" name="county" pattern ="[A-Za-z\s]{3,}" required="required"/>
					
				</div>


				<div class="input-group">
				<button type="submit" class="btn" name="reg">Submit</button>
				</div>
			</form>
		
		</main>
        <br>
        <footer class="ftr">
            <p>&#9978</p>
			<p>Quality apartment.</p>
			<hr>
			<br>
			<a href="https://www.facebook.com/profile.php?id=100087640730555" class="fa fa-facebook">f</a>
			<a href="#" class="fa fa-twitter">t</a>
			<p>Contact:- +254742273610</p>
			<p>&copy Copyright Millan.All Reserved<br/>Powered by Millan Web Creator.</p>

        </footer>
    </article>
</body>
</html>