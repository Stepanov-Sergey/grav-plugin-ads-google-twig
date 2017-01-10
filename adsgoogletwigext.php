<?php
namespace Grav\Plugin;
class GalleryTwigExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'GalleryTwigExtension';
    }
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('ads', [$this, 'adsgoogletwig'])
        ];
    }
    public function adsgoogletwig()
    {
        $test="TestAds";
        return  $str;
    }
}
?>
