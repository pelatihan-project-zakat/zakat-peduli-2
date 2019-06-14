@extends('users.templates.source')

@section ('content')
    <div class="container-fluid">
            <form action="{{route('transaction.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Pilihan Donasi</h3>
                    </div>
                    <div class="panel-body">
                        <label>Program Donasi :</label>
                        <select name="program" id="" class="form-control">
                            @foreach ($programs as $program)
                                <option value="{{ $program->id }}">{{ $program->nama_program }}</option>
                            @endforeach
                        </select>
                        <br>
                            <label>Atas Nama :</label>
                            <input type="name" class="form-control" name="atas_nama" value required="required">
                        <br>
                        <label>Nominal (Rp.) :</label>
                        <input type="number" class="form-control amount" name="nominal" placeholder="0" required="required" min="10000">
                        <span class="help-block">*Minimal 10000</span>
                        <br>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Metode Pembayaran</h3>
                    </div>
                    <div class="panel-body">
                        <label>                            
                            @foreach ($banks as $bank)
                                <input type="radio" class="" name="bank" value="{{ $bank->id }}">
                                <img src="{{asset( $bank->logo) }}" height="70px">            
                            @endforeach
                        </label>                       
                    </div>
                    <div class="panel-footer">
                        <input type="submit" class="btn btn-block btn-lg btn-warning" value="Donasi Sekarang">
                    </div>
                </div>
            </div>     
        </form>           
    </div>
</div>
@endsection













            