<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutMe extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'details', 'email', 'phone', 'image'];
    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        if ($this->image) return request()->getHttpHost() . '/images/' . $this->image;
        else return '';
    }
}
