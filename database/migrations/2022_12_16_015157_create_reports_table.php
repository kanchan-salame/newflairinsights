<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('parent_id')->nullable();
            $table->integer('publisher_id')->nullable();
            $table->integer('delivery_format_id')->nullable();
            $table->string('title');
            $table->string('show_on_homepage')->nullable();
            $table->string('keywords')->nullable();
            $table->string('image_one')->nullable();
            $table->integer('pages')->nullable();
            $table->text('description_one');
            $table->text('description_two');
            $table->text('description_three');
            $table->string('image_two')->nullable();
            $table->string('image_three')->nullable();
            $table->text('content');
            $table->text('type');
            $table->text('application');
            $table->text('keyplayers');
            $table->text('list_of_figures')->nullable();
            $table->float('single_user_price')->nullable();
            $table->float('multi_user_price')->nullable();
            $table->float('corp_user_price')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('site_pdf')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('country')->nullable();
            $table->text('continent')->nullable();
            $table->text('region')->nullable();
            $table->integer('pre_inh')->nullable();
            $table->integer('template_type')->nullable();
            $table->string('files')->nullable();
            $table->text('slug');
            $table->softDeletes();
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
        Schema::dropIfExists('reports');
    }
}
