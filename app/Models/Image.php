<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table="projectimages";
    protected $fillable=[
        'image',
        'category',
        'project_id'
    ];

    public function projects(){
      return $this->belongsTo(Project::class);
    }
}