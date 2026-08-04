<?php namespace Logingrupa\StyleBookShopaholic\Updates;

use Schema;
use Illuminate\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * Class CreateTableIdeasOffers
 * @package Logingrupa\StyleBookShopaholic\Updates
 */
class CreateTableIdeasOffers extends Migration
{
    const TABLE = 'logingrupa_stylebookshopaholic_ideas_offers';

    /**
     * Apply migration
     */
    public function up()
    {
        if (Schema::hasTable(self::TABLE)) {
            return;
        }

        Schema::create(self::TABLE, function (Blueprint $obTable)
        {
            $obTable->engine = 'InnoDB';
            $obTable->integer('idea_id')->unsigned();
            $obTable->integer('offer_id')->unsigned();
            $obTable->primary(['idea_id', 'offer_id'], 'ideas_offers_primary');
            $obTable->index('idea_id');
            $obTable->index('offer_id');
        });
    }

    /**
     * Rollback migration
     */
    public function down()
    {
        Schema::dropIfExists(self::TABLE);
    }
}