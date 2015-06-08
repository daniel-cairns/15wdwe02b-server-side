<?php 

class Page {

		// Properties
		public $title;
		public $metaDescription;
		public $language;
		public $characterSet;

		// COnstructor
		public function __construct( $title, $metaDescription, $language='en', $characterSet='utf-8') {

			// save the variable values into the propertiews above
			$this->title 			= $title;
			$this->metaDescription 	= $metaDescription;
			$this->language 		= $language;
			$this->characterSet 	= $characterSet;
		
		}

		// Build the header HTML
		public function headerHTML() {

			// Include the header.php file
			include 'templates/header.php';

		}

		// Build the footer HTML
		public function footerHTML() {

			// Include the footer.php file
			include 'templates/footer.php';
		}
}