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
		
		public $_album, $_artist, $_auth, $_event, $_geo, $_group, $_library, $_playlist, $_radio, $_tag, $_tasteometer, $_track, $_user, $_venue;
		
		function __construct($api_key, $user = "", $password = "") {
			$this->_api_data = array();
			
			$this->_api_data['api_key'] = $api_key;
			$this->_api_data['user'] = $user;
			$this->_api_data['password'] = $password;
			
			
			// Load the subclasses, little junky code but unfortunately neccessary
			$this->_album 		= new album($this->_api_data);
			$this->_artist 		= new artist($this->_api_data);
			$this->_auth 		= new auth($this->_api_data);
			$this->_event 		= new event($this->_api_data);
			$this->_geo 		= new geo($this->_api_data);
			$this->_group 		= new group($this->_api_data);
			$this->_library		= new library($this->_api_data);
			$this->_playlist	= new playlist($this->_api_data);
			$this->_radio		= new radio($this->_api_data);
			$this->_tag			= new tag($this->_api_data);
			$this->_tasteometer	= new tasteometer($this->_api_data);
			$this->_track		= new track($this->_api_data);
			$this->_user		= new user($this->_api_data);
			$this->_venue		= new venue($this->_api_data);
		}
	}
?>