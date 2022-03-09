@component('mail::message')

<p>Hallo,</p>
<p>Terima Kasih Telah Melakukan Pendaftaran Dalam Kegiatan Kami.
    Silahkan Buka Link Ini Untuk Melakukan Upload Buku Pembayaran Anda
    Dengan Kode Pembayaran
</p>
<p>Kode Pendaftaran : {{$register->activity->kode_activity}}</p>
<p>Jumlah Tiket : {{$register->qty}}</p>
<p>Total Pembayaran : {{$register->qty * $register->activity->idr}}</p>

@component('mail::button', ['url' => "http://localhost/kegiatanbaru/public/user/ambil-form/{$register->id}" ])
        Upload Pembayaran
@endcomponent
    
@endcomponent