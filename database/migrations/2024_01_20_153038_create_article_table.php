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
        Schema::create('article', function (Blueprint $table) {
            $table->id();
            $table->integer('catergory_id');
            $table->string('article_name');
            $table->longblob('img_title');
            $table->longblob('img_content');
            $table->string('content');
            $table->string('data_source');
            $table->string('tags');
            $table->datetime('created_by');
            $table->integer('author_id');
            $table->timestamps(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
};
