<?php namespace Logingrupa\StyleBookShopaholic;

use Config;
use Event;
use System\Classes\PluginBase;

use Logingrupa\StyleBookShopaholic\Classes\Collection\IdeaCollection;
use Logingrupa\StyleBookShopaholic\Classes\Item\IdeaItem;
use Logingrupa\StyleBookShopaholic\Models\Idea;
use Logingrupa\StyleBookShopaholic\Classes\Event\Idea\IdeaModelHandler;
use Logingrupa\StyleBookShopaholic\Classes\Event\BackendMenuHandler;


/**
 * Class Plugin
 * @package Logingrupa\StyleBookShopaholic
 */
class Plugin extends PluginBase
{
    /**
     * MightySeo reads app.seo_models and app.seo_items when its subscriber
     * boots, so the idea classes are listed here, before any plugin boot()
     */
    public function register()
    {
        Config::set('app.seo_models', array_merge((array) Config::get('app.seo_models'), [Idea::class]));
        Config::set('app.seo_items', array_merge((array) Config::get('app.seo_items'), [IdeaItem::class]));
    }

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