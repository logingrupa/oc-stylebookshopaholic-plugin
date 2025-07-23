<?php namespace Logingrupa\StyleBookShopaholic\Classes\Store\Idea;

use Lovata\Toolbox\Classes\Store\AbstractStoreWithParam;
use Logingrupa\StyleBookShopaholic\Models\Idea;
use Logingrupa\StyleBookShopaholic\Classes\Store\IdeaListStore;

/**
 * Class SortingListStore
 * @package Logingrupa\StyleBookShopaholic\Classes\Store\Idea
 */
class SortingListStore extends AbstractStoreWithParam
{
    protected static $instance;

    /**
     * Get ID list from database
     * @return array
     */
    protected function getIDListFromDB() : array
    {
        switch ($this->sValue) {
            case IdeaListStore::SORT_CREATED_AT_ASC:
                $arElementIDList = $this->getByPublishASC();
                break;
            case IdeaListStore::SORT_CREATED_AT_DESC:
                $arElementIDList = $this->getByPublishDESC();
                break;
            case IdeaListStore::SORT_VIEW_COUNT_ASC:
                $arElementIDList = $this->getByViewsASC();
                break;
            case IdeaListStore::SORT_VIEW_COUNT_DESC:
                $arElementIDList = $this->getByViewsDESC();
                break;
            default:
                $arElementIDList = $this->getDefaultList();
                break;
        }

        return $arElementIDList;
    }

    /**
     * Get default list
     * @return array
     */
    protected function getDefaultList() : array
    {
        $arElementIDList = (array) Idea::pluck('id')->all();

        return $arElementIDList;
    }

    /**
     * Get sorting ID list by published (ASC)
     * @return array
     */
    protected function getByPublishASC() : array
    {
        $arElementIDList = (array) Idea::orderBy('created_at', 'asc')->pluck('id')->all();

        return $arElementIDList;
    }

    /**
     * Get sorting ID list by published (DESC)
     * @return array
     */
    protected function getByPublishDESC() : array
    {
        $arElementIDList = (array) Idea::orderBy('created_at', 'desc')->pluck('id')->all();

        return $arElementIDList;
    }

    /**
     * Get sorting ID list by views (ASC)
     * @return array
     */
    protected function getByViewsASC() : array
    {
        $arElementIDList = (array) Idea::orderBy('view_count', 'asc')->pluck('id')->all();

        return $arElementIDList;
    }

    /**
     * Get sorting ID list by views (DESC)
     * @return array
     */
    protected function getByViewsDESC() : array
    {
        $arElementIDList = (array) Idea::orderBy('view_count', 'desc')->pluck('id')->all();

        return $arElementIDList;
    }
}
