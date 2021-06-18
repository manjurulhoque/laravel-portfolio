<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'link', 'image'];

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        if ($this->image) return request()->getSchemeAndHttpHost() . '/images/' . $this->image;
        else return '';
    }
}
