@extends('admin.main')
@section('title','Kategori Tambah')
@section('content')
<h1>Kategori <small class="text-muted">Tambah</small></h1>
<hr>

<div class="row">
	<div class="col-md-6 mb-3">
		<form method="POST" action="{{ route('admin.kategori.add') }}">
			{{ csrf_field() }}
			<div class="card">
				
				<div class="card-header">
					<h5>Buat Kategori Baru</h5>
				</div><!-- End Card Header-->

			</div><!-- End Card-->
		</form>
	</div>
</div>

@endsection