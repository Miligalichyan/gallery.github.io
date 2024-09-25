<?php
require_once "views/header.php";
include("users.php");
?>
<?php
$mysqli=mysqli_connect('localhost','root','','Gallery');
?>

<section class='regist'>

<div class='enter'>
<form action="users.php" method="post">

	<h3>Registration</h3>
	
		<div class='enter1'>
		<div class='labels'>
			<h5><label for='a'>Fisrt Name</label></h5>
			<input type='name' name="name"  placeholder="First Name" class="form-control"  id='a'>
			<h5><label for= 'a'>Last Name</label></h5>
			<input type='lastname' name="lastname" placeholder="Last Name" class="form-control"  id='a1'>
			<h5><label for= 'a'>e-mail</label></h5>
			<input type='email' name="email"  placeholder="E-mail" class="form-control"  id='a2'>
			<h5><label for= 'a1'>password</label></h5>
			<input type='password' name="password" placeholder="Password" class="form-control" id='a3'>
	
		</div>
		
		
	</div>
	<div class='remember'>
		<input type='checkbox' name='a1' id='a3'><label for='a3'>Remember </label>
	
		
	</div>	
	<div class='button'>
		<button type='submit'name="submit">Sign up</button>
	</div>
	</form>
	</div>
	
	<div class='log'>
	<h4>If you have an account <a href="login.php">Log in</a></h4>
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