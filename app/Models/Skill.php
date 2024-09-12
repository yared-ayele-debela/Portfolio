<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $table="skills";

    public function category()
    {
        return $this->belongsTo(SkillCategory::class, 'skill_category_id');
    }

}