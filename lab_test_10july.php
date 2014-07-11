<?php

	//GIVEN ARRAY

	$film = array(
			'genres' => array('comedy','tragedy','action','rommance'),
			'film_title' => array('Big','Star Wars','Titanic','French Kiss'),
			'stars' => array('Bill Murray','Mark Hammel','Leonardo Decaprio','Cate Blanchett')
			);
	
	//GET THE FILM-NAME FROM THE GIVE ARRAY
	
	function getFilmName($type)
	{
		global $film;
		for($i=0;$i<4;$i++)
		{
			if($film['genres'][$i] == $type)
			{
				$film_title = $film['film_title'][$i];	
			}
		}
		return $film_title;
	}
	
	//GET THE FILM-STAR FROM THE GIVEN ARRAY
	
	function getStars($type)
	{
		global $film;
		for($i=0;$i<4;$i++)
		{
			if($film['genres'][$i] == $type)
			{
				$stars = $film['stars'][$i];
			}
		}
		return $stars;
	}
	
	//
	echo "<pre><h2>";
	
	//SHOW THE FILM-NAME
	
	function showStars($type)
	{
		echo "Starring   : ".getStars($type).'('.strtolower(str_replace(' ', '-', getStars($type))).')';
	}
	
	//SHOW THE FILM-STAR
	
	function showFilmName($type)
	{
		echo "Film Title : ".getFilmName($type).'('.strtolower(str_replace(' ', '-', getFilmName($type))).')';
	}
	
	//CALL FUNCTION BY GENRES
	
	echo showStars('action')."<br/>";
	
	echo showFilmName('action');
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	