<?php

namespace App\Http\Controllers;

use App\Mail\StatusMail;
use Illuminate\Support\Facades\Mail;

class StatusController extends Controller
{
    public function updateStatus($userId, $newStatus)
    {
        $user = User::find($userId);
        $user->status = $newStatus;
        $user->save();

        Mail::to($user->email)->send(new StatusMail($newStatus));

        return response()->json(['message' => 'Status updated and email sent.']);
    }
}
