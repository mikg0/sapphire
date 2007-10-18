<?php

/**
 ** Contains heaps of tools that you can use when importing database information
 **/


class importer_Controller extends Page_Controller {

	// Generates the URLsegment for every page that doesn't have one.
	function FixURLS(){
		$pages= DataObject::get("Page");
		foreach($pages as $page){
			$page->write();
			Debug::show($page);
		}
	}
}


?>