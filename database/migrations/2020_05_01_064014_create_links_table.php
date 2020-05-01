<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->string('patch');
            $table->unsignedBigInteger('folder_id')->nullable();
            $table->unsignedBigInteger('file_id')->nullable();
            $table->timestamps();
        });

        Schema::table('links',function (Blueprint $table) {
            $table->foreign('folder_id')
                ->references('id')
                ->on('folders')
                ->onDelete('cascade');
            $table->foreign('file_id')
                ->references('id')
                ->on('files')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('links');
    }
}
