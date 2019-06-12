@extends('admin.templates.source')

@section('content')
    <!-- INPUTS -->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Edit Data Bank</h3>
        </div>
        <div class="panel-body">
            <form action="{{route('bank.update', $bank)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <label for="name">Nama Bank</label>
                <input type="text" class="form-control" placeholder="Nama Bank" name="nama_bank" value="{{$bank->nama_bank}}">
                <br>

                <label for="address">No. Rekening Donasi</label>
                <input type="text" class="form-control" placeholder="No. Rek" name="no_rek" value="{{$bank->no_rek}}">
                <br>

                <div class="form-group">
                    <label for="image" class="label">Logo Bank</label> <br>
                    <input type="file" class="form-controll" name="image">
                    <br>
                    {{-- Tampilan masih hambret --}}
                </div>

                <button type="submit" class="btn btn-info">Edit Data</button>
            </form>
        </div>
    </div>
    <!-- END INPUTS -->
@endsection

