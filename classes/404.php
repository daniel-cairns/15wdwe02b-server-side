<?php 

// HomePage class using the page class to biuild
class DefaultPage extends Page {
	
	public function contentHTML() {

		// Show the homepage content
		include 'templates/404.php';
		
	}
}