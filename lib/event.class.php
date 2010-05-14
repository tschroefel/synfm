<?php
	/******************SynFM - yet another last.fm Framework*****************/
	/* Filename: event.class.php
	/* Purpose: provides access to the event capabilities
	/* Created: 13.05.2010
	/*************************************************************************
	/* Bi-Licensed under GPLv2 and 
	/* Musicware License (send the authors a CD if you like this framework)
	/*************************************************************************
	/* our last.fm profiles:
	/* crushmaster: http://www.lastfm.de/user/crushhamster (Vinyl preferred)
	/* nightraven: http://www.lastfm.de/user/Nightr4ven
	/************************************************************************/
	
	class event {
		protected $_synfm;
		
		function __construct($synfm) {
			$this->_synfm = $synfm;
		}
	}
?>