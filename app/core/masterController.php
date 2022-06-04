<?php

namespace Core;

class masterController
{
    private $view;
    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader(PATH . DS . 'view/');
        $this->view = new \Twig\Environment($loader, [
            'cache' => PATH . DS . 'view/cache',
        ]);
        $this->view->addGlobal('URI',URI);
    }

    public function render(string $file, array $data = [])
    {
        return $this->view->render($file, $data);
    }
}
