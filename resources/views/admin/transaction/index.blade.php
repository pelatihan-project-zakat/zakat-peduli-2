@extends('admin.templates.source')

@section('content')

    <!-- TABLE HOVER -->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Data Donasi yang Belum Diperiksa</h3>    
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Atas Nama</th>
                        <th>Program</th>
                        <th>Metode Bayar</th>
                        <th>Nominal Donasi</th>
                        <th>Bukti Transfer</th>
                        <th>Tanggal Bayar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{$transaction->id}}</td>
                        <td>{{$transaction->user_id}}</td>
                        <td>{{$transaction->atas_nama}}</td>
                        <td>{{$transaction->program_id}}</td>
                        <td>{{$transaction->bank_id}}</td>
                        <td>Rp {{$transaction->nominal}}</td>
                        <td><img src="{{asset('assets/img/avatar/boy.png')}}" height="60px" alt=""></td>
                        <td>{{$transaction->tgl_bayar}}</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Sesuai</a></li>
                                  <li><a href="#">Tidak sesuai</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$transactions->links()}}
        </div>
    </div>
    <!-- END TABLE HOVER -->
@endsection