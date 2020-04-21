@extends('layout.admin')

@section('content')
<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Daftar Penyewa</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-4">
									<div class="panel">
										<div class="panel-heading">
											<h3 class="panel-title">Biodata</h3>			
										</div>
										<div class="panel-body">
											<ul class="list-unstyled todo-list">
												<li>
													<p>
													<span class="title">Nama</span>
													<span class="short-description">I Nengah Mahadwipa Adi Satria</span>
													</p>
												</li>
												<li>
													<p>
													<span class="title">NIM</span>
													<span class="short-description">1815051116</span>
													</p>
												</li>
												<li>
													<p>
														<span class="title">Prodi</span>
														<span class="short-description">Pendidikan Teknik Informatika</span>
													</p>
												</li>									
											</ul>
										</div>
									</div>	
								</div>					
								<div class="col-md-4">
									<div class="panel">
										<div class="panel-heading">
											<h3 class="panel-title"> Studi Kasus</h3>							
										</div>
										<div class="panel-body">
											<ul class="list-unstyled todo-list">
												<li>
													<p>
													<span class="title">Judul</span>
													<span class="short-description">Pengembangan Sistem Pencatatan Pembayaran Kost Berbasis Web</span>
													</p>
												</li>
											</ul>
										</div>
									</div>				
								</div>
								<div class="col-md-4">
									<div class="panel">
										<div class="panel-heading">
											<h3 class="panel-title"> Deskripsi </h3>							
										</div>
										<div class="panel-body">
											<ul class="list-unstyled todo-list">
												<li>
													<p>
													<span class="title">Penjelasan</span>
													<span class="short-description">Sistem ini merupakan sitem untuk manajemen suatu kost-kostan baik itu pengeloalaan kamar, pembayaran dan sebagainya</span>
													</p>
												</li>
											</ul>
										</div>
									</div>				
								</div>
						<div class="panel-body">
								<div class="col-lg-12">
								<a href="{{route('penyewa.create')}}"> Tambah Data </a>

							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Nomor</th>
										<th>Nama</th>
										<th>Nomor Identitas</th>
										<th>Jenis Identitas</th>
                                        <th>Telepon</th>
                                        <th>Alamat</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($penyewa as $i=>$nilai) 
									<tr>
										<td>{{$i+1}}</td>
										<td>{{$nilai->nama}}</td>
                                        <td>{{$nilai->no_identitas}}</td>
                                        <td>{{$nilai->jenis_identitas}}</td>
										<td>{{$nilai->telp}} </td>
                                        <td>{{$nilai->alamat}}</td>
										<td>
											<a href="{{route('penyewa.edit',$nilai->id_penyewa)}}"> Update </a> |
											<form action="{{route('penyewa.destroy',$nilai->id_penyewa)}}" method="POST">
												@csrf
												@method('DELETE')
												<button type="submit">Delete</button>
											</form>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							{{$penyewa->links()}}
							
							</div>
							</div>
							
						</div>
					</div>
@endsection