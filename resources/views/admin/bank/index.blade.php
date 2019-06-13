@extends('admin.templates.source')

@section('content')

    <!-- TABLE HOVER -->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Daftar Bank yang Bisa Dipakai untuk Membayar Donasi</h3>
        </div>
        <div class="panel-body">
            <a href="{{route('bank.create')}}" class="btn btn-success">Tambah Data Bank</a>
            <table class="table table-hover table-striped datatable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Bank</th>
                        <th>No. Rekening</th>
                        <th>Logo Bank</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($banks as $bank)
                    <tr>
                        <td>{{$bank->id}}</td>
                        <td>{{$bank->nama_bank}}</td>
                        <td>{{$bank->no_rek}}</td>
                        <td><img src="{{ asset($bank->logo) }}" alt="" height="100px"></td>
                        <td>
                            <a class="btn btn-info" href="{{route('bank.edit', $bank)}}">Edit</a>
                        </td>
                        <td>
                            <form action="{{route('bank.destroy', $bank)}}" method="POST">
                                @method("DELETE")
                                @csrf
                                <input type="submit" class="btn btn-danger" value="Hapus">
                            </form>
                        </td>                        
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$banks->links()}}
        </div>
    </div>
    <!-- END TABLE HOVER -->
    <script>
        $(".datatable").dataTable();
    </script>
@endsection