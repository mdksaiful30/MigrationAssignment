<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryToProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            // Add a new column called "category"
            $table->string('category', 50);
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            // Remove the added column if needed
            $table->dropColumn('category');
        });
    }
}

