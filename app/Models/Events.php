<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model {
    use HasFactory;

    protected $fillable = [
        'name',
        'content',
        'category',
        'theme',
        'registration_start', 
        'registration_end',   
        'event_start',       
        'event_end',        
        'time',
        'estimated_visitors',
        'location',
        'city',
        'detailed_location',
        'company_profile_id'
    ];

    // Relasi ke CompanyProfile
    public function companyProfile() {
        return $this->belongsTo(CompanyProfile::class);
    }
}
