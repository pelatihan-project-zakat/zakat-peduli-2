@extends('admin.templates.source')

@section('content')
    <!-- INPUTS -->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Edit Data Mustahiq</h3>
        </div>
        <div class="panel-body">
            <form action="{{route('mustahiq.update', $mustahiq)}}" method="POST">
                @method('PUT')
                @csrf
                <label for="name">Nama Mustahiq</label>
                <input type="text" class="form-control" placeholder="Nama Mustahiq" name="nama_mustahiq" value="{{$mustahiq->nama_mustahiq}}" required="required">
                <br>                

                <label for="address">Alamat Instansi</label>
                <textarea class="form-control" placeholder="Alamat Instansi" rows="4" name="alamat_mustahiq" required="required">{{$mustahiq->alamat_mustahiq}}</textarea>
                <br>

                <button type="submit" class="btn btn-info">Edit Data</button>
            </form>
        </div>
    </div>
    <!-- END INPUTS -->
@endsection

