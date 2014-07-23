<?php namespace Comodojo\Dispatcher\Service;

use \Comodojo\Dispatcher\Template\TemplateBootstrap;

class landing extends Service {

    public function setup() {

        $this->setContentType("text/html");

    }

    public function get() {

        $template = new TemplateBootstrap("navbar");

        $content = '
            <div class="jumbotron">
                <h1>Comodojo dispatcher</h1>
                <p>Welcome to dispatcher. This is a default landing page (part of dispatcher.servicebundle.default).</p>
                <p>To jump to test section use the button below or top navbar</p>
                <p>
                    <a class="btn btn-lg btn-primary" href="'.DISPATCHER_BASEURL.'test/" role="button">Begin tests</a>
                </p>
            </div>';

        $template->setTitle("Comodojo dispatcher")->setBrand("comodojo/dispatcher");

        $template->addMenuItem("Test", DISPATCHER_BASEURL."test/");

        $template->addMenuItem("About", DISPATCHER_BASEURL."about/", "right");

        $template->setContent($content);

        return $template->serialize();

    }

}