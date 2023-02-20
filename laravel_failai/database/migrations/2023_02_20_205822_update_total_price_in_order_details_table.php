<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('order_details', function (Blueprint $table) {
            $table->decimal('total_price', 8, 2)->default(0)->change();
        });

        DB::unprepared('
            CREATE TRIGGER update_order_detail_total_price
            BEFORE INSERT ON order_details
            FOR EACH ROW
            SET NEW.total_price = NEW.price * NEW.quantity
        ');

        DB::unprepared('
            CREATE TRIGGER update_order_detail_total_price_on_update
            BEFORE UPDATE ON order_details
            FOR EACH ROW
            SET NEW.total_price = NEW.price * NEW.quantity
        ');
    }

    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS update_order_detail_total_price_on_update');
        DB::unprepared('DROP TRIGGER IF EXISTS update_order_detail_total_price');
    }
};
