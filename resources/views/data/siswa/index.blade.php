@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="mb-3">
                                <a href="{{route('tambah-data.siswa')}}" class="btn btn-danger">Tambah Data Siswa</a>
                            </div>
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                        <div>
                                            <button type="submit" class="btn btn-secondary">Cari Data</button>
                                        </div>
                                    </div>
                                </form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card border-12">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <div class="">
                                                    <div class="mt-12">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nisn</th>
                                                                    <th>Nama Siswa</th>
                                                                    <th>Kelas</th>
                                                                    <th>Jurusan</th>
                                                                    <th>Status</th>
                                                                    <th>Option</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($students as $student)
                                                                    <tr>
                                                                        <td>{{$student->students->first()->nisn ?? 'Belum tersedia'}}</td>
                                                                        <td>{{$student->name}}</td>
                                                                        <td>{{$student->students->first()->class ?? 'Belum tersedia'}}</td>
                                                                        <td>{{$student->students->first()->major ?? 'Belum tersedia'}}</td>
                                                                        <td>{{$student->students->first()->status ?? 'Belum tersedia'}}</td>
                                                                        <td>
                                                                            <form action="{{route('destroy.data.siswa', $student->id)}}" method="post">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <a href="{{route('edit-data.siswa', $student->id)}}" class="btn btn-secondary btn-sm">Edit</a>
                                                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection