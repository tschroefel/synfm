<?php
	/******************SynFM - yet another last.fm Framework*****************/
	/* Filename: venue.class.php
	/* Purpose: provides access to the venue capabilities
	/* Created: 13.05.2010
	/*************************************************************************
	/* Bi-Licensed under GPLv2 and 
	/* Musicware License (send the authors a CD if you like this framework)
	/*************************************************************************
	/* our last.fm profiles:
	/* crushmaster: http://www.lastfm.de/user/crushhamster (Vinyl preferred)
	/* nightraven: http://www.lastfm.de/user/Nightr4ven
	/************************************************************************/
	
	require_once 'api_handler.class.php';
	
	class venue extends api_handler {
		private $_api_key;
		private $_username;
		private $_password;
		
		function __construct($api_data) {
			$this->_api_key = $api_data['api_key'];
			$this->_username = $api_data['user'];
			$this->_password = $api_data['password'];
		}
		
		function getEvents($venue) {
			$params = array();
			parent::setArray('method', 'venue.getevents', $params);
			parent::setArray('venue', $venue, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getPastEvents($venue, $page = false, $limit = false) {
			$params = array();
			parent::setArray('method', 'venue.getpastevents', $params);
			parent::setArray('venue', $venue, $params);
			parent::setArray('page', $page, $params);
			parent::setArray('limit', $limit, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function search($venue, $page = false, $limit = false, $country = false) {
			$params = array();
			parent::setArray('method', 'venue.search', $params);
			parent::setArray('venue', $venue, $params);
			parent::setArray('page', $page, $params);
			parent::setArray('limit', $limit, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
	}
?>
