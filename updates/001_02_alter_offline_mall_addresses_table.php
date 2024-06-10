<?php declare(strict_types=1);

namespace RatMD\EasyBill\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

return new class extends Migration
{
    
    /**
     * Migrate
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('offline_mall_addresses', 'ratmd_easybill_last_name')) {
            Schema::table('offline_mall_addresses', function (Blueprint $table) {
                $table->string('ratmd_easybill_last_name')->nullable()->after('company');
            });
        }
        if (!Schema::hasColumn('offline_mall_addresses', 'ratmd_easybill_first_name')) {
            Schema::table('offline_mall_addresses', function (Blueprint $table) {
                $table->string('ratmd_easybill_first_name')->nullable()->after('company');
            });
        }
        if (!Schema::hasColumn('offline_mall_addresses', 'ratmd_easybill_title')) {
            Schema::table('offline_mall_addresses', function (Blueprint $table) {
                $table->string('ratmd_easybill_title')->nullable()->after('company');
            });
        }
        if (!Schema::hasColumn('offline_mall_addresses', 'ratmd_easybill_salutation')) {
            Schema::table('offline_mall_addresses', function (Blueprint $table) {
                $table->integer('ratmd_easybill_salutation')->unsigned()->default(0)->after('company');
            });
        }
    }

    /**
     * Undo Migration
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('offline_mall_addresses', 'ratmd_easybill_salutation')) {
            Schema::dropColumns('offline_mall_addresses', 'ratmd_easybill_salutation');
        }
        if (Schema::hasColumn('offline_mall_addresses', 'ratmd_easybill_title')) {
            Schema::dropColumns('offline_mall_addresses', 'ratmd_easybill_title');
        }
        if (Schema::hasColumn('offline_mall_addresses', 'ratmd_easybill_first_name')) {
            Schema::dropColumns('offline_mall_addresses', 'ratmd_easybill_first_name');
        }
        if (Schema::hasColumn('offline_mall_addresses', 'ratmd_easybill_last_name')) {
            Schema::dropColumns('offline_mall_addresses', 'ratmd_easybill_last_name');
        }
    }

};
