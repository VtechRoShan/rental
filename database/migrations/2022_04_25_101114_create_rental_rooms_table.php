<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rental_rooms', function (Blueprint $table) {
            $table->id();
            //  General information
            $table->string('size');
            $table->string('type');

            $table->float('price');
            $table->string('floor')->nullable();
            $table->string('parking')->nullable();
            $table->string('available_for')->nullable();
            $table->string('toilet_bathroom')->nullable();
            $table->string('kitchen')->nullable();
            $table->string('config_balcony')->nullable();
            $table->string('config_window_no')->nullable();
            $table->string('config_electricity_water_charges')->nullable();

            //General information for land
            $table->string('mohoda_width')->nullable();
            $table->string('mohoda_faced_direction')->nullable();
            $table->string('pichhad_length')->nullable();
            $table->string('road_penetration')->nullable();
            $table->string('road_penetration_type')->nullable();
            $table->string('road_width')->nullable();
            $table->string('area_unit_daam')->nullable();
            $table->string('area_unit_paisa')->nullable();
            $table->string('area_unit_aana')->nullable();
            $table->string('area_unit_ropani')->nullable();

            //House information 
            $table->string('num_bed_room')->nullable();
            $table->string('num_living_room')->nullable();
            $table->string('num_bathroom')->nullable();
            $table->string('num_toilet')->nullable();
            $table->string('num_kitchen')->nullable();
            $table->string('house_type')->nullable();
            $table->string('built_year')->nullable();
            $table->string('house_mohoda')->nullable();
            $table->string('house_pichhad')->nullable();
            

            $table->string('balcony')->nullable();
            $table->string('finishing')->nullable();
            $table->string('Furnihsing')->nullable();
            $table->string('area_of_building')->nullable();
            $table->string('property_description')->nullable();


            // location information 
            $table->string('district');
            $table->string('city');
            $table->string('municipal');
            $table->integer('ward_no');
            $table->string('area_name');
            $table->string('tole_name');
            $table->string('street_no')->nullable();
            $table->string('google_map_location')->nullable();

            //nearby locations
            $table->string('nearby_hospital')->nullable();
            $table->string('nearby_school');
            $table->string('nearby_relegious_place')->nullable();
            $table->string('nearby_highway_range');

            //photos of sites later to be no null
            $table->string('photo_outside_room')->nullable();
            $table->string('photo_inside_room')->nullable();
            $table->string('photo_toilet_bathroom')->nullable();
            $table->string('photo_anyother')->nullable();
            $table->softDeletes();
            $table->string('created_by');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('rental_rooms');
    }
};
