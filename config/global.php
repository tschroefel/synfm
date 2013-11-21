<?php
	/******************SynFM - yet another last.fm Framework*****************/
	/* Filename: global.php
	/* Purpose: Global config file
	/* Created: 13.05.2010
	/*************************************************************************
	/* Bi-Licensed under GPLv2 and 
	/* Musicware License (send the authors a CD if you like this framework)
	/*************************************************************************
	/* my last.fm profile:
	/* nightraven: http://www.lastfm.de/user/Nightr4ven
	/************************************************************************/
	
	// Enable caching?
	define('SYNFM_CACHING_ENABLED', '0');
	
	// 0 = MySQL (See docs/mysql-howto for further information); 1 = plaintext in cache/
	define('SYNFM_CACHING_TYPE', '0');
	
	// lastfm api basic url (only neccessary to change if lastfm changes it's api url)
	define('SYNFM_API_URL', 'http://ws.audioscrobbler.com/2.0/');
?>