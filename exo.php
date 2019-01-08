<?php
	$personnes = [
		'personne_1' => [
			'nom' => 'NomA',
			'prenom' => 'PrenomA',
			'age' => '20'
		],
		'personne_2' => [
			'nom' => 'NomB',
			'prenom' => 'PrenomB',
			'age' => '14'
		],
		'personne_3' => [
			'nom' => 'NomC',
			'prenom' => 'PrenomC',
			'age' => '32'
		]
	];

	foreach($personnes as $personne){
		if($personne['age']>18){
			echo $personne['prenom'];
		}
	}
	
?>
	