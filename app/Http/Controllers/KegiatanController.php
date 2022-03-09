<?php

namespace App\Http\Controllers;

use App\User;
use App\Register;
use App\Activity;
use App\Mail\PendaftaranMail;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function create($id)
    {
        $activity = Activity::findOrFail($id);
        return view('daftar.create', compact('activity'));
    }

    public function store(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);

        $register = Register::create([
            'user_id'       => $user->id,
            'activity_id'   => $request->activity_id,
            'status'        => $request->status,
            'qty'           => $request->qty,
        ]);

        $to = Mail::to($user->email)->send(new PendaftaranMail($register));
        return redirect()->back();

        // if ($user->save()) {
        //     $user = User::findOrFail(Auth::user()->id);

        //     Nexmo::message()->send([
        //         'to'    => $user->phone,
        //         'from'  => 'kegiatanbaru',
        //         'text'  => 'Hello, Kami Dari TIM newkegiatan Ingin Memberitahukan Kepada Anda Bahwa Anda Telah Success Membeli Tiket.'
            
        //         'Thank You!'
        //         ]);
        // }
    }
}
