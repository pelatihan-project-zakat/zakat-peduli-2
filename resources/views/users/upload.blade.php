@extends('users.templates.source')

@section ('content')

<div class="container-fluid">
    <form action="{{route('transaction.update', $transaction) }}" method="POST"
        enctype="multipart/form-data">
            @csrf
            @method("PUT")
                <div class="row">
                    <div class="col-md-6">
                        <div class="well">
                            <div class="panel-heading">
                                <h2 class="panel-title">Upload Bukti Transfer Program <b>{{$transaction->program->nama_program}}</b></h2>
                            </div>
                            <div class="panel-body">
                                <input type="file" name="image" class="form-controll {{$errors->has('image') ? 'is-invalid' : '' }}">
                                <br>
                                <input type="submit" name="submit" value="Upload" class="btn btn-success" style="float:left;margin-right:10px">
                            </div>
                        </div>
                    </div>        
                </div>
    </form>
</div>

@endsection