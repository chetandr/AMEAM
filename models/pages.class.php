<?php
/**
 * This model class that retrivies the information on pages.
 *
 * @author Chetan Rane <chetan_rane@persistent.co.in>
 * @name Pages
 * @dateCreated 6/19/2014
 * @dateUpdated 6/19/2014
 * @version 1.0
 *
 * Change Set :
 * 		Version 1.0  : Creating a new class to render a page.
 *
 */

class Pages{
	
	/**
	 * Function to return tha HTMl content of a given Page
	 *
	 * @author Chetan Rane <chetan_rane@persistent.co.in>
	 * @name getPageData
	 * @param array
	 * 			("slug"=>slug,"id"=>id,"type"=>"Merchant/Layout")
	 * 
	 * @return HTML
	 */
	
	function getPageData($slug) {
		// Get the details of the page sections and weidgets from the database.
		// Assign the contents to the template.
		// Return the content of the template
	}
}