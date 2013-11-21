<?php
	/******************SynFM - yet another last.fm Framework*****************/
	/* Filename: album.class.php
	/* Purpose: provides access to the album capabilities
	/* Created: 13.05.2010
	/*************************************************************************
	/* Bi-Licensed under GPLv2 and 
	/* Musicware License (send the authors a CD if you like this framework)
	/*************************************************************************
	/* my last.fm profile:
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
			parent::setArray('method', 'album.getbuylinks', $params);
			parent::setArray('artist', $artist, $params);
			parent::setArray('album', $album, $params);
			parent::setArray('mbid', $mbid, $params);
			parent::setArray('country', $country, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}

		function getInfo($artist = false, $album = false, $mbid = false, $username = false, $lang = false) {
			$params = array();
			parent::setArray('method', 'album.getinfo', $params);
			parent::setArray('artist', $artist, $params);
			parent::setArray('album', $album, $params);
			parent::setArray('mbid', $mbid, $params);
			parent::setArray('username', $this->_username, $params);
			parent::setArray('lang', $lang, $params);
			parent::setArray('mbid', $mbid, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}

		function getTags() {
			throw new Exception('Not yet implemented');
		}
		
		function removeTag() {
			throw new Exception('Not yet implemented');
		}
		
		function search($limit = false, $page = false, $album) {
			$params = array();
			parent::setArray('method', 'album.search', $params);
			parent::setArray('album', $album, $params);
			parent::setArray('limit', $limit, $params);
			parent::setArray('page', $page, $params);
			$url = parent::createQueryURL($params, $this->_api_key);
			$tmp = parent::api_request($url);
			
			return $tmp;
		}
		
		function share() {
			throw new Exception('Not yet implemented');
		}
	}
?>
