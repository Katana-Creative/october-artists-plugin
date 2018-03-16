<?php namespace Katana\Artists\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateArtistsTable extends Migration
{
    public function up()
    {
        Schema::create('katana_artists', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->char('name', 255);
            $table->char('slug', 255);

            //custom fields
            $table->char('type', 255);
            $table->char('discipline', 255);
            $table->char('phone', 15);
            $table->char('email', 255);
            $table->char('website', 255);
            $table->char('instagram', 255);
            $table->char('facebook', 255);
            $table->char('soundcloud', 255);


            $table->dateTime('date_when_played');

            $table->boolean('current');

            $table->mediumText('description');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('katana_artists');
    }
}
