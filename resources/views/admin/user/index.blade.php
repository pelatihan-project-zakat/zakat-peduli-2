@extends('admin.templates.source')

@section('content')

    <!-- TABLE HOVER -->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Data User Yayasan Al-Azhar Peduli</h3>            
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. Telpon</th>
                        <th>Alamat</th>
                        <th>Jumlah Transaksi</th>
                        <th>Total Donasi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->no_telpon}}</td>
                        <td>{{$user->alamat}}</td>
                        <td>{{$user->jml_transaksi}}</td>
                        <td>Rp {{$user->total_donasi}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$users->links()}}
        </div>
    </div>
    <!-- END TABLE HOVER -->
@endsection