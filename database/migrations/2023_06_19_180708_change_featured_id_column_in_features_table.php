<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ChangeFeaturedIdColumnInFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $features = config('twill.features_table', 'twill_features');

        if (DB::connection()->getPDO()->getAttribute(\PDO::ATTR_DRIVER_NAME) === 'pgsql') {
            DB::statement("ALTER TABLE $features ALTER featured_id TYPE INT USING featured_id::integer");
        }

        if (DB::connection()->getPDO()->getAttribute(\PDO::ATTR_DRIVER_NAME) === 'mysql') {
            DB::statement("ALTER TABLE $features MODIFY featured_id INT NOT NULL");
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $features = config('twill.features_table', 'twill_features');

        if (DB::connection()->getPDO()->getAttribute(\PDO::ATTR_DRIVER_NAME) === 'pgsql') {
            DB::statement("ALTER TABLE $features ALTER featured_id TYPE VARCHAR(36)");
        }

        if (DB::connection()->getPDO()->getAttribute(\PDO::ATTR_DRIVER_NAME) === 'mysql') {
            DB::statement("ALTER TABLE $features MODIFY featured_id VARCHAR(36) NOT NULL");
        }
    }
};
