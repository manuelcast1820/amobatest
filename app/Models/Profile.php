<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'User_id',
        'Ima_profile',
    ];
    protected $appends = ['First_name','Description'];

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function user() {
        return $this->belongsTo(User::class, 'User_id');
    }

     /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

  

    public function getFirstNameAttribute()
    {
        $First_name =  $this->user->First_name;
        return $First_name;
    }

    public function getDescriptionAttribute()
    {
        $Description =  $this->user->Description;
        return $Description;
    }

}
