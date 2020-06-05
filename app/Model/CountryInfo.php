<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CountryInfo extends Model
{
    protected $table='country_infos';
    protected $fillabale=['country_name'];
    protected $hidden=['created_at','updated_at'];
}
