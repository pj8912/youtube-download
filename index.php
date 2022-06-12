<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


<div align="center" >
<h5 align="center">Download Youtube Video</h5>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
	<input placeholder="link" name="youtube_link" type="text">
	<button type="submit" name="ubtn">Submit</button>
</form>
</div>

<?php

if(isset($_POST['ubtn'])){
	

echo '
        <div class="spinner-border text-primary" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
        ';



	$link = $_POST['youtube_link'];
	$tmp = exec("python3 download.py $link");
	echo $tmp;
	header('location:/');
	exit();	
}





?>

