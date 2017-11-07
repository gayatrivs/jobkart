<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('provider_id')->unsigned();
            $table->foreign('provider_id')->references('id')->on('jobproviders')->onDelete('cascade');
            $table->string('job_title');
            $table->string('salary');
            $table->longText('job_description')->nullable();
            $table->string('PHP_HTML_CSS')->nullable();
            $table->string('MYSQL_MONGODB')->nullable();
            $table->string('JAVA_CPP_C')->nullable();
            $table->string('HADOOP_TENSORFLOW')->nullable();
            $table->string('ANDROID_JS')->nullable();
            $table->date('join_date');
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
        Schema::dropIfExists('jobs');
    }
}
