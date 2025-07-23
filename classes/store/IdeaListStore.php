<?php namespace Logingrupa\StyleBookShopaholic\Classes\Store;

use Lovata\Toolbox\Classes\Store\AbstractListStore;
use Logingrupa\StyleBookShopaholic\Classes\Store\Idea\ActiveListStore;
use Logingrupa\StyleBookShopaholic\Classes\Store\Idea\SortingListStore;

/**
 * Class IdeaListStore
 * @package Logingrupa\StyleBookShopaholic\Classes\Store
 * @property ActiveListStore  $active
 * @property SortingListStore $sorting
 */
class IdeaListStore extends AbstractListStore
{
    const SORT_CREATED_AT_ASC  = 'created_at|asc';
    const SORT_CREATED_AT_DESC = 'created_at|desc';
    const SORT_VIEW_COUNT_ASC  = 'view|asc';
    const SORT_VIEW_COUNT_DESC = 'view|desc';

    protected static $instance;

    /**
     * Init store method
     */
    protected function init()
    {
        $this->addToStoreList('active', ActiveListStore::class);
        $this->addToStoreList('sorting', SortingListStore::class);
    }
}
