<?php


namespace MauticPlugin\MauticDemoBundle\Controller;


use Mautic\CoreBundle\Controller\CommonController;

class DemoController extends CommonController
{
    public function indexAction(){
        return $this->delegateView(
            [
                'contentTemplate' => 'MauticDemoBundle:Demo:index.html.php',
                'viewParameters' => [
                    'heading' => 'Secured Page',
                    'body' => 'Hello From Secured Page'
                ]
            ]
        );
    }

    public function publicIndexAction(){
        return $this->delegateView(
            [
                'contentTemplate' => 'MauticDemoBundle:Demo:public_index.html.php',
                'viewParameters' => [
                    'heading' => 'Public Page',
                    'body' => 'Hello from Public Page'
                ]
            ]
        );
    }

}