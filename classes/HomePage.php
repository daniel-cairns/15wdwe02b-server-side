<?php 

// HomePage class using the page class to biuild
class HomePage extends Page {
	
	public function contentHTML() {

		// Show the homepage content
		include 'templates/home/homepage.php';
		
	}
}
