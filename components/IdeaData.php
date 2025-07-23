<?php namespace Logingrupa\StyleBookShopaholic\Components;

use Lovata\Toolbox\Classes\Component\ElementData;
use Logingrupa\StyleBookShopaholic\Classes\Item\IdeaItem;

/**
 * Class IdeaData
 * @package Logingrupa\StyleBookShopaholic\Components
 */
class IdeaData extends ElementData
{
    /**
     * Component details
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'logingrupa.stylebookshopaholic::lang.component.idea_data_name',
            'description' => 'logingrupa.stylebookshopaholic::lang.component.idea_data_description',
        ];
    }

    /**
     * Make new element item
     * @param int $iElementID
     * @return IdeaItem
     */
    protected function makeItem($iElementID)
    {
        return IdeaItem::make($iElementID);
    }
}
