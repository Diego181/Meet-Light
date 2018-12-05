<?php


class Application
{
    private $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function run($page)
    {
        $result=$this->router->navigate($page);
        echo $result;
    }
}
