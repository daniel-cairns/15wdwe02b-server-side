<?php

// Class for the contact page bassed on the Page Class
class ContactPage extends Page {

	// Method to show the Contact page
	public function contentHTML() {

		// SHow the contact page content
		include 'templates/contact/contact.php';
	}
}