@extends('adminlte.layouts.app')

@section('title', 'Laporan Surat')

{{-- Custom CSS --}}
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-12">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Laporan Surat</h3>
		    </div>
		    <div class="card-body">
		    	<p>
		    		{{-- <a href="{{ route('surat01.create') }}" class="btn btn-primary">Tambah Data</a> --}}
		    	</p>
		    	<table class="table" id="example1">
		    		<thead>
		    			<tr>
		    				<th>Tanggal</th>
							<th>File</th>
							<th>Keterangan</th>
							<th></th>
							{{-- <th>Action</> --}}
		    			</tr>
		    		</thead>
		    		<tbody>
		    			@foreach($surat03 as $data)
		    			<tr>
		    				<td>{{ $data->created_at->toDateString() }}</td>
							<td><a href="{{ route('surat03.download', $data->id) }}" target="_blank">Download File</a></td>
		    				<td>{{ $data->keterangan }}</td>
		    				{{-- <td>
								<a class="btn btn-warning btn-sm" href="{{ route('surat01.edit', $data->id) }}" data-toggle="tooltip" title="Edit">
									<i class="fas fa-pencil-alt"></i>
								</a>
								<a class="btn btn-danger btn-sm" href="#"
									onclick="event.preventDefault();document.getElementById('delete-form').submit();">
									<i class="fas fa-trash"></i>
								</a>

								<form id="delete-form" action="{{ route('surat01.destroy', $data->id) }}" method="POST" style="display: none;"> --}}
									@csrf
									@method('DELETE')
								</form>
							</td>
		    			</tr>
		    			@endforeach
		    		</tbody>
		    	</table>
		    </div>
		</div>
	</div>
</div>
@endsection
@push('js')
<!-- DataTables -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

<script>
    $(function () {
      $("#example1").DataTable({
        "columnDefs": [
            { "width": "10%", "targets": -1 }
        ]
      });
    });
</script>
@endpush