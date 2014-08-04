<?php namespace Comodojo\Dispatcher\Service;

use \Comodojo\Dispatcher\Template\TemplateBootstrap;

class landing extends Service {

    public function setup() {

        $this->setContentType("text/html");

    }

    public function get() {

        $template = new TemplateBootstrap("navbar");

        if ( DISPATCHER_USE_REWRITE ) {

            $test_link  = DISPATCHER_BASEURL.'test/';

            $about_link = DISPATCHER_BASEURL.'about/';

        } else {

            $test_link  = DISPATCHER_BASEURL.'?service=test';

            $about_link = DISPATCHER_BASEURL.'?service=about';

        }

        $content = '
            <div class="jumbotron">
                <h1>Welcome to Comodojo dispatcher</h1>
                <p>This is a default landing page (provided by dispatcher.servicebundle.default).</p>
                <p>To jump to test section use the fat button below or top navbar</p>
                <p>
                    <a class="btn btn-lg btn-primary" href="'.$test_link.'" role="button">Begin tests</a>
                </p>
            </div>';

        $template->setTitle("Comodojo dispatcher")->setBrand("comodojo::dispatcher");

        $template->addMenu("right")
                 ->addMenuItem("Test", $test_link, "right")
                 ->addMenuItem("About", $about_link, "right");

        $template->setContent($content);

        return $template->serialize();

    }

}