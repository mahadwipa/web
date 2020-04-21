@extends('layout.admin')

@section('content')
<div class="panel panel-headline">				
    <div class="panel-heading">
		<h3 class="panel-title">Input Penyewa</h3>
	</div>
 
    	<div class="panel-body">
        <div class="row">
                    <div class="col-md-12">
                    <div class="panel">
				<div class="panel-body">
				    <form action="{{(isset($penyewa))?route('penyewa.update', $penyewa->id_penyewa):route('penyewa.store')}}" method="POST">
                    
                        @csrf
                        @if(isset($penyewa))@method('PUT')@endif
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama</label>
                            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama" value="{{(isset($penyewa))?$penyewa->naama:old('nama')}}">
                            @error('nama')<small style="color:red">{{$message}}</small>@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nomor Identitas</label>
                            <input type="numeric" name="no_identitas" class="form-control" id="exampleFormControlInput1" placeholder="No Identitas" value="{{(isset($penyewa))?$penyewa->no_identitas:old('no_identitas')}}">
                            @error('no_identitas')<small style="color:red">{{$message}}</small>@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jenis Identitas</label>
                            <input type="text" name="jenis_identitas" class="form-control" id="exampleFormControlInput1" placeholder="Jenis Identitas" value="{{(isset($penyewa))?$penyewa->jenis_identitas:old('jenis_identitas')}}">
                            @error('jenis_identitas')<small style="color:red">{{$message}}</small>@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nomor Telepon</label>
                            <input type="numeric" name="telp" class="form-control" id="exampleFormControlInput1" placeholder="Nomor Telepon" value="{{(isset($penyewa))?$penyewa->telp:old('telp')}}">
                            @error('telp')<small style="color:red">{{$message}}</small>@enderror
                        </div>
                       
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="Alamat" value="{{(isset($penyewa))?$penyewa->alamat:old('alamat')}}">    
                            @error('alamat')<small style="color:red">{{$message}}</small>@enderror
                        </div>

                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                    </form>
								</div>
							</div>

                    </div>
                </div>
        </div>
    
</div>
@endsection