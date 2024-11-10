<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index(Request $request)
    {
        $ip = $request->ip();

        // Cek apakah pengunjung dengan IP ini sudah ada di database
        $visitor = Visitor::where('ip_address', $ip)->first();

        if (!$visitor) {
            // Simpan IP pengunjung baru
            Visitor::create(['ip_address' => $ip]);
        }

        // Ambil total jumlah pengunjung
        $visitorCount = Visitor::count();
      

        return view('visitor', compact('visitorCount'));
    }
}
