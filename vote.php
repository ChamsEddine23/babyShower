<?php
session_start();

include 'app/connectDB.php';

if(isset($_SESSION['lesPrenoms'])){
	if(isset($_POST['sexeChoisi'])){
		$_SESSION['vote'] = $_POST['vote'];

		$lesVOTES = $_SESSION['vote'];
		$lesPRENOMS = $_SESSION['lesPrenoms'];
		
		
		$i = 0;
		do{
			foreach ($lesVOTES as $prenom =>$vote) {
				
				$prenom = $_SESSION['lesPrenoms'];

			$insererPrenom = $bdd->prepare("UPDATE votes SET vote = (?) WHERE prenom = (?)");
			$insererPrenom->execute(array($vote, $prenom[$i]));
				$i++;
			}
			
		}while ($i < count($lesPRENOMS));
		

				?>
<script type="text/javascript">
      
        document.location.href="./resultat.php#resultat";
      
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
		  	<div class="container row g-3 align-items-center" id="spaceOut">
			
	<?php
		if($_SESSION['nombreVote'] >= 1){
			echo("<p class='accroche' id='bravo'>Vous y etes c'est la dernière étape </p>");
			$lesPrenoms = $_SESSION['lesPrenoms'];
			$tailleTableauPrenoms = count($lesPrenoms);

			foreach ($lesPrenoms as $key => $prenom ) {
				
				

	?>			
				<div class="col- col-md-6 ">
					<label for="vote"><span id="prenomVote"><?php echo $prenom; ?></span> Tu penses que c'est </label>
				</div>
				<div class="col- col-md-6 ">
					
						<div>
							<input type="checkbox" name="vote[]" value="fille" >
							<label>une fille</label>
						</div>
					
					    <div>
						    <input type="checkbox" name="vote[]" value="garçon">
						    <label>un garcon</label>
						</div>
					
				</div>

				<!-- ajout d'une barre qui s'arrete -->

				<?php
				if($key+1 < $tailleTableauPrenoms){
				?>
				<hr class="w-100 clearfix ">
				<?php
				}
				?>
				

	<?php
			}
		}
	?>		
						
			</div>  
							  
			<button type="submit" class="btn btn-primary col-4 col-md-3" name="sexeChoisi">SUIVANT</button>
		</form>

		
	</main>


<?php include 'footer.html' ?>

</body>
</html>

<?php
}else{
	// header('Location: ./index.php');
}
?>