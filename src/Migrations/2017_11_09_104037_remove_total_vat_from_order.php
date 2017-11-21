<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveTotalVatFromOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('merchant_orders', function (Blueprint $table) {
            $table->dropColumn('total_vat');
        });

        Schema::table('merchant_order_lines', function (Blueprint $table) {
            $table->dropColumn('total_vat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('merchant_orders', function (Blueprint $table) {
            $table->integer('total_vat');
        });

        Schema::table('merchant_order_lines', function (Blueprint $table) {
            $table->integer('total_vat');
        });
    }
}
