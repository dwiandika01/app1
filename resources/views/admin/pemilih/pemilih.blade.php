@extends('template._master')
@section('judul_halaman','Pemilih')
@section('konten')
	<div class="card">
	  <div class="card-body">
		<h4 class="card-title">Daftar Pemilih</h4>
		<div class="row">
			<div class="col-sm-4 col-md-8"></div>
			<div class="col-sm-4 col-md-8">
				<div id="order-listing_filter" class="dataTables_filter">
					<form action="/admin/voters/cari" method="POST">
						{{ csrf_field() }}
						<label>
							<input type="search" name="cari" class="form-control form-control-sm" placeholder="Cari" aria-controls="order-listing">
						</label>
						<button type="submit" class="btn btn-primary ml-2">Cari</button></a>
						<a href="{{ route('admin.voters.tambah') }}"><button type="button" class="btn btn-primary ml-2">Tambah Data</button></a>
						<a href="{{ route('admin.voters.hapus') }}"><button type="button" class="btn btn-danger ml-2">Hapus Akun</button></a>
						<a href="{{ route('admin.voters.export_excel') }}"><button type="button" class="btn btn-success ml-2">Export Excel</button></a>
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="table-responsive">
					<table id="order-listing" class="table">
					<thead>
						<tr>
						<th>#</th>
						<th>Token</th>
						<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=1; ?>
						@foreach($pemilih as $data)
						<tr>
							<td>{{ $i++ }}</td>
							<td>{{ $data->username }}</td>
							<td>
								<label class="badge 
								@if ($data->nama === "Belum Voting")
									badge-danger
								@elseif ($data->nama === "Sudah Voting")
									badge-success
								@endif
									">{{ $data->nama }}</label>
							</td>
						</tr>
						@endforeach
					</tbody>
					</table>
				</div>
			</div>
		</div>
	  </div>
	</div>
@endsection