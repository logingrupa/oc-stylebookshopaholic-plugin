<?php namespace Logingrupa\StyleBookShopaholic\Components;

use Cms\Classes\ComponentBase;
use Logingrupa\StyleBookShopaholic\Classes\Collection\IdeaCollection;

/**
 * Class IdeaList
 * @package Logingrupa\StyleBookShopaholic\Components
 */
class IdeaList extends ComponentBase
{
    /**
     * Component details
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'logingrupa.stylebookshopaholic::lang.component.idea_list_name',
            'description' => 'logingrupa.stylebookshopaholic::lang.component.idea_list_description',
        ];
    }

    /**
     * Make element collection
     * @param array $arElementIDList
     * @return IdeaCollection
     */
    public function make($arElementIDList = null)
    {
        return IdeaCollection::make($arElementIDList);
    }

    /**
     * Method for ajax request with empty response
     * @return bool
     */
    public function onAjaxRequest()
    {
        return true;
    }
}
