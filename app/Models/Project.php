<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'type_id',
        'proj_image',
        'description',
        'start_date',
        'completion_date',
        'no_days_taken',
    ];
    public function type() {
        return $this->belongsTo(Type::class);
    }
}
