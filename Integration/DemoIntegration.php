<?php


namespace MauticPlugin\MauticDemoBundle\Integration;


use Mautic\PluginBundle\Integration\AbstractIntegration;

class DemoIntegration extends AbstractIntegration
{
    public function getName()
    {
        return "Demo";
    }

    public function getAuthenticationType()
    {
        return "none";
    }
}