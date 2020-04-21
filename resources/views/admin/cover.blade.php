@extends('layout.admin')
@section('content')
<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Daftar Kamar</h3>
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
        </div>							
	</div>
</div>
@endsection