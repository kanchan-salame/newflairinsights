<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id()->autoIncrement(1);
            $table->integer('report_id');
            $table->string('name',60);
            $table->string('email',200);
            $table->string('contact_no',20);
            $table->string('company_name',60);
            $table->string('city',50);
            $table->string('state',50);
            
            $table->string('zip_code',10);
            $table->string('country',20);
            $table->string('pay_method',20);
            $table->string('status',20);
            $table->timestamp('delete_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('user_type',20);
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
        Schema::dropIfExists('transactions');
    }
}
