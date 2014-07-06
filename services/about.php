<?php namespace comodojo\Dispatcher\Service;

use \comodojo\Dispatcher\Template\TemplateBootstrap;

class about extends service {
	
	public function setup() {

		$this->setContentType("text/html");

	}

	public function get() {

		$template = new TemplateBootstrap("navbar");

		$template->setTitle("Comodojo dispatcher")->setBrand("comodojo/dispatcher");

		$template->addMenuItem("Test", DISPATCHER_BASEURL."test/");

		$template->addMenuItem("About", DISPATCHER_BASEURL."about/", "right");

		$template->setContent("<h1>About Content Here</h1>");

		return $template->serialize();

	}

}

?>