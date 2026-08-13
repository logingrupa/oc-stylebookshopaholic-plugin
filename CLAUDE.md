# Logingrupa.StyleBookShopaholic

Style book "Ideas": lookbook entries linked to offers via a pivot table, full cached
Store -> Collection -> Item stack, three frontend components and a backend controller.
Namespace Logingrupa\StyleBookShopaholic, composer package
logingrupa/oc-stylebookshopaholic-plugin. Structural twin of
Logingrupa.OfferCollectionsShopaholic with Idea instead of Collection.

## Environment

- Parent app: C:\laragon\www\nc.
- This plugin dir is its OWN git repo - commit here, not in the root repo.

## Architecture map

- models/              Idea (+ models/idea yaml configs)
- classes/store/       IdeaListStore, idea/ActiveListStore, idea/SortingListStore
- classes/collection/  IdeaCollection
- classes/item/        IdeaItem
- classes/event/       idea/IdeaModelHandler (cache invalidation),
                       BackendMenuHandler (backend menu injection)
- components/          IdeaData, IdeaList, IdeaPage
- controllers/         Ideas backend controller (+ controllers/ideas views)
- updates/             create_table_ideas, create_table_ideas_offers (pivot)
- plugin.yaml          name, stylebookshopaholic-menu-ideas permission

## Quality gates

No working automated gate - tests do not exist and lint does not cover this dir.
composer lint does NOT cover this plugin (phpcs.xml scope excludes plugins/logingrupa) - fix
phpcs.xml scope or lint manually; `vendor/bin/phpcs --standard=phpcs.xml <plugin path>` won't
work either since the ruleset pins files; note as known gap.

## Ship

Ship via /nc-ship (root CLAUDE.md release flow); package logingrupa/oc-stylebookshopaholic-plugin.

## Conventions

Root CLAUDE.md governs: Hungarian notation, Store -> Collection -> Item read path, Tiger-Style.
Theme "ideas" pages also fed the wishlist-extender row/checkbox design - coordinate visual
changes with the theme repo.
