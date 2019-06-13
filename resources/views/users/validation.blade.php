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
                            <th>Program Donasi</th>
                            <th>Atas Nama</th>
                            <th>Nominal Donasi</th>
                            <th>Metode Bayar</th>
                            {{-- <th>Bukti Transfer</th> --}}
                            <th>Upload Bukti Transfer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transactions as $transaction)
                        <tr>
                            <td>{{$transaction->program->nama_program}}</td>
                            <td>{{$transaction->atas_nama}}</td>
                            <td>Rp {{$transaction->nominal}}</td>
                            <td>{{$transaction->bank->nama_bank}}</td>
                            {{-- <td><img src="{{asset($transaction->image)}}" height="100px" alt=""></td> --}}
                            <td><a href="{{ route('transaction.edit',$transaction) }}" class="btn btn-warning">Upload</a></td>
                        </tr>   
                        @endforeach                    
                    </tbody>
                </table>
                {{$transactions->links()}}
            </div>
        </div>
    </div>
</div>

@endsection

