 <form method="POST" action="index.php?uc=voirJoueurs&action=modificationC">
   <fieldset>
	
		<p>
			<label for="nom">nom</label>
			<input id="nom" type="text" name="nom" value="" size="40" maxlength="45">
		</p>
		<p>
			<label for="adresse">adresse</label>
			 <input id="adresse" type="text" name="adresse" value="" size="30" maxlength="45">
		</p>
		<p>
			<label for="ville">ville</label>
			<input id="ville" type="text" name="ville" value="" size="30" maxlength="45">
		</p>
			<label for="cp">code postale</label>
			<input id="cp" type="text" name="cp" value="" size="40" maxlength="45">
		<p>
			<label for="logo">logo</label>
			<input id="logo" type="text" name="logo" value="" size="30" maxlength="45">

            <input type="submit" name="modifier" value="modifier">

		<INPUT type="hidden" name ="id" value="<?php echo $_REQUEST['id'];?>"/>
      </p>
</form>