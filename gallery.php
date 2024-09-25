<?php



if(isset($_FILES['background-image']['name'])){
	
    $mysqli=mysqli_connect('localhost','root','','Gallery');
	var_dump($_FILES);
    
	
	
    $name='';
	$img=$_POST['background-image'];
	foreach($_FILES as $f){
		if($f['error']==0){
			$type=explode('/',$f['type']);
			$t=end($type);
			if($t=='png' || $t=='jpg' || $t=='jpeg'|| $t=='webp'){
			$originalName=explode('.',$f['name']);
			$mt=mt_rand(100000000000,999999999999999);
			$name=$originalName[0].$mt.'.'.$t;
			if(move_uploaded_file($f['tmp_name'],'image/'.$name)){
			$img=$name;
				
			}
			}
		}
	}
	$name='';
	

	$query="INSERT INTO gallery (img) VALUES('$img')";
	mysqli_query($mysqli,$query);

header('location:myphotos.php');
}



error_reporting(0);
 
$msg = "";
 
// If upload button is clicked ...
if (isset($_POST['submit'])) {
 
    $filename = $_FILES["background-image"]["name"];
    $tempname = $_FILES["background-image"]["tmp_name"];
    $folder = "./image/" . $filename;
 
    $db = mysqli_connect("localhost", "root", "", "Gallery");
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO gallery (filename) VALUES ('$filename')";
 
    // Execute query
    mysqli_query($db, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
?>
<script src='https://code.jquery.com/jquery-3.7.1.min.js'>

document.getElementById('getval').onchange = function (e){
    var file = e.target.files[0];

    var reader = new FileReader();
    reader.onloadend = function(){
        document.getElementById('add').style.backgroundImage = "url(" + reader.result + ")";
       
    }
    if(file){
        reader.readAsDataURL(file);
    }
}
</script>