<?php
/**
 * Created by PhpStorm.
 * User: d.kaltdorf
 * Date: 05.12.18
 * Time: 10:13
 */

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