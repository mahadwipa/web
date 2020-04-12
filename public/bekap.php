@extends('layout.admin')
@section('content')
<div class="page-header">
	<div >
		<h4 class="">
			<i class="icon-home position-left"></i>
			<span class="text-semibold">Daftar Sewa</span>
		</h4>
		<a class="heading-elements-toogle">
			<i class="icon-more"></i>
		</a>
	</div>
	<div class="heading-elements">
		<ul class="breadcrumb position-right">
			<li>
			<a href="{{route('sewa.index')}}">Home</a>
			</li>
			<li>
			<a href="sewa">Sewa Kost</a>
			</li>
			<li class="active">Daftar Sewa</li>
		</ul>
	</div>
</div>
<div class="content">
	<div class="panel panel-flat border-top-lg border-top-primary">
		<div class="panel-body">
			<table class="table table-bordered">
			</table>
		</div>
	</div>
</div>
<div class="content">
	<div class="panel panel-flat border-top-primary">
		<div class="panel-body">
			<div class="col-lg-12">
				<table class="table table-bordered">
					cek
				</table>
			</div>
			<div class="col-lg-12">
				<table class="table table-borderes">
					<thead>
						<tr><th>#</th><th>fasilitas</th><th>status</th><th>harga sewa</th></tr>
					</thead>
					<tbody>
						@foreach ($sewakost as $in=>$val)
					<tr><td></td><td>{{$val->id_kamar}}</td><td>{{$val->fasilitas}}</td><td>{{$val->status}}</td><td>{{$val->harga_sewa}}</td></tr>
						@endforeach
					</tbody>
				</table>
				{{$sewakost->links()}}
			</div>
		</div>
	</div>
</div>
@endsection