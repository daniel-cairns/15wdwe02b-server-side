<?php 
// Load the content for the page

// IF the user has not requested a "page in the $_GET array
if( isset( $_GET['page'] ) == false ) {
	// User has not requested a page, so then we want to load the home page
	$pageToLoad = 'home'; 
} else {
	// User has requested a page
	$pageToLoad = $_GET['page']; 
}

// Use the Page class to build the page to load
require 'classes/Page.php'; 
// Load the pages content 
switch ( $pageToLoad ) { 
	// Home page
	case 'home':
		require 'classes/HomePage.php';
		// Create an instance of the page class, for the sepecific case page
		$page = new HomePage( 'Home', 'Homepage for Cheap Deals for students.');
	break;

	// About Us Page
	case 'about';
		require 'classes/AboutPage.php';
		// Create an instance of the about page for this specific page case
		$page = new AboutPage( 'About Us', '');
	break;

	// Contact Us
	case 'contact';
		require 'classes/ContactPage.php';
		// Create an instance of the contact page for this specific page case
		$page = new ContactPage( 'Contact Us', '');
	break;	

	default:
		require 'classes/404.php';
		// Create an instance of the page class, for the sepecific case page
		$page = new DefaultPage( 'Nope, sorry', 'We cannot find the page you are looking for');
	break;	
}

$page->headerHTML();
$page->contentHTML();
$page->footerHTML();