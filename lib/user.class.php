<?php
	/******************SynFM - yet another last.fm Framework*****************/
	/* Filename: user.class.php
	/* Purpose: provides access to the user capabilities
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
	
	class album extends api_handler {
		private $_api_key;
		private $_username;
		private $_password;

		function __construct($api_data) {
			$this->_api_key = $api_data['api_key'];
			$this->_username = $api_data['user'];
			$this->_password = $api_data['password'];
		}

		function getArtistTracks($user, $artist, $startTimestamp = false, $endTimestamp = false, $page = false) {
			$params = array();
			parent::setArray('method', 'user.getartisttracks', $params);
			parent::setArray('user', $user, $params);
			parent::setArray('artist', $artist, $params);
			parent::setArray('startTimestamp', $startTimestamp, $params);
			parent::setArray('endTimestamp', $endTimestamp, $params);
			parent::setArray('page', $page, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getEvents($user) {
			$params = array();
			parent::setArray('method', 'user.getevents', $params);
			parent::setArray('user', $user, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getFriends($user, $recenttracks = false, $limit = false, $page = false) {
			$params = array();
			parent::setArray('method', 'user.getfriends', $params);
			parent::setArray('user', $user, $params);
			parent::setArray('recenttracks', $recenttracks, $params);
			parent::setArray('limit', $limit, $params);
			parent::setArray('page', $page, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getInfo() {
			$params = array();
			parent::setArray('method', 'user.getinfo', $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getLovedTracks($user, $limit = false, $page = false) {
			$params = array();
			parent::setArray('method', 'user.getlovedtracks', $params);
			parent::setArray('user', $user, $params);
			parent::setArray('limit', $limit, $params);
			parent::setArray('page', $page, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getNeighbours($user, $limit = false) {
			$params = array();
			parent::setArray('method', 'user.getneighbours', $params);
			parent::setArray('user', $user, $params);
			parent::setArray('limit', $limit, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getPastEvents($user, $page = false, $limit = false) {
			$params = array();
			parent::setArray('method', 'user.getpastevents', $params);
			parent::setArray('user', $user, $params);
			parent::setArray('page', $page, $params);
			parent::setArray('limit', $limit, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getPlaylists($user) {
			$params = array();
			parent::setArray('method', 'user.getplaylists', $params);
			parent::setArray('user', $user, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getRecentStations($user, $limit = false, $page = false) {
			throw new Exceptions('Not yet implemented');
		}
		
		function getRecentTracks($user, $limit = false, $page = false) {
			$params = array();
			parent::setArray('method', 'user.getrecenttracks', $params);
			parent::setArray('user', $user, $params);
			parent::setArray('limit', $limit, $params);
			parent::setArray('page', $page, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getRecommendedArtists() {
			throw new Exception('Not yet implemented');
		}
		
		function getRecommendedEvents($page = false, $limit = false) {
			throw new Exception('Not yet implemented');
		}
		
		function getShouts($user) {
			$params = array();
			parent::setArray('method', 'user.getshouts', $params);
			parent::setArray('user', $user, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getTopAlbums($user, $period = false) {
			$params = array();
			parent::setArray('method', 'user.gettopalbums', $params);
			parent::setArray('user', $user, $params);
			parent::setArray('period', $period, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getTopArtists($user, $period = false) {
			$params = array();
			parent::setArray('method', 'user.gettopartists', $params);
			parent::setArray('user', $user, $params);
			parent::setArray('period', $period, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getTopTags($user, $limit = false) {
			$params = array();
			parent::setArray('method', 'user.gettoptags', $params);
			parent::setArray('user', $user, $params);
			parent::setArray('limit', $limit, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getTopTracks($user, $period = false) {
			$params = array();
			parent::setArray('method', 'user.gettoptracks', $params);
			parent::setArray('user', $user, $params);
			parent::setArray('period', $period, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getWeeklyAlbumChart($user, $from = false, $to = false) {
			$params = array();
			parent::setArray('method', 'user.getweeklyablumchart', $params);
			parent::setArray('user', $user, $params);
			parent::setArray('from', $from, $params);
			parent::setArray('to', $to, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getWeeklyArtistChart($user, $from = false, $to = false) {
			$params = array();
			parent::setArray('method', 'user.getweeklyartistchart', $params);
			parent::setArray('user', $user, $params);
			parent::setArray('from', $from, $params);
			parent::setArray('to', $to, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getWeeklyChartList($user) {
			$params = array();
			parent::setArray('method', 'user.getweeklychartlist', $params);
			parent::setArray('user', $user, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getWeeklyTrackChart($user, $from = false, $to = false) {
			$params = array();
			parent::setArray('method', 'user.getweeklytrackchart', $params);
			parent::setArray('user', $user, $params);
			parent::setArray('from', $from, $params);
			parent:.setArray('to', $to, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function shout($user, $message) {
			throw new Exception('Not yet implemented');
		}
	}
?>
