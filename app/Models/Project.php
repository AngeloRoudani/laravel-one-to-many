<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'language_dev',
        'framework',
        'start_date',
        'type_id'
    ];

    public function type() {

        return $this->belongsTo(Type::class);

    }
}
