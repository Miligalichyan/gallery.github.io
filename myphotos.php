<?php
include("gallery.php");
?>
<?php
$mysqli=mysqli_connect('localhost','root','','Gallery');
?>
<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='gallery.css'>
<link rel='stylesheet' href='fontawesome-free-6.4.0-web/css/all.min.css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Gallery </title>
<meta charset='utf-8'>
</head>
<body>
<?php
require_once "views/header.php"

?>
<form action="gallery.php" method="post" enctype="multipart/form-data">
<section class="gallery">
	
	<div class="container">
		<div class="gallery-items">
				<div class="first">
					<div class="item">
					<div class="add1">
						<img class="add" id="add">
							 <input type='file' id='getval' name="background-image">
						</img>
					</div>
					<div class="add1">
						<img class="add" id="add">
							 <input type='file' id='getval' name="background-image">
						</img>
					</div>
					</div>
					
					<div class="item">
					<div class="add1">
						<img class="add" id="add">
							 <input type='file' id='getval' name="background-image">
						</img>
					</div>
					<div class="add1">
						<img class="add" id="add">
							 <input type='file' id='getval' name="background-image">
						</img>
					</div>
					</div>
					
				</div>
	
         </div>
		
		<div class="pagination">
			<div class="prev"><i class="fa-solid fa-arrow-left"></i>Prev</div>
			<div class="page">Page <span class="page-num"></span></div>
			<div class="next">Next<i class="fa-solid fa-arrow-right"></i></div>
		</div>
	</div>

</section>
</form>
<?php
require_once "views/footer.php"
?>
<script src='https://code.jquery.com/jquery-3.7.1.min.js'>
</script>		
<script src="gallery.js"></script>
</body>
</html>
