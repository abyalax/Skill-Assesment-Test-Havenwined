<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model {
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'email',
        'whatsapp',
        'banner'
    ];
    
    // Casting field banner menjadi array
    protected $casts = [
        'banner' => 'array'
    ];

    // Relasi one-to-many: satu company profile memiliki banyak event
    public function events() {
        return $this->hasMany(Event::class);
    }
}