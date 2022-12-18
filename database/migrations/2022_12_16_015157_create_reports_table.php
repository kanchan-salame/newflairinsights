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
            $table->integer('parent_id');
            $table->integer('publisher_id');
            $table->integer('delivery_format_id');
            $table->string('title');
            $table->integer('pages');
            $table->text('description_one');
            $table->text('description_two');
            $table->text('description_three');
            $table->text('content');
            $table->text('list_of_figures');
            $table->float('single_user_price');
            $table->float('multi_user_price');
            $table->float('corp_user_price');
            $table->string('meta_title');
            $table->string('site_pdf');
            $table->text('meta_description');
            $table->text('meta_keywords');
            $table->text('country');
            $table->text('continent');
            $table->text('region');
            $table->integer('pre_inh');
            $table->integer('template_type');
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
