<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE VIEW order_total_view AS SELECT order_id, SUM(total_price) AS order_total_price FROM order_details GROUP BY order_id');
    }

    public function down()
    {
        DB::statement('DROP VIEW order_total_view');
    }
};
