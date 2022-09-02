<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEndDateToMilestonesTable extends Migration
{
   
    public function up()
    {
        Schema::table('milestones', function (Blueprint $table) {
            $table->date('end_date')->nullable()->after('description');
        });
    }

 
    public function down()
    {
        Schema::table('milestones', function (Blueprint $table) {
            //
        });
    }
}
