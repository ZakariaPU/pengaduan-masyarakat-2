<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        // Data tim bisa diambil dari database atau ditulis langsung dalam bentuk array
        $teamMembers = [
            [
                'name' => 'Nur Ifani Haerunisya',
                'role' => 'Project Manager',
                'linkedin' => 'https://linkedin.com/in/ifani-septiana',
                'image' => 'assets/img/ifani.png',
            ],
            [
                'name' => 'Zakaria Priyo Utomo',
                'role' => 'Web Developer',
                'linkedin' => 'https://www.linkedin.com/in/zakaria-priyo/',
                'image' => 'assets/img/zakaria_foto.png',
            ],
            [
                'name' => 'Zelika Awine Windarti',
                'role' => 'System Analyst',
                'linkedin' => 'https://linkedin.com/in/zelika',
                'image' => 'assets/img/zelika.png',
            ],
            [
                'name' => 'Ayu Sekar Sari',
                'role' => 'UI Designer',
                'linkedin' => 'https://linkedin.com/in/ayuk-pramesti',
                'image' => 'assets/img/ayu.png',
            ],
        ];

        return view('team.index', compact('teamMembers'));
    }
}
