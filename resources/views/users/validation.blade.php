@extends('users.templates.source')

@section ('content')

<div class="container-fluid">

    <div class="row">
        <h3>Data Pembayaran Donasi</h3>
        <div class="col-md-12" style="background:white">
            <div class="row">
                <table class="table table-hover table-striped">
                    <thead> 
                        <tr>
                            <th>ID</th>
                            <th>PROGRAM DONASI</th>
                            <th>ATAS NAMA</th>
                            <th>NOMINAL</th>
                            <th>KODE TRANSAKSI</th>
                            <th>BUKTI TRANSFER</th>
                            <th>STATUS</th>            
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transactions as $transaction)
                        <tr>
                            <td>{{$transaction->id}}</td>
                            <td>{{$transaction->program_id}}</td>
                            <td>{{$transaction->atas_nama}}</td>
                            <td>{{$transaction->nominal}}</td>
                            <td>{{$transaction->kode_transaksi}}</td>
                            <td><img src="{{asset($transaction->image)}}" height="100px" alt=""></td>
                            <td>{{$transaction->status}}</td>
                            <td><a href="{{ route('transaction.edit',$transaction) }}" class="btn btn-warning">UPLOAD</a></td>
                        </tr>   
                        @endforeach                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

