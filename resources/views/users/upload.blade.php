@extends('users.templates.source')

@section ('content')

<div class="container-fluid">
    
        <div class="row">
            <div class="col-md-6">
                <div class="well">
                    <div class="panel-heading">
                        <h2 class="panel-title">Upload Bukti Transfer Bank <b>{{$transaction->bank->nama_bank}}</b></h2>
                    </div>                    

                    <div class="panel-body">
                            <form action="{{route('transaction.update', $transaction) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                        <input type="hidden" name="user_id" value="{{$transaction->user_id}}">
                        <input type="hidden" name="program_id" value="{{$transaction->program_id}}">
                        <input type="hidden" name="bank_id" value="{{$transaction->bank_id}}">
                        <input type="hidden" name="atas_nama" value="{{$transaction->atas_nama}}">
                        <input type="hidden" name="nominal" value="{{$transaction->nominal}}">

                        <input type="file" name="image" class="form-controll">
                        <br>
                        <input type="submit" name="submit" value="Upload" class="btn btn-success" style="float:left;margin-right:10px">
                    </form>
                    </div>
                </div>
            </div>        
        </div>
    
</div>

@endsection