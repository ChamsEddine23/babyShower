<?php

if (isset($_POST['nombreVote'])){
	$nombreVote = $_POST['nombreVote'];
	$_SESSION['nombreVote'] = $nombreVote;
	if(isset($_SESSION['nombreVote'])){
?>
<script type="text/javascript">
      
        document.location.href="./prenom.php";
      
   </script>
<?php
	}

}
?>
 	<form class="container-fluid row col-12 justify-content-center" method="POST" action="">
		  	<div class="container row g-3 " id="spaceOut">
		  <div class="col- col-md-4">
		    <label for="nombreVote" class="col-form-label">Vous êtes</label>
		  </div>
		  <div class="col- col-md-4">
		    <input type="number" class="form-control" name="nombreVote">
		  </div>
		  <div class="col- col-md-4">
		    <span  class="form-text text-dark">
		      Mettez le nombre de personnes qui vont voter.
		    </span>
		  </div>
		</div>		  
		<button type="submit" class="btn btn-primary col-4 col-md-3" for="nombreVote">SUIVANT</button>
	</form>
