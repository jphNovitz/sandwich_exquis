<?php

namespace App\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class MenuBuilder
{
    private $factory;

    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(array $options): ItemInterface
    {
        $menu = $this->factory->createItem('root'/*, [
            'childrenAttributes'    =>[
                'class' => 'w-12 flex  flex-col md:flex-row bg-green-500'
            ]
        ]*/);

        $menu->addChild('Homejkljjk', ['route' => 'app_web_home']);
        $menu->addChild('Homekjkljkl', ['route' => 'app_web_home']);
        $menu->addChild('Homesq', ['route' => 'app_web_home']);
        $menu->addChild('HomeSq', ['route' => 'app_web_home']);
       $menu->setAttributes(['class' => 'hidden']);
        return $menu;
    }
}