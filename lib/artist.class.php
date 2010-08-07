<?php
	/******************SynFM - yet another last.fm Framework*****************/
	/* Filename: artist.class.php
	/* Purpose: provides access to the artist capabilities
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
                        parent::setArray('api_key', $this->_api_key, $params);
			$tmp = parent::api_request(parent::createQueryURL($params));
			
			return $tmp;
		}
		
		function getImages($artist, $page = false, $limit = false, $order = false) {
			$params = array();
			parent::setArray('method', 'artist.getimages', $params);
			parent::setArray('artist', $artist, $params);
			parent::setArray('page', $page, $params);
			parent::setArray('limit', $limit, $params);
			parent::setArray('order', $order, $params);
                        parent::setArray('api_key', $this->_api_key, $params);
                        $tmp = parent::api_request(parent::createQueryURL($params));
                        
                        return $tmp;
		}
		
		function getInfo($artist = false, $mbid = false, $username = false, $lang = false) {
			$params = array(); 
			parent::setArray('method' 'artist.getinfo', $params);
			parent::setArray('artist', $artist, $params);
			parent::setArray('mbid', $mbid, $params);
			parent::setArray('username', $username, $params);
			parent::setArray('lang', $lang, $params);
			parent::setArray('api_key', $this->_api_key, $params);
			$tmp = parent::api_request(parent::createQueryURL($params));
			
			return $tmp;
	}
?>
