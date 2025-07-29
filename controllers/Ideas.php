<?php namespace Logingrupa\StyleBookShopaholic\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Class Ideas
 * @package Logingrupa\StyleBookShopaholic\Controllers
 */
class Ideas extends Controller
{
    /** @var array */
    public $implement = [
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.FormController',
    ];
    /** @var string */
    public $listConfig = 'config_list.yaml';
    /** @var string */
    public $formConfig = 'config_form.yaml';
    /** @var string */
    public $relationConfig = 'config_relation.yaml';

    /**
     * Ideas constructor.
     */
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Logingrupa.StyleBookShopaholic', 'stylebookshopaholic-menu-main', 'stylebookshopaholic-menu-ideas');
    }
}
