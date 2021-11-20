<?php
session_start();


include 'app/connectDB.php';

	if(isset($_SESSION['vote'])){

		$countVote = $bdd->query("SELECT COUNT(*) FROM votes WHERE vote = 'fille' OR vote = 'garçon' ");
		$reqCountVote= $countVote->fetch();
		
	

		$voteFille = $bdd->query("SELECT COUNT(*) FROM votes WHERE vote = 'fille'");
		$reqVoteFille = $voteFille->fetch();
		
		$resultatVoteFille = intval(($reqVoteFille[0] *100)/$reqCountVote[0]);
		


		$resultatVoteGarcon = 100 - $resultatVoteFille;
		


	}else{
		header('Location: ./index.php');
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

	<!-- <main class="container-fluid">
		<div class="container-fluid row">
			<div class="container ">
				Vous etes <?php echo $resultatVoteFille ?>% a voter fille
				<div class="col-6 progress">
			 		 <div class="progress-bar" role="progressbar" style="width: <?php echo $resultatVoteFille ?>%;" aria-valuenow="<?php echo $resultatVoteFille ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $resultatVoteFille ?>%
			 		 </div>
				</div>
			</div>
			<br />
			<div class="container ">
			
				Vous etes <?php echo $resultatVoteGarcon ?>% a voter Garçon
				<div class="col-6 progress">
			 		 <div class="progress-bar" role="progressbar" style="width: <?php echo $resultatVoteGarcon ?>%;" aria-valuenow="<?php echo $resultatVoteFille ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $resultatVoteGarcon ?>%
			 		 </div>
				</div>
			</div>
			<div class="progress">
				  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
				  	
				  </div>
			</div>
		</div>
	</main> -->
<main class="container" id="resultat">
	<div class="row">
		<div>
			<h1 class="display-1">Voici donc le resultat</h1>
		</div>
		<div class="container col-6">
			Vous etes <?php echo $resultatVoteFille ?>% a voter fille
			
		</div>
		<div class="container col-6">
			Vous etes <?php echo $resultatVoteGarcon ?>% a voter Garçon
			
		</div>
	</div>


	<!-- cercular progress bar -->
	<div class="row" id="circular">
		<div class="col-6 circular">
	      <div class="circular-progress-fille">
	        <div class="value-container-fille">0%</div>
	      </div>
	    </div>
	    <div class="col-6 circular">
	      <div class="circular-progress-garcon">
	        <div class="value-container-garcon">0%</div>
	      </div>
	    </div>
	</div>

	<div id="video">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/6mhFChoQlZU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>


<script>
    let progressBar_fille = document.querySelector(".circular-progress-fille");
let valueContainer_fille = document.querySelector(".value-container-fille");

let progressValue = 0;
let progressEndValue_fille = <?php echo $resultatVoteFille; ?>;
let speed = 50;

let progress_fille = setInterval(() => {
  progressValue++;
  valueContainer_fille.textContent = `${progressValue}%`;
  progressBar_fille.style.background = `conic-gradient(
      #f94d4d ${progressValue * 3.6}deg,
      #cadcff ${progressValue * 3.6}deg
  )`;
  if (progressValue == progressEndValue_fille) {
    clearInterval(progress_fille);
  }
}, speed);

    let progressBar = document.querySelector(".circular-progress-garcon");
let valueContainer = document.querySelector(".value-container-garcon");


let progressEndValue = <?php echo $resultatVoteGarcon; ?>;


let progress = setInterval(() => {
  progressValue++;
  valueContainer.textContent = `${progressValue}%`;
  progressBar.style.background = `conic-gradient(
      #4d95f9 ${progressValue * 3.6}deg,
      #cadcff ${progressValue * 3.6}deg
  )`;
  if (progressValue == progressEndValue) {
    clearInterval(progress);
  }
}, speed);
</script>

</main>
	<footer>
		<?php include('./footer.html') ?>
	</footer>

</body>