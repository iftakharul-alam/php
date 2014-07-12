<?php

	//GIVEN ARRAY

	$film = array(
			'genres' => array('comedy','tragedy','action','rommance'),
			'film_title' => array('Big','Star Wars','Titanic','French Kiss'),
			'stars' => array('Bill Murray','Mark Hammel','Leonardo Decaprio','Cate Blanchett')
			);
	
	//GET THE FILM-NAME FROM THE GIVEN ARRAY USING THIS FUNCTION
	
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
	
	//GET THE FILM-STAR FROM THE GIVEN ARRAY  USING THIS FUNCTION
	
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
	
	//SHOW THE FILM-NAME USING THIS FUNCTION
	
	function showStars($type)
	{
		echo "Starring   : ".getStars($type).'('.strtolower(str_replace(' ', '-', getStars($type))).')<br/>';
	}
	
	//SHOW THE FILM-STAR USING THIS FUNCTION
	
	function showFilmName($type)
	{
		echo "Film Title : ".getFilmName($type).'('.strtolower(str_replace(' ', '-', getFilmName($type))).')<br/>';
	}
	
	//Intergate showStars and showFilmName
	// in one function so that all info
	// can get by calling only one function
	
	function filmGenres($type)
	{
		showStars($type);
		showFilmName($type);
	}
	
	//Call function by the Genres to get all info
	
	echo filmGenres('action');
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	