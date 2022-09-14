<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('worker_id')->nullable();
            $table->foreign('worker_id')->references('id')->on('workers')->onDelete('cascade');
            $table->foreignId('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name');
            $table->string('phone');
            $table->string('cnic');
            $table->string('location');
            $table->boolean('vac_status')->default(false);
            $table->date('vac_date')->default(Carbon\Carbon::now());
            $table->string('qr_code')->default('qrcode/qr.jpg');
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
        Schema::dropIfExists('records');
    }
}
