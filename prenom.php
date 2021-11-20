<?php
session_start();

include 'app/connectDB.php';

if(isset($_SESSION['nombreVote'])){
	if(isset($_POST['lesPrenoms'])){
		$_SESSION['lesPrenoms'] = $_POST['lesPrenoms'];
		$lesPrenoms = $_POST['lesPrenoms'];
echo "yes";
		foreach ($lesPrenoms as $prenom) {
			echo $prenom;
			$insererPrenom = $bdd->prepare("INSERT INTO votes (prenom) VALUES (?)");
			$insererPrenom->execute(array($prenom));
		}
		

		

		
		?>


<script>
      
        document.location.href="./vote.php#spaceOut";
      
   </script>
<?php
	}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">




	<title>Baby Shower</title>
</head>

<body>
<?php include 'header.php'; ?>
	<main class="container-fluid justify-content-center">

		

		

	<form class="container-fluid row col- justify-content-center" method="POST" action="">
		  	<div class="container row g-3 " id="spaceOut">

	<?php 
	if ($_SESSION['nombreVote'] > 1){
		echo("<p class='accroche'>Ici on prends vos prenoms pour pouvoir vous inscrires dans la base de données</p>");
		for($i = 1; $i <= $_SESSION['nombreVote']; $i++){
	
	?>
		
		  	
			  <div class="col-12 col-md-6 justify-content-md-start">
			    <label name = "lesPrenoms[]" class="col-form-label">Prénom ( <?php echo $i; ?> ) </label>
			  </div>
			  <div class="col-12 col-md-6">
			    <input type="text" class="form-control" aria-describedby="Mettez vos prenoms" name="lesPrenoms[]">
			  </div>
			
			

	<?php 
		}
	}elseif($_SESSION['nombreVote'] == 1){
		echo("<p class='accroche'>Ici on prend ton prenom pour pouvoir t'inscrires dans la base de données</p>");
	?>

		<div class="col-12 col-md-6 justify-content-md-start">
			    <label name = "lesPrenoms[]" class="col-form-label">Prénom</label>
			  </div>
			  <div class="col-12 col-md-6">
			    <input type="text" class="form-control" aria-describedby="Mettez vos prenoms" name="lesPrenoms[]">
			  </div>
	<?php
	}
	?>
		</div>
		<button type="submit" class="btn btn-primary col-4 col-md-3" for="lesPrenoms">SUIVANT</button>
	</form>




	</main>
<?php include 'footer.html' ?>
	

</body>
</html>


<?php
}else{
	header('Location: ./index.php');
}
?>