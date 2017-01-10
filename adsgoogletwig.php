<?php
namespace Grav\Plugin;
use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;
class GalleryPlugin extends Plugin
{
    public static function getSubscribedEvents()
    {
        return [
            'onTwigExtensions' => ['onTwigExtensions', 0]
        ];
    }
    /**
     * Initialize the plugin
     */
    public function onTwigExtensions()
    {
        require_once(__DIR__ . '/adsgoogletwigext.php');
        $this->grav['twig']->twig->addExtension(new adsgoogletwig()); 
    }
}
