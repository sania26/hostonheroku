<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyprofsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companyprofs', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('mobile');
            $table->string('tel');
            $table->string('email1');
            $table->string('email2');
            $table->string('pobox');
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
        Schema::dropIfExists('companyprofs');
    }
}
