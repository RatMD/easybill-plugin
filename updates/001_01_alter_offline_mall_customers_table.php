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
        if (!Schema::hasColumn('offline_mall_customers', 'ratmd_easybill_birth_date')) {
            Schema::table('offline_mall_customers', function (Blueprint $table) {
                $table->string('ratmd_easybill_birth_date')->nullable()->after('user_id');
            });
        }
        if (!Schema::hasColumn('offline_mall_customers', 'ratmd_easybill_vat_id')) {
            Schema::table('offline_mall_customers', function (Blueprint $table) {
                $table->string('ratmd_easybill_vat_id')->nullable()->after('user_id');
            });
        }
        if (!Schema::hasColumn('offline_mall_customers', 'ratmd_easybill_court_registry')) {
            Schema::table('offline_mall_customers', function (Blueprint $table) {
                $table->string('ratmd_easybill_court_registry')->nullable()->after('user_id');
            });
        }
        if (!Schema::hasColumn('offline_mall_customers', 'ratmd_easybill_court')) {
            Schema::table('offline_mall_customers', function (Blueprint $table) {
                $table->string('ratmd_easybill_court')->nullable()->after('user_id');
            });
        }
        if (!Schema::hasColumn('offline_mall_customers', 'ratmd_easybill_tax_number')) {
            Schema::table('offline_mall_customers', function (Blueprint $table) {
                $table->string('ratmd_easybill_tax_number')->nullable()->after('user_id');
            });
        }
        if (!Schema::hasColumn('offline_mall_customers', 'ratmd_easybill_tax_option')) {
            Schema::table('offline_mall_customers', function (Blueprint $table) {
                $table->string('ratmd_easybill_tax_option')->nullable()->after('user_id');
            });
        }
        if (!Schema::hasColumn('offline_mall_customers', 'ratmd_easybill_customer_number')) {
            Schema::table('offline_mall_customers', function (Blueprint $table) {
                $table->string('ratmd_easybill_customer_number')->nullable()->after('user_id');
            });
        }
        if (!Schema::hasColumn('offline_mall_customers', 'ratmd_easybill_id')) {
            Schema::table('offline_mall_customers', function (Blueprint $table) {
                $table->integer('ratmd_easybill_id')->unsigned()->nullable()->after('user_id');
            });
        }
    }

    /**
     * Undo Migration
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('offline_mall_customers', 'ratmd_easybill_id')) {
            Schema::dropColumns('offline_mall_customers', 'ratmd_easybill_id');
        }
        if (Schema::hasColumn('offline_mall_customers', 'ratmd_easybill_customer_number')) {
            Schema::dropColumns('offline_mall_customers', 'ratmd_easybill_customer_number');
        }
        if (Schema::hasColumn('offline_mall_customers', 'ratmd_easybill_tax_option')) {
            Schema::dropColumns('offline_mall_customers', 'ratmd_easybill_tax_option');
        }
        if (Schema::hasColumn('offline_mall_customers', 'ratmd_easybill_tax_number')) {
            Schema::dropColumns('offline_mall_customers', 'ratmd_easybill_tax_number');
        }
        if (Schema::hasColumn('offline_mall_customers', 'ratmd_easybill_court')) {
            Schema::dropColumns('offline_mall_customers', 'ratmd_easybill_court');
        }
        if (Schema::hasColumn('offline_mall_customers', 'ratmd_easybill_court_registry')) {
            Schema::dropColumns('offline_mall_customers', 'ratmd_easybill_court_registry');
        }
        if (Schema::hasColumn('offline_mall_customers', 'ratmd_easybill_vat_id')) {
            Schema::dropColumns('offline_mall_customers', 'ratmd_easybill_vat_id');
        }
        if (Schema::hasColumn('offline_mall_customers', 'ratmd_easybill_birth_date')) {
            Schema::dropColumns('offline_mall_customers', 'ratmd_easybill_birth_date');
        }
    }

};
