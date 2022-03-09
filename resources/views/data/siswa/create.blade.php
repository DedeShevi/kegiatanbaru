@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="margin-top: -100px">
            <div class="col-md-8">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="alert alert-primary" role="alert">
                            <h3>Perharian !!!!</h3>
                            Silahkan Isi data dibawah ini dengan benar.
                        </div>

                    <form action="{{route('tambah-data.store')}}" method="post">
                        @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">NISN</label>
                                        <input type="text" name="nisn" class="form-control" id="" placeholder="Silahkan isi NISN Siswa">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" name="name" class="form-control" id="" placeholder="Silahkan isi Nama Siswa">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" name="email" class="form-control" id="" placeholder="Silahkan isi Email Siswa">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="text" name="phone" class="form-control" id="" placeholder="Silahkan isi Nomor Siswa">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Jenis Kelamin</label>
                                        <select name="gender" id="" class="form-control">
                                            <option value="">Silahkan Pilih Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Agama</label>
                                        <select name="religion" id="" class="form-control">
                                            <option value="">Silahkan Pilih Agama</option>
                                            <option value="">Islam</option>
                                            <option value="">Kristen</option>
                                            <option value="">Budha</option>
                                            <option value="">Protestan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Jurusan</label>
                                        <select name="major" id="" class="form-control">
                                            <option value="">Silahkan Pilih Jurusan</option>
                                            <option value="AK">AK</option>
                                            <option value="AP">AP</option>
                                            <option value="RPL">RPL</option>
                                            <option value="MM">MM</option>
                                            <option value="TKJ">TKJ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Kelas</label>
                                        <select name="class" id="" class="form-control">
                                            <option value="">Silahkan Pilih Kelas</option>
                                            <option value="X">X</option>
                                            <option value="XI">XI</option>
                                            <option value="XII">XII</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select name="status" id="" class="form-control">
                                            <option value="">Silahkan Pilih Status</option>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Non-aktif">Non-Aktif</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Akses</label>
                                        <select name="roles" class="form-control" id="">
                                            <option value="">Silahkan Pilih Akses</option>
                                            @foreach ($roles as $role)
                                            <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-info">Simpan</button>
                                </div>
                            </div>
                        </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection