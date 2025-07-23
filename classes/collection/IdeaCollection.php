<?php namespace Logingrupa\StyleBookShopaholic\Classes\Collection;

use Lovata\Toolbox\Classes\Collection\ElementCollection;
use Logingrupa\StyleBookShopaholic\Classes\Item\IdeaItem;
use Logingrupa\StyleBookShopaholic\Classes\Store\IdeaListStore;

/**
 * Class IdeaCollection
 * @package Logingrupa\StyleBookShopaholic\Classes\Collection
 */
class IdeaCollection extends ElementCollection
{
    const ITEM_CLASS = IdeaItem::class;

    /**
     * Apply filter by active field
     * @return $this
     */
    public function active()
    {
        $arResultIDList = IdeaListStore::instance()->active->get();

        return $this->intersect($arResultIDList);
    }

    /**
     * Sort list by
     * @param string $sSorting
     * @return $this
     */
    public function sort($sSorting)
    {
        $arResultIDList = IdeaListStore::instance()->sorting->get($sSorting);

        return $this->applySorting($arResultIDList);
    }
}
