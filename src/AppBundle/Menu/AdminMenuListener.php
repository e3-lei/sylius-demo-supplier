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
            ->setLabel('app.menu.admin.extra.main')
        ;

        $newSubmenu
            ->addChild('supplier', ['route' => 'app_admin_supplier_index'])
            ->setLabel('app.menu.admin.extra.supplier')
            ->setLabelAttribute('icon', 'star')
        ;
    }
}