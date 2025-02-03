<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'reviewer_name',
        'review_message',
        'rating',
        'google_review_link',
        'profile_picture'
    ];

    // A review belongs to a project
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
