<?php namespace Logingrupa\StyleBookShopaholic\Components;

use Lovata\Toolbox\Classes\Component\ElementPage;
use Logingrupa\StyleBookShopaholic\Models\Idea;
use Logingrupa\StyleBookShopaholic\Classes\Item\IdeaItem;

/**
 * Class IdeaPage
 * @package Logingrupa\StyleBookShopaholic\Components
 */
class IdeaPage extends ElementPage
{
    /**
     * Component details
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'logingrupa.stylebookshopaholic::lang.component.idea_page_name',
            'description' => 'logingrupa.stylebookshopaholic::lang.component.idea_page_description',
        ];
    }

    /**
     * Get element object
     * @param string $sElementSlug
     * @return Idea
     */
    protected function getElementObject($sElementSlug)
    {
        if (empty($sElementSlug)) {
            return null;
        }

        $obElement = Idea::active()->getBySlug($sElementSlug)->first();

        if(!empty($obElement)) {
            $obElement->view_count++;
            $obElement->save();
        }

        return $obElement;
    }

    /**
     * Make new element item
     * @param int $iElementID
     * @param Idea $obElement
     * @return IdeaItem
     */
    protected function makeItem($iElementID, $obElement)
    {
        return IdeaItem::make($iElementID, $obElement);
    }
}
