<?php

$char = "";

$char = $_POST['nom'];

Function test_compte_nb_mots_ligne(){
	return (
		3 == countWord("Salut les gens")
	);
}

Function test_compte_nb_mots_ligne_two(){
	return (
		3 == countWord(" Salut les gens ")
	);
}

Function test_compte_nb_mots_ligne_three(){
	return (
		3 == countWord("Salut  les  gens")
	);
}

Function test_compte_nb_mots_ligne_four(){
	return (
		countWord("Salut les   gens \n
			l'extreme programming est cool !") == 7
	);
}

Function countWord($string){
	return str_word_count($string);
	// return count(explode(" ", trim($string)));
}

Function lance_tests(){
	var_dump(test_compte_nb_mots_ligne());
	var_dump(test_compte_nb_mots_ligne_two());
	var_dump(test_compte_nb_mots_ligne_three());
	var_dump(test_compte_nb_mots_ligne_four());
}

lance_tests();


?>

<form action="test.php" name="form">
	<textarea name="nom" value="nom"></textarea>
	<input type="submit">
</form>