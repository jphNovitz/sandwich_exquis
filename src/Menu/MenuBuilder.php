<?php

namespace App\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class MenuBuilder
{
private $factory;

public function __construct(FactoryInterface $factory)
{
$this->factory = $factory;
}

public function createMainMenu(RequestStack $requestStack)
{
$menu = $this->factory->createItem('root');

$menu->addChild('Home', ['route' => 'app_web_home']);
// ... add more children

return $menu;
}
}