<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('email');
            $table->string('organiser');
            $table->string('venue');
            $table->string('time');
            $table->string('img');
            $table->string('type');
            $table->date('date');
            $table->timestamps();
        });

        DB::table('events')->insert(array(
            'name' => 'Football',
            'description' => '5 a-side tournament to play against other teams',
            'email' => 'aston_events@aston.ac.uk',
            'organiser' => 'Satbir',
            'venue' => 'Aston Campus Astro Pitch',
            'time' => '13:00-14:00',
            'img' => 'https://cdn-edu.wpmhost.net/53544f/fcd644eaf8/4C92-DB76-42EA-A7CB-1904.jpg',
            'type' => 'Sport',
            'date' => '2021-05-16',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('events')->insert(array(
            'name' => 'Arts',
            'description' => 'Arts event, you can bring your own resources or use the ones provided!',
            'email' => 'aston_events@aston.ac.uk',
            'organiser' => 'Lidder',
            'venue' => 'Aston Sports Hall',
            'time' => '13:00-15:00',
            'img' => 'https://pbs.twimg.com/profile_images/378800000039404966/d394367f37bd11c527ce682b02f3d63c.png',
            'type' => 'Culture',
            'date' => '2021-05-15',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('events')->insert(array(
            'name' => 'Live Music',
            'description' => 'Live music will be playing as well as the opportunity for you to get up on the stage and perform!',
            'email' => 'aston_events@aston.ac.uk',
            'organiser' => 'Singh',
            'venue' => 'Aston Students Union',
            'time' => '17:00-22:00',
            'img' => 'https://mccooleys.co.uk/wp-content/uploads/2019/04/live-music.png',
            'type' => 'Other',
            'date' => '2021-05-14',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
