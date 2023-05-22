<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('report_id');
            $table->string('fname',60);
            $table->string('email',60);
            $table->string('contact_no',20);
            $table->string('company_name',60);
            $table->string('country',20);
            $table->text('requirements');
            $table->string('designation',50);
            $table->string('subject');
            $table->timestamp('delete_at')->default(DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('report_requests');
    }
}

