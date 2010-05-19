<?php
	/******************SynFM - yet another last.fm Framework*****************/
	/* Filename: album.class.php
	/* Purpose: provides access to the album capabilities
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

		function addTags($artist, $album, $tags) {
			throw new Exception('Not yet implemented');
		}

		function getBuylinks($artist = false, $album = false, $mbid = false, $country = false) {
			$params = array();
			$params['method'] = 'album.getbuylinks';
			if($artist != false) { $params['artist'] = $artist; }
			if($album != false) { $params['album']  = $album; }
			if($mbid != false) { $params['mbid'] = $mbid; }
			if($country != false) { $params['country'] = $country; }
			$params['api_key'] = $this->_api_key;
			
			$query_url = parent::createQueryURL($params);
			
			$tmp = parent::api_request($query_url);
			return $tmp;
		}

		function getInfo($artist = false, $album = false, $mbid = false, $username = false, $lang = false) {
			$params = array();
			$params['method'] = 'album.getinfo';
			if($artist != false) { $params['artist'] = $artist; }
			if($album != false) { $params['album']  = $album; }
			if($mbid != false) { $params['mbid'] = $mbid; }
			if($this->_username != "") { $params['username'] = $this->_username; }
			if($lang != false) { $params['lang'] = $lang; }
			$params['api_key'] = $this->_api_key;
			
			$query_url = parent::createQueryURL($params);
			
			$tmp = parent::api_request($query_url);
			return $tmp;
		}

		function getTags() {
			throw new Exception('Not yet implemented');
		}
		
		function removeTag() {
			throw new Exception('Not yet implemented');
		}
		
		function search($limit = false, $page = false, $album) {
			if($album == "") { throw new Exception('Missing arguments'); }
			
			$params = array();
			$params['method'] = 'album.search';
			$params['album']  = $album;
			if($limit != false) { $params['limit'] = $limit; }
			if($page != false) { $params['page'] = $page; }
			$params['api_key'] = $this->_api_key;
			
			$query_url = parent::createQueryURL($params);
			
			$tmp = parent::api_request($query_url);
			return $tmp;
		}
		
		function share() {
			throw new Exception('Not yet implemented');
		}
	}
?>