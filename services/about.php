<?php namespace Comodojo\Dispatcher\Service;

use \Comodojo\Dispatcher\Template\TemplateBootstrap;

class about extends Service {

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

        $template->setTitle("Comodojo dispatcher")->setBrand("comodojo::dispatcher");

        $template->addMenu("right")
                 ->addMenuItem("Test", $test_link, "right")
                 ->addMenuItem("About", $about_link, "right");

        $content = '<div class="container"><h1>Comodojo dispatcher</h1><h3 class="text-muted">service-oriented REST microframework</span></h3>';

        $content .= '<p style="margin: 40px; text-align: center">
                <a href="https://docs.comodojo.org/projects/dispatcherframework" target="_blank" class="btn btn-lg btn-success" style="margin-top:40px;" role="button"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;Read documentation</a>&nbsp;&nbsp;
                <a href="https://api.comodojo.org/dispatcher/" target="_blank" class="btn btn-lg btn-primary" style="margin-top:40px;" role="button"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;Explore API</a>&nbsp;&nbsp;
                <a href="https://github.com/comodojo/dispatcher.framework" target="_blank" class="btn btn-lg btn-danger" style="margin-top:40px;" role="button"><span class="glyphicon glyphicon-new-window"></span>&nbsp;&nbsp;Fork on GitHub</a>
            </p>';

        $content .= '<section style="margin-top:60px;" class="jumbotron">
                    <div class="section-inner">
                        <p>Comodojo dispatcher is distributed under the terms of the GNU V3 General Public License as published by the Free Software Foundation; you can find a copy in each package released or following <a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">this link</a>.</p>
                        <address>
                            Keep in touch: <a href="mailto:#">info@comodojo.org</a><br />
                        </address>
                    </div>
                </section>
            </div>';

        $template->setContent($content);

        return $template->serialize();

    }

}
