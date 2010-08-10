<?php
	/******************SynFM - yet another last.fm Framework*****************/
	/* Filename: geo.class.php
	/* Purpose: provides access to the geo capabilities
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
        
        class geo extends api_handler {
        	private $_api_key;
        	private $_username;
        	private $_password;

		function __construct($api_data) {
			$this->_api_key = $api_data['api_key'];	
			$this->_username = $api_data['user'];
			$this->_password = $api_data['password'];
		}
		
		function getTopTracks($country, $location = false) {
			$params = array();
			parent::setArray('method', 'geo.gettoptracks', $params);
			parent::setArray('country', $country, $params);
			parent::setArray('location', $location, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getTopArtists($country) {
			$params = array();
			parent::setArray('method', 'geo.gettopartists', $params);
			parent::setArray('country', $country, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;			
		}
		
		function getMetros($country = false) {
			$params = array();
			parent::setArray('method', 'geo.getmetros', $params);
			parent::setArray('country', $country, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getMetroWeeklyChartlist() {
			$params = array();
			parent::setArray('method', 'geo.getmetroweeklychartlist', $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getMetroUniqueTrackChart($country, $metro, $start = false, $end = false) {
			$params = array();
			parent::setArray('method', 'geo.getmetrouniquetrackchart', $params);
			parent::setArray('country', $country, $params);
			parent::setArray('metro', $metro, $params);
			parent::setArray('start', $start, $params);
			parent::setArray('end', $end, $params);
			$url = createQueryURL($params, $this->_api_key);
			$tmp = api_request($url);
			
			return $tmp;
		}
		
		function getMetroUniqueArtistChart($country, $metro, $start = false, $end = false) {
			$params = array();
			parent::setArray('method', 'geo.getmetrouniqueartistchart', $params);
			parent::setArray('country', $country, $params);
			parent::setArray('metro', $metro, $params);
			parent::setArray('start', $start, $params);
			parent::setArray('end', $end, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = api_request($url);
			
			return $tmp;
		}
		
		function getMetroTrackChart($country, $metro, $start = false, $end = false) {
			$params = array();
			parent::setArray('method', 'geo.getmetrotrackchart', $params);
			parent::setArray('country', $country, $params);
			parent::setArray('metro', $metro, $params);
			parent::setArray('start', $start. $params);
			parent::setArray('end', $end, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getMetroTrackChart($country, $metro, $start = false, $end = false) {
			$params = array();
			parent::setArray('method', 'geo.getMetroHypeTrackChart', $params);
			parent::setArray('country', $country, $params);
			parent::setArray('metro', $metro, $params);
			parent::setArray('start', $start. $params);
			parent::setArray('end', $end, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}

		function getMetroTrackChart($country, $metro, $start = false, $end = false) {
			$params = array();
			parent::setArray('method', 'geo.getMetroHypeArtistChart', $params);
			parent::setArray('country', $country, $params);
			parent::setArray('metro', $metro, $params);
			parent::setArray('start', $start. $params);
			parent::setArray('end', $end, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getMetroTrackChart($country, $metro, $start = false, $end = false) {
			$params = array();
			parent::setArray('method', 'geo.getMetroArtistChart', $params);
			parent::setArray('country', $country, $params);
			parent::setArray('metro', $metro, $params);
			parent::setArray('start', $start. $params);
			parent::setArray('end', $end, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getEvents($location = false, $lat = false, $long = false, $page = false) {
			$params = array();
			parent::setArray('method', 'geo.getevents', $params);
			parent::setArray('location', $location, $params);
			parent::setArray('lat', $lat, $params);
			parent::setArray('long', $long, $params);
			parent::setArray('page', $page, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
	}
?>
