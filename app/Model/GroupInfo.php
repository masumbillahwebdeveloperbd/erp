<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class GroupInfo extends Model
{
    protected $table='group_infos';
    protected $fillabale=['gorup_name','contact_number','website','address','contact_person','country_id','email','remark'
    ,'status'];
    protected $hidden=['created_at','updated_at'];
}
