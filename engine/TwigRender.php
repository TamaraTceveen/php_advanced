<?php

namespace app\engine;

use app\interfaces\IRenderer;

class TwigRender implements IRenderer
{
    protected $twig;

    public function __construct($loader = null, $twig = null)
    {
        $loader = new \Twig\Loader\FilesystemLoader('../twigtemplates/');
        
        $this->twig = new \Twig\Environment($loader);
        
    }

    public function renderTemplate($template, $params = []) {
        
        $templatePath = $template . '.twig';
        
        return $this->twig->render($templatePath, $params);
    }
}