
<?php
require_once "views/header.php"
?>
<section class="gallery">
	<div class="container">
		<div class="gallery-items">
	<div class="first">
		<div class="item">
			<form>
				<div class="item1">
				<img>
				</div>
				<h4>model1</h4>
				<h4>by</h4>
			</form>	
			
			<form>
				<div class="item2">
				<img>
				</div>
				
				<h4>model2</h4>
				<h4>by</h4>
			</form>
		</div>		
		<div class="item">
			<form>
				<div class="item3">
					<img>
				</div>
				
				<h4>model3</h4>
				<h4>by</h4>
			</form>	
			
			
			<form>
				<div class="item4">
					<img>
				</div>
				
				<h4>model4</h4>
				<h4>by</h4>
			</form>
		</div>	
	</div>
	
	
	<div class="second">
		<div class="item">
			<form>

				<div class="item5">
					<img>
				</div>
				
				<h4>model5</h4>
				<h4>by</h4>
			</form>	
			
			<form>
				<div class="item6">
					<img>
				</div>
				
				<h4>model6</h4>
				<h4>by</h4>
			</form>	
		</div>
		<div class="item">
			<form>
				<div class="item7">
					<img>
				</div>
				<h4>model7</h4>
				<h4>by</h4>
			</form>	
			
			<form>
				<div class="add">
					 <input type='file' id='getval' name="background-image">
				</div>
			</form>
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




<?php
require_once "views/footer.php"
?>
<script src="gallery.js"></script>

</body>
</html>

