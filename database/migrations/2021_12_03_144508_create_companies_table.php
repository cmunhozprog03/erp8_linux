<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('social_name')->unique();
            $table->string('fantasy_name')->nullable();
            $table->string('cnpj', 30);
            $table->string('ie', 30)->nullable();
            $table->string('im', 30)->nullable();
            $table->string('logo', 150)->nullable();
            $table->string('site')->nullable();
            $table->string('email')->nullable();
            $table->string('phone1', 30)->nullable();
            $table->string('phone2', 30)->nullable();
            $table->string('mobile', 30)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
