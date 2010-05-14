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

	include 'lib/cachinghandler.class.php';
	include 'config/global.php';
	
	//Define autoloader
	function __autoload($className) {
		//if (file_exists('lib/'.$className . '.class.php')) {
			require_once 'lib/'.$className . '.class.php';
		//}
	}
	
	class synfm {
		protected $_api_key;
		protected $_user;
		protected $_password;
		
		function __construct($api_key, $user, $password) {
			$this->_api_key = $api_key;
			$this->_user = $user;
			$this->_password = $password;
			
			// Load the subclasses, little junky code but neccessary
			$album 		= new album($this);
			$artist 	= new artist($this);
			$auth 		= new auth($this);
			$event 		= new event($this);
			$geo 		= new geo($this);
			$group 		= new group($this);
			$library	= new library($this);
			$playlist	= new playlist($this);
			$radio		= new radio($this);
			$tag		= new tag($this);
			$tasteometer= new tasteometer($this);
			$track		= new track($this);
			$user		= new user($this);
			$venue		= new venue($this);
		}
		
		// Return a full url for querying the last.fm api
		function createQueryURL($method, $params) {
			$fullurl = SYNFM_API_URL + http_build_query($params);
			return $fullurl;
		}
        
        function feed($feed, $option = FALSE) {
                $this->feed = ($option === FALSE) ? simplexml_load_file($feed) : simplexml_load_file($feed, 'SimpleXMLElement', $option);
        }

        function api_request($tree) {
                $this->element = $this->feed;
                foreach ($tree as $value) {
                        if (!$this->element = (is_array($this->element)) ? $this->element[$value] : $this->element->$value) return FALSE;
                }
                return $this->element;
        }
	}
?>