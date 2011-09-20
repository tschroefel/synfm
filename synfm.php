<?php
	/******************SynFM - yet another last.fm Framework*****************/
	/* Filename: synfm.class.php
	/* Purpose: Main class, loads the subclasses
	/* Created: 08.05.2010
	/*************************************************************************
	/* Bi-Licensed under GPLv2 and
	/* Musicware License (send the authors a CD if you like this framework)
	/*************************************************************************
	/* our last.fm profiles:
	/* crushmaster: http://www.lastfm.de/user/crushhamster (Vinyl preferred)
	/* nightraven: http://www.lastfm.de/user/Nightr4ven
	/************************************************************************/

	ERROR_REPORTING(E_ALL);
	
	require_once 'config/global.php';
	
	//Define autoloader
	function __autoload($className) {
			require_once 'lib/'.$className . '.class.php';
	}
	
	class synfm extends api_handler {
		protected $_api_data;
		
		public $album, $artist, $auth, $event, $geo, $group, $library, $playlist, $radio, $tag, $tasteometer, $track, $user, $venue;
		
		function __construct($api_key, $user = "", $password = "") {
			$this->_api_data = array();
			
			// general purpose parameters
			$this->_api_data['api_key'] = $api_key;
			$this->_api_data['user'] = $user;
			$this->_api_data['password'] = $password;
			
			
			// Load the subclasses, little junky code but unfortunately neccessary
			$this->album 		= new album($this->_api_data);
			$this->artist 		= new artist($this->_api_data);
			$this->auth 		= new auth($this->_api_data);
			$this->event 		= new event($this->_api_data);
			$this->geo 		= new geo($this->_api_data);
			$this->group 		= new group($this->_api_data);
			$this->library		= new library($this->_api_data);
			$this->playlist		= new playlist($this->_api_data);
			$this->radio		= new radio($this->_api_data);
			$this->tag		= new tag($this->_api_data);
			$this->tasteometer	= new tasteometer($this->_api_data);
			$this->track		= new track($this->_api_data);
			$this->user		= new user($this->_api_data);
			$this->venue		= new venue($this->_api_data);
		}
	}
?>
