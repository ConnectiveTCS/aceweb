<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'industry',
        'brief_description',
        'key_objectives',
        'images',
        'logo',
        'website_url'
    ];

    // Cast images as an array automatically
    protected $casts = [
        'images' => 'array',
    ];

    // A project can have many reviews
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
