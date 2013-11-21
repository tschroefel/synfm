<?php
	/******************SynFM - yet another last.fm Framework*****************/
	/* Filename: artist.class.php
	/* Purpose: provides access to the artist capabilities
	/* Created: 13.05.2010
	/*************************************************************************
	/* Bi-Licensed under GPLv2 and 
	/* Musicware License (send the authors a CD if you like this framework)
	/*************************************************************************
	/* my last.fm profile:
	/* nightraven: http://www.lastfm.de/user/Nightr4ven
	/************************************************************************/

	require_once 'api_handler.class.php';	

	class artist extends api_handler {
		private $_api_key;
		private $_username;
		private $_passwort;
		
		function __construct($api_data) {
			$this->_api_key = $api_data['api_key'];
			$this->_username = $api_data['user'];
			$this->_password = $api_data['password'];
		}
		
		function addTags($artist, $tags) {
			throw new Exeption('Not yet implemented');
		}
		
		function getEvents($artist) {
			$params = array();
			parent::setArray('method', 'artist.getevents', $params);
			parent::setArray('artist', $artist, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getImages($artist, $page = false, $limit = false, $order = false) {
			$params = array();
			parent::setArray('method', 'artist.getimages', $params);
			parent::setArray('artist', $artist, $params);
			parent::setArray('page', $page, $params);
			parent::setArray('limit', $limit, $params);
			parent::setArray('order', $order, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);

			return $tmp;
		}
		
		function getInfo($artist = false, $mbid = false, $username = false, $lang = false) {
			$params = array(); 
			parent::setArray('method' 'artist.getinfo', $params);
			parent::setArray('artist', $artist, $params);
			parent::setArray('mbid', $mbid, $params);
			parent::setArray('username', $username, $params);
			parent::setArray('lang', $lang, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}	
	
		function getPastEvents($artist, $page = false, $limit = false) {
			$params = array();
			parent::setArray('method', 'artist.getpastevents', $params);
			parent::setArray('artist' $artist, $params);
			parent::setArray('page', $page, $params;
			parent::setArray('limit', $limit, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getPodcast($artist) {
			$params = array();
			parent::setArray('method', 'artist.getpodcast', $params);
			parent::setArray('artist', $artist, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;		
		}
		
		function getShouts($artist, $limit = false, $page = false) {
			$params = array();
			parent::setArray('method', 'artist.getshouts', $params);
			parent::setArray('artist', $artist, $params);
			parent::setArray('limit', $limit, $params);
			parent::setArray('page', $page, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getSimilar($artist, $limit = false) {
			$params = array();
			parent::setArray('method', 'artist.getsimilar', $params);
			parent::setArray('artist', $artist, $params);
			parent::setArray('limit', $limit, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;	
		}
		
		function getTags($artist) {
			throw new Exeption('Not yet implemented');
		}
		
		function getTopAlbums($artist) {
			$params = array();
			parent::setArray('method', 'artist.gettopalbums', $params);
			parent::setArray('artist', $artist, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}

		function getTopFans($artist) {
			$params = array();
			parent::setArray('method', 'artist.gettopfans', $params); 
			parent::setArray('artist', $artist, $params); $tmp = 
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);

			return $tmp;
		}
		
		function getTopTags($artist) {
			$params = array(); 
			parent::setArray('method', 'artist.gettoptags', $params);
			parent::setArray('artist', $artist, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function getTopTracks($artist) {
			$params = array();
			parent::setArray('method', 'artist.gettoptracks', $params);
			parent::setArray('artist', $artist, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function removeTag($artist, $tag) {
			throw new Exeption('Not yet implemented');
		}
		
		function search($artist, $limit = false, $page = false) {
			$params = array();
			parent::setArray('method', 'artist.search', $params);
			parent::setArray('limit', $limit, $params);
			parent::setArray('page', $page, $params);
			$tmp = parent::api_request(parent::createQueryURL($params, $this->_api_request);
			
			return $tmp;
		}
		
		function share($artist, $recipient, $message = false, $pub = false) {
			throw new Exeption('Not yet implemented');
		}
		
		function shout($artist, $message) {
			throw new Exeption('Not yet implemented');
		}
	}
?>
