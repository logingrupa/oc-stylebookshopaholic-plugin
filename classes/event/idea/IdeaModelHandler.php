<?php namespace Logingrupa\StyleBookShopaholic\Classes\Event\Idea;

use Lovata\Toolbox\Classes\Event\ModelHandler;
use Logingrupa\StyleBookShopaholic\Models\Idea;
use Logingrupa\StyleBookShopaholic\Classes\Item\IdeaItem;
use Logingrupa\StyleBookShopaholic\Classes\Store\IdeaListStore;

/**
 * Class IdeaModelHandler
 * @package Logingrupa\StyleBookShopaholic\Classes\Event\Idea
 */
class IdeaModelHandler extends ModelHandler
{
    /** @var Idea */
    protected $obElement;

    /**
     * Get model class name
     * @return string
     */
    protected function getModelClass()
    {
        return Idea::class;
    }

    /**
     * Get item class name
     * @return string
     */
    protected function getItemClass()
    {
        return IdeaItem::class;
    }
    /**
     * After create event handler
     */
    protected function afterCreate()
    {
        parent::afterCreate();

        $this->clearBySortingPublished();
        $this->clearBySortingViews();
    }

    /**
     * After save event handler
     */
    protected function afterSave()
    {
        parent::afterSave();

        if ($this->isFieldChanged('view_count')) {
            $this->clearBySortingViews();
        }

        $this->checkFieldChanges('active', IdeaListStore::instance()->active);
    }

    /**
     * After delete event handler
     */
    protected function afterDelete()
    {
        parent::afterDelete();

        if ($this->obElement->active) {
            IdeaListStore::instance()->active->clear();
        }

        $this->clearBySortingPublished();
        $this->clearBySortingViews();
    }

    /**
     * Clear cache by created_at
     */
    protected function clearBySortingPublished()
    {
        IdeaListStore::instance()->sorting->clear(IdeaListStore::SORT_CREATED_AT_ASC);
        IdeaListStore::instance()->sorting->clear(IdeaListStore::SORT_CREATED_AT_DESC);
    }

    /**
     * Clear cache by views
     */
    protected function clearBySortingViews()
    {
        IdeaListStore::instance()->sorting->clear(IdeaListStore::SORT_VIEW_COUNT_ASC);
        IdeaListStore::instance()->sorting->clear(IdeaListStore::SORT_VIEW_COUNT_DESC);
    }
}
