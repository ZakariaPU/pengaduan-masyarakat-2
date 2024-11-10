<?php

namespace App\Http\Controllers;

use App\Models\VisitorCounter;

class VisitorCounterController extends Controller
{
    public function index()
    {
        // Ambil counter dari database, jika tidak ada buat record baru
        $counter = VisitorCounter::first();

        if (!$counter) {
            $counter = VisitorCounter::create(['count' => 1]); // Buat counter baru
        } else {
            $counter->increment('count'); // Tambahkan jumlah kunjungan
        }

        // Kirim jumlah kunjungan ke view
        $visitorCount = $counter->count;

        return view('welcome', compact('visitorCount'));
    }
}
