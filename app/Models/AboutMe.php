<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutMe extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'details', 'email', 'phone', 'image', 'address'];
    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        if ($this->image) return request()->getSchemeAndHttpHost() . '/images/' . $this->image;
        else return '';
    }
}
