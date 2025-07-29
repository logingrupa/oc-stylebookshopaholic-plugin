<?php namespace Logingrupa\StyleBookShopaholic;

use Event;
use System\Classes\PluginBase;

use Logingrupa\StyleBookShopaholic\Classes\Collection\IdeaCollection;
use Logingrupa\StyleBookShopaholic\Classes\Event\Idea\IdeaModelHandler;
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
        // Event::subscribe(IdeaCollection::class);
        // Event::subscribe(IdeaModelHandler::class);
    }

    /**
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Logingrupa\StyleBookShopaholic\Components\IdeaData' => 'IdeaData',
            'Logingrupa\StyleBookShopaholic\Components\IdeaList' => 'IdeaData',
            'Logingrupa\StyleBookShopaholic\Components\IdeaPage' => 'IdeaData',
        ];
    }
}