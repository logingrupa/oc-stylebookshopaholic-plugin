<?php namespace Logingrupa\StylebookShopaholic\Classes\Event;

use Backend;

/**
 * Class BackendMenuHandler
 * @package Logingrupa\StylebookShopaholic\Classes\Event
 */
class BackendMenuHandler
{
    /**
     * Add listeners
     * @param \Illuminate\Events\Dispatcher $obEvent
     */
    public function subscribe($obEvent)
    {
        $obEvent->listen('backend.menu.extendItems', function ($obManager) {
            $this->addMenuItems($obManager);
        });
    }

    /**
     *      * Add menu items
     * @param \Backend\Classes\NavigationManager $obManager
     */
    public function addMenuItems($obManager)
    {
        $obManager->addSideMenuItems('Lovata.Shopaholic', 'shopaholic-menu-main', [
            'shopaholic-menu-stylebook' => [
                'label' => 'Design ideas',
                'url' => Backend::url('logingrupa/stylebookshopaholic/ideas'),
                'icon' => 'icon-folder-open',
                'permissions' => ['stylebookshopaholic-menu-stylebook'],
                'order' => 150,
            ],
        ]);
    }
}
