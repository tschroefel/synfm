<?php
	/******************SynFM - yet another last.fm Framework*****************/
	/* Filename: api_handler.class.php
	/* Purpose: general api class, provides basic methods
	/* Created: 08.05.2010
	/*************************************************************************
	/* Bi-Licensed under GPLv2 and 
	/* Musicware License (send the authors a CD if you like this framework)
	/*************************************************************************
	/* my last.fm profile:
	/* nightraven: http://www.lastfm.de/user/Nightr4ven
	/************************************************************************/
	
	// Return a full url for querying the last.fm api

class api_handler {
	private $_tmp;

	// Return a query url for the api, basic url comes from the global config
	public function createQueryURL($params, $apikey) {
		// First part is the basic url that is set in the global config and then combine it with the parameters
		$fullurl  =	SYNFM_API_URL;
		$fullurl .= '?'.http_build_query($params);
				
		// Removing the nasty html entities ... as it happens last.fm doesn't like them
		$fullurl = html_entity_decode($fullurl);
		
		// Add the api key so you don't have to do that in every method
		$fullurl .= "&=".$apikey;
		return $fullurl;
	}
    
	// fetch the feed, option is for cdata capabilities
	private function request($feed, $option = FALSE) {
		$this->_tmp = ($option === FALSE) ? simplexml_load_file($feed) : simplexml_load_file($feed, 'SimpleXMLElement', $option);
	}
	
	// get a specific element of the feed
	public function api_get_element($feed, $tree) {
		$this->request($feed);
		$this->element = $this->_tmp;
		foreach ($tree as $value) {
			if (!$this->element = (is_array($this->element)) ? $this->element[$value] : $this->element->$value) return FALSE;
		}
		return $this->element;
	}
	
	// Return the whole api result "as is"
	public function api_request($query_url) {
		$this->request($query_url);
		return $this->_tmp;
	}
	
	// Little helper method for generating the array that is used to query the api	
	public function setArray($index, $value ,&$base) {
		if($value != "" && $value != false) {
			$base[$index] = $value;
		}
	}
}
?>
