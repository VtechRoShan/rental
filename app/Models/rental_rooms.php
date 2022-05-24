<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class rental_rooms extends Model
{
    use HasFactory;


    use SoftDeletes;  
    public $timestamps = true;

    protected $fillable = [
        //  General information
        'size',
        'type',
        'price',
        'floor',
        'parking',
        'available_for',
        'toilet_bathroom',
        'kitchen',
        'config_balcony',
        'config_window_no',
        'config_electricity_water_charges',

        //General information for land
        'mohoda_width',
        'mohoda_faced_direction',
        'pichhad_length',
        'road_penetration',
        'road_penetration_type',
        'road_width',
        'area_unit_daam',
        'area_unit_paisa',
        'area_unit_aana',
        'area_unit_ropani',

        //House information 
        'total_room',
        'bed_room',
        'living_room',
        'bathroom',
        'toilet',
        'kitchen',
        'total_room',
        'house_type',
        'built_year',
        'balcony',
        'finishing',
        'Furnihsing',
        'no_of_flat',
        'area_of_building',
        'property_description',
        'house_mohoda',
        'house_pichhad',
        // location information 
        'district',
        'city',
        'municipal',
        'ward_no',
        'area_name',
        'tole_name',
        'street_no',
        'google_map_location',

        //nearby locations
        'nearby_hospital',
        'nearby_school',
        'nearby_relegious_place',
        'nearby_highway_range',

        //photos of sites
        'photo_outside_room',
        'photo_inside_room',
        'photo_toilet_bathroom',
        'photo_anyother',

        'status',
        'created_by',


    ];
}
