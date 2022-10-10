<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/KubN8JEPE2KT6X54OLdmc8KVNa8qlhmB7vp3EIwq.png';
        return "/storage/" . $imagePath;
    }

    //  A profile can have many users that follow it
    public function followers(){
        return $this->belongsToMany(User::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
