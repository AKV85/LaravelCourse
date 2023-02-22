<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE VIEW order_priceTotal_view AS SELECT orders.id AS order_id, SUM(order_details.quantity * products.price) AS total_price
FROM orders
         INNER JOIN order_details ON orders.id = order_details.order_id
         INNER JOIN products ON order_details.product_id = products.id
GROUP BY orders.id');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW order_priceTotal_view');
    }
};
