<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'start_date', 'end_date', 'client_id', 'category_id', 'budget', 'spent', 'status'];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
