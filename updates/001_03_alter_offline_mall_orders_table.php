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
        if (!Schema::hasColumn('offline_mall_orders', 'ratmd_easybill_invoice_document_id')) {
            Schema::table('offline_mall_orders', function (Blueprint $table) {
                $table->string('ratmd_easybill_invoice_document_id')->nullable()->after('invoice_number');
            });
        }
    }

    /**
     * Undo Migration
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('offline_mall_orders', 'ratmd_easybill_invoice_document_id')) {
            Schema::dropColumns('offline_mall_orders', 'ratmd_easybill_invoice_document_id');
        }
    }

};
