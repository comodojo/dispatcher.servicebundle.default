<?php namespace Comodojo\Dispatcher\Service;

use \Comodojo\Dispatcher\Template\TemplateBootstrap;

class about extends Service {
    
    public function setup() {

        $this->setContentType("text/html");

    }

    public function get() {

        $template = new TemplateBootstrap("navbar");

        $template->setTitle("Comodojo dispatcher")->setBrand("comodojo/dispatcher");

        $template->addMenu("right")
                 ->addMenuItem("Test", DISPATCHER_BASEURL."test/", "right")
                 ->addMenuItem("About", DISPATCHER_BASEURL."about/", "right");

        $template->setContent("<h1>About Content Here</h1>");

        return $template->serialize();

    }

}