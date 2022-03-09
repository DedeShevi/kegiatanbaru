<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Activity</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-white">
    <div class="content px-3">
        <div class="mb-3">
            <h3 class="text-info">Laporan Periode Activity</h3>
            <h5 class="text-muted">SMK AL-Bahri</h5>
            <h5 class="text-muted">Jl.Yon Armed NO.07</h5>
        </div>
        <div class="mb-3">
            @if (request('awal'))
                <small>Dari Tanggal {{request('awal')}} Sampai Tanggal {{request('akhir')}}</small>
            @endif
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>IDR</th>
                    <th>Status</th>
                    <th>Desc</th>
                    <th>Peserta</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($kegiatans as $activitys)
                    <tr>
                        <td>{{$activitys->kode_activity}}</td>
                        <td>{{$activitys->nama_activity}}</td>
                        <td>{{$activitys->idr}}</td>
                        <td>{{$activitys->status}}</td>
                        <td>{{$activitys->desc}}</td>
                        <td>{{$activitys->jumlah_peserta}}</td>
                        <td>{{$activitys->tgl_awal}} - {{$activitys->tgl_selesai}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">
                            Maaf Tanggal Yang Anda Masukan Tidak Tersedia.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>