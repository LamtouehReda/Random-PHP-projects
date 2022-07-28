<?php include 'header.php'; 
include 'connection/connect.php';
?>
<h1 class="title" >Leadership</h1>
<div class="leadershipDiv">
	<div class="cat">
		<h1>Denning Co-Directors</h1>
	</div>
	<?php
    $stmt=$connect->query("SELECT * FROM leadership WHERE role LIKE 'Denning Co-Directors'");
    $stmt=$stmt->fetchAll();
    foreach ($stmt as $col) {
    	echo'
	<div class="leadershipContent">
	<div class="left">
		<h2><a  style="text-decoration: none;" href="">'.$col['name'].'</a></h2>
		<p class="first">
			'.$col['description'].'
		</p>
		<p class="second">
			'.$col['comment'].'" 
		</p>
		<a href="#" ><i class="fab fa-twitter fa-2x"></i></a>
		<a href="'.$col['email'].'"><i class="far fa-envelope fa-2x"></i></a>
	</div>
	<div class="right">
		<img src="images/feifei.jpg">
	</div>
	</div>
    	';
    }
	?>
</div>
<div class="leadershipDiv">
	<div class="cat">
		<h1>Associate Directors</h1>
	</div>
	<?php
    $stmt=$connect->query("SELECT * FROM leadership WHERE role LIKE 'Associate Directors'");
    $stmt=$stmt->fetchAll();
    foreach ($stmt as $col) {
    	echo'
	<div class="leadershipContent">
	<div class="left">
		<h2><a  style="text-decoration: none;" href="">'.$col['name'].'</a></h2>
		<p class="first">
			'.$col['description'].'
		</p>
		<p class="second">
			'.$col['comment'].'" 
		</p>
		<a href="#" ><i class="fab fa-twitter fa-2x"></i></a>
		<a href="'.$col['email'].'"><i class="far fa-envelope fa-2x"></i></a>
	</div>
	<div class="right">
		<img src="images/leadership.jpg">
	</div>
	</div>
    	';
    }
	?>
</div>
<div class="leadershipDiv">
	<div class="cat">
		<h1>Senior Staff</h1>
	</div>
	<?php
    $stmt=$connect->query("SELECT * FROM leadership WHERE role LIKE 'Senior Staff'");
    $stmt=$stmt->fetchAll();
    foreach ($stmt as $col) {
    	echo'
	<div class="leadershipContent">
	<div class="left">
		<h2><a  style="text-decoration: none;" href="">'.$col['name'].'</a></h2>
		<p class="first">
			'.$col['description'].'
		</p>
		<p class="second">
			'.$col['comment'].'" 
		</p>
		<a href="#" ><i class="fab fa-twitter fa-2x"></i></a>
		<a href="'.$col['email'].'"><i class="far fa-envelope fa-2x"></i></a>
	</div>
	<div class="right">
		<img src="images/seniorstaff.png">
	</div>
	</div>
    	';
    }
	?>
</div>



<?php include 'footer.php'; ?>