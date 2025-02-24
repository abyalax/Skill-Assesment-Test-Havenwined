<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Seeder untuk Company Profile
        $companyProfileId = DB::table('company_profiles')->insertGetId([
            'name' => 'haventwined',
            'description' => 'Jasa Event Organizer',
            'email' => 'support@haventwined.com',
            'whatsapp' => '+62 822-9944-9708',
            'banner' => json_encode([]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seeder untuk Event
        DB::table('events')->insert([
            'name' => 'Roopa Roopy',
            'content' => "## Roopa Roopy Festival\n\n**Nikmati pengalaman festival terbaik dengan berbagai pilihan kuliner, fashion, dan kecantikan.**\n\n- Kuliner khas dari berbagai daerah\n- Fashion trend terbaru\n- Perawatan kecantikan terbaik\n\nJangan lewatkan keseruan ini!", 
            'category' => 'Festival, Fair, Bazaar',
            'theme' => 'Kuliner, Fashion, Kecantikan & Perawatan Diri',
            'registration_start' => '2025-02-21',
            'registration_end' => '2025-03-05',
            'event_start' => '2025-03-14',
            'event_end' => '2025-03-16',
            'time' => '10:00 - 21:00',
            'estimated_visitors' => '1500+ orang',
            'location' => 'Kuningan City Mall',
            'city' => 'Jakarta Selatan',
            'detailed_location' => 'Lt 2 Kuningan City Mall',
            'company_profile_id' => $companyProfileId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
