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
	
	class album {
		protected $_synfm;
		protected $_api_key;
		protected $_user;
		protected $_tmp_url;
		
		function __construct($synfm) {
			$this->_synfm = $synfm;
		}
		
		function addTags ($artist, $album, $tags) {
			
		}
		
		function getBuylinks ($artist, $album, $mbid, $country) {
				$this->_tmp_url = $this->_synfm->createQueryURL();
		}
	}
?>