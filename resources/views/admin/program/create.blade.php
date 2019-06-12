@extends('admin.templates.source')

@section('content')
    <!-- INPUTS -->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Tambah Program Baru</h3>
        </div>
        <div class="panel-body">
            <form action="{{route('program.store')}}" method="POST">
                @csrf
                
                <label for="nama_program">Nama Program</label>
                <input type="text" class="form-control" placeholder="Nama Program" name="nama_program">
                <br>

                <label for="jenis_donasi">Penerima Donasi (Mustahiq)</label>
                <select class="form-control" name="mustahiq">
                    @foreach ($mustahiqs as $mustahiq)
                        <option value="{{$mustahiq->id}}">{{$mustahiq->nama_mustahiq}}</option>
                    @endforeach                    
                </select>
                
                <label for="jenis_donasi">Jenis Donasi</label>
                <select class="form-control" name="jenis_amalan">
                    <option value="Zakat">Zakat</option>
                    <option value="Waqaf">Waqaf</option>
                    <option value="Infaq">Infaq</option>
                    <option value="Sadaqah">Sadaqah</option>
                </select>
                <br>

                <label for="keterangan">Keterangan</label>
                <textarea class="form-control" placeholder="Keterangan" rows="4" name="keterangan"></textarea>
                <br>

                <button type="submit" class="btn btn-success">Tambah Program</button>
            </form>
        </div>
    </div>
    <!-- END INPUTS -->
@endsection

