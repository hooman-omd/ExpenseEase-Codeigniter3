<?php
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Twig
{
    protected $CI;
    protected $twig;

    public function __construct($params = [])
    {
        $this->CI =& get_instance();

        $loader = new FilesystemLoader(APPPATH . 'views');

        $this->twig = new Environment($loader, [
            'cache' => APPPATH . 'cache/twig',
            'debug' => true,
        ]);
    }

    public function render($template, $data = [])
    {
        echo $this->twig->render($template, $data);
    }
}
