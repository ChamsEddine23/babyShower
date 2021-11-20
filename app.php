<!-- <?php
if (isset($_POST['prenom'])){
	$prenom = htmlspecialchars($_POST['prenom']);
	$insererPrenom = $bdd->prepare("INSERT INTO votes (prenom) VALUES (?)");
	$insererPrenom->execute(array($prenom));
}
?>
 -->
<?php
session_start();

 if(!isset($_POST['nombreVote'])){ 
 	<form class="container row col-12 justify-content-center" method="POST">
		  	<div class="row g-3 align-items-center" id="spaceOut">
		  <div class="col-4">
		    <label for="nombreVote" class="col-form-label">Vous etes</label>
		  </div>
		  <div class="col-4">
		    <input type="number" class="form-control" aria-describedby="passwordHelpInline" name="nombreVote">
		  </div>
		  <div class="col-4">
		    <span id="passwordHelpInline" class="form-text">
		      Mettez le nombre de personne qui vont voter.
		    </span>
		  </div>
		</div>		  
	<button type="submit" class="btn btn-primary col-3" for="nombreVote">Valider</button>
	</form>
 }else(isset($_POST['nombreVote'])){
 	# code...
 	<form class="container row col-12 justify-content-center" method="POST">
	  	<div class="row g-3 align-items-center" id="spaceOut">
		  <div class="col-4">
		    <label for="prenom" class="col-form-label">Prénom</label>
		  </div>
		  <div class="col-4">
		    <input type="text" class="form-control" aria-describedby="passwordHelpInline" name="prenom">
		  </div>
		</div>
		<button type="submit" class="btn btn-primary col-3" for="prenom">Valider</button>
	</form

 	if(isset($_POST['prenom'])){

 		<form class="container row col-12 justify-content-center" method="POST">	
			<div class="row g-3 align-items-center" id="spaceOut">				
				<div class="col-4">
					<label for="vote">Tu pense que c'est </label>
				</div>
				<div class="col-4">
					<div class="custom-control custom-radio">
						<input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
						<label class="custom-control-label" for="fille">Une Fille</label>
					</div>
					<div class="custom-control custom-radio mb-3">
						<input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
					    <label class="custom-control-label" for="garcon">Un Garçon</label>
					</div>
				</div>		
				
			</div>  
					  
			<button type="submit" class="btn btn-primary col-3" for="nombreVote">Valider</button>
		</form>

		if(isset($_POST['vote'])){

		 	}
 	}
 }