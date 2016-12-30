<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateIncidentsAddScheduledEnd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('incidents', function (Blueprint $table) {
			$table->timestamp('scheduled_end')->after('scheduled_at')->nullable()->default(null);
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('incidents', function (Blueprint $table) {
			$table->dropColumn('scheduled_end');
		});
    }
}
