<?php

namespace AppBundle\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{

    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $newSubmenu = $menu
            ->addChild('extra')
            ->setLabel('Custom Admin Submenu')
        ;

        $newSubmenu
            ->addChild('Supplier', ['route' => 'app_admin_supplier_index'])
            ->setLabel('Supplier')
            ->setLabelAttribute('icon', 'star')
        ;
    }
}