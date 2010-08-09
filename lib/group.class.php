<?php
	/******************SynFM - yet another last.fm Framework*****************/
	/* Filename: groups.class.php
	/* Purpose: provides access to the groups capabilities
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
	
	class group extends api_handler {		
		private $_api_key;
		private $_username;
		private $_password;
	
		function __construct($api_data) {
			$this->_api_key = $api_data['api_key'];
			$this->_username = $api_data['username'];
			$this->_password = $api_data['password'];
		}
		
		function getHype($group) {
			$params = array();
			parent::setArray('method', 'group.gethype', $params);
			parent::setArray('group', $group, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getMembers($group) {
			$params = array();
			parent::setArray('method', 'group.getmembers', $params);
			parent::setArray('group', $group, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getWeeklyAlbumChart($group, $from = false, $to = false) {
			$params = array();
			parent::setArray('method', 'group.getweeklyalbumchart', $params);
			parent::setArray('group', $group, $params);
			parent::setArray('from', $from, $params);
			parent::setArray('to', $to, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getWeeklyArtistChart($group, $from = false, $to = false) {
			$params = array();
			parent::setArray('method', 'group.getweeklyartistchart', $params);
			parent::setArray('group', $group, $params);
			parent::setArray('from', $from, $params);
			parent::setArray('to', $to, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getWeeklyChartList($group) {
			$params = array();
			parent::setArray('method, 'group.getweeklychartlist', $params);
			parent::setArray('group', $group, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getWeeklyTrackChart($group, $from = false, $to = false) {
			$params = array();
			parent::setArray('method', 'group.getweeklytrackchart', $params);
			parent::setArray('group', $group, $params);
			parent::setArray('from', $from, $params);
			parent::setArray('to', $to, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
		}
		
		// Coded after eating some great noodles!
	}
?>
