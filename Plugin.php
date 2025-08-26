<?php namespace Logingrupa\StyleBookShopaholic;

use Event;
use System\Classes\PluginBase;

use Logingrupa\StyleBookShopaholic\Classes\Collection\IdeaCollection;
use Logingrupa\StyleBookShopaholic\Classes\Event\Idea\IdeaModelHandler;
use Logingrupa\StyleBookShopaholic\Classes\Event\BackendMenuHandler;


/**
 * Class Plugin
 * @package Logingrupa\StyleBookShopaholic
 */
class Plugin extends PluginBase
{
    /**
     * Plugin boot method
     */
    public function boot()
    {
        $this->addEventListener();
    }

    /**
     * Add event listeners
     */
    protected function addEventListener()
    {
        Event::subscribe(IdeaModelHandler::class);
        Event::subscribe(BackendMenuHandler::class);
    }

    /**
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Logingrupa\StyleBookShopaholic\Components\IdeaData' => 'IdeaData',
            'Logingrupa\StyleBookShopaholic\Components\IdeaList' => 'IdeaList',
            'Logingrupa\StyleBookShopaholic\Components\IdeaPage' => 'IdeaPage',
        ];
    }
}