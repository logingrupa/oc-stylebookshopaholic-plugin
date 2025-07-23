<?php namespace Logingrupa\StyleBookShopaholic\Classes\Store\Idea;

use Lovata\Toolbox\Classes\Store\AbstractStoreWithoutParam;
use Logingrupa\StyleBookShopaholic\Models\Idea;

/**
 * Class ActiveListStore
 * @package Logingrupa\StyleBookShopaholic\Classes\Store\Idea
 */
class ActiveListStore extends AbstractStoreWithoutParam
{
    protected static $instance;

    /**
     * Get ID list from database
     * @return array
     */
    protected function getIDListFromDB() : array
    {
        $arElementIDList = (array) Idea::active()->pluck('id')->all();

        return $arElementIDList;
    }
}
