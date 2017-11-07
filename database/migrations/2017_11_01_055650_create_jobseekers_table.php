<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobseekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseekers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phoneNo');
            $table->string('password');
            $table->longText('resume')->nullable();
            $table->string('PHP_HTML_CSS')->nullable();
            $table->string('MYSQL_MONGODB')->nullable();
            $table->string('JAVA_CPP_C')->nullable();
            $table->string('HADOOP_TENSORFLOW')->nullable();
            $table->string('ANDROID_JS')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('jobseekers');
    }
}
