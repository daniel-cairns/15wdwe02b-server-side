<?php 

// Class for the AboutPage based on the Page class
class AboutPage extends Page {

	// Method to show the About Us page content
	public function contentHTML() {

		// Show the About Us content
		include 'templates/about/about.php';

	}
}