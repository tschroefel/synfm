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

		function addTags($track, $artist, $tags) {
			throw new Exception('Not yet implemented');
		}
		
		function ban($track, $artist) {
			throw new Exception('Not yet implemented');
		}
		
		function getBuylinks($artist = false, $track = false, $mbid = false, $country = false) {
			$params = array();
			parent::setArray('method', 'track.getbuylinks', $params);
			parent::setArray('artist', $artist, $params);
			parent::setArray('track', $track, $params);
			parent::setArray('mbid', $mbid, $params);
			parent::setArray('country', $country, $params);
			$tmp = parent::api_request(parent::createQueryURL($params, $this->_api_key));
			
			return $tmp;
		}
		
		function getFingerprintMetadata($fingerprintid) {
			$params = array();
			parent::setArray('method', 'track.getfingerprintmetadata', $params);
			parent::setArray('fingerprintid', $fingerprintid, $params);
			$tmp = parent::api_request(parent::createQueryURL($params, $this->_api_key));
			
			return $tmp;
		}
		
		function getInfo($artist = false, $track = false, $mbid = false, $username = false) {
			$params = array();
			parent::setArray('method', 'track.getinfo', $params);
			parent::setArray('artist', $artist, $params);
			parent::setArray('track', $track, $params);
			parent::setArray('mbid', $mbid, $params);
			parent::setArray('username', $username, $params);
			$tmp = parent::api_request(parent::createQueryURL($params, $this->_api_key));
			
			return $tmp;
		}
		
		function getSimilar($track = false, $artist = false, $mbid = false) {
			$params = array();
			parent::setArray('method, 'track.getsimilar', $params);
			parent::setArray('track, $track, $params);
			parent::setArray('artist', $artist, $params);
			parent::setArray('mbid', $mbid, $params);
			$tmp = parent::api_request(parent::createQueryURL($params, $this->_api_key));
			
			return $tmp;
		}
		
		function getTags($artist, $track) {
			throw new Exception('Not yet implemented');
		}
		
		function getTopFans($track = false, $artist = false, $mbid = false) {
			$params = array();
			parent::setArray('method', 'track.gettopfans', $params);
			parent::setArray('track', $track, $params);
			parent::setArray('artist', $artist, $params);
			parent::setArray('mbid', $mbid, $params);
			$tmp = parent::api_request(parent::createQueryURL($params, $this->_api_key));
			
			return $tmp;
		}
		
		function getTopTags($track = false, $artist = false, $mbid = false) {
			$params = array();
			parent::setArray('method', 'track.gettoptags', $params);
			parent::setArray('track', $track, $params);
			parent::setArray('artist', $artist, $params);
			parent::setArray('mbid', $mbid, $params);
			$tmp = parent::api_request(parent::createQueryURL($params, $this->_api_key));
			
			return $tmp;
		}
		
		function love($track, $artist) {
			throw new Exception('Not yet implemented');
		}
		
		function removeTag($artist, $track, $tag) {
			throw new Exception('Not yet implemented');
		}
		
		function search($track, $artist = false, $limit = false, $page = false) {
			$params = array();
			parent::setArray('method', 'track.search', $params);
			parent::setArray('track', $track, $params);
			parent::setArray('artist, $artist, $params);
			parent::setArray('limit', $limit, $params);
			parent::setArray('page', $page, $params);
			$tmp = parent::api_request(parent::createQueryURL($params, $this->_api_key));
			
			return $tmp;
		}
		
		function share($artist, $track, $recipient, $pub = false, $message = false) {
			throw new Exception('Not yet implemented');			
		}
	}
?>
