<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderTables extends Migration
{

    public function up()
    {
        Schema::create('provider_details', function (Blueprint $table) {
            $table->id();
            $table->string('Name',100);
            $table->string('Code',20);
            $table->string('Shortname',50);
            $table->string('Description',50);
            $table->string('Status',30);
            $table->timestamps();
        });
        Schema::create('provider_category', function (Blueprint $table) {
            $table->id();
            // Name,Code,Shortname,Description,Status
            $table->string('CategoryName',100);
            $table->string('Description',50);
            $table->string('Status',30);
            $table->timestamps();
        });
        Schema::create('provider', function (Blueprint $table) {
            $table->foreignId('provider_detail_id')->references('id')->on('provider_details')->onDelete('cascade');
            $table->foreignId('provider_category_id')->references('id')->on('provider_category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provider_details');
        Schema::dropIfExists('provider');
        Schema::dropIfExists('provider_category');
    }
}
