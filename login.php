<?php
require_once "views/header.php";
include ('check_post.php')
?>
<?php
$mysqli=mysqli_connect('localhost','root','','Gallery');
?>

<section class='login'>

<div class='enter'>
<form action="check_post.php" method="post">

	<h3>Log In</h3>
	
		<div class='enter1'>
		<div class='labels'>
		
			<h5><label for= 'a'>e-mail</label></h5>
			<input type='email' name="email" placeholder="E-mail" class="form-control"  id='a'>
			<h5><label for= 'a1'>password</label></h5>
			<input type='password' name="password" placeholder="Password" class="form-control" id='a1'>
	
		</div>
		
		
	</div>
	<div class='remember'>
		<input type='checkbox' name='a1' id='a3'><label for='a3'>Remember </label>
	
		
	</div>	
	<div class='button'>
		<button type='submit'name="submit">Log in</button>
	</div>
	</form>
	</div>
	
	<div class='reg'>
	<h4>If you don't have an account <a href="registration.php">Sign up</a></h4>
	</div>

</section>



</body>
<?php
require_once "views/footer.php"
?>
<script src='https://code.jquery.com/jquery-3.7.1.min.js'>
</script>		
<script src='gallery.js'>
</script>
</html>