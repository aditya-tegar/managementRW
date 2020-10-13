@extends('adminlte.layouts.app')

@section('title', 'Edit Surat RT 03')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-10">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Edit Surat RW 03</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('suratrw03.update', $surat03->id) }}" method="POST" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
		    		@csrf
                    
                    {{-- <div class="form-group row">
                        <label for="nama_warga" class="col-md-3 col-form-label text-md-right">{{ __('Nama Warga') }}</label>

                        <div class="col-md-7">
                            <input id="nama_warga" type="text" name="nama_warga" class="form-control @error('nama_warga') is-invalid @enderror" name="nama_warga" value="{{ $surat01->nama_warga }}" required autocomplete="nama_warga" autofocus>

                            @error('nama_warga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> --}}

                    <div class="form-group row">
                        <label for="file" class="col-md-3 col-form-label text-md-right">{{ __('File') }}</label>

                        <div class="col-md-7">
                            <input id="file" type="file" name="file" class="form-control @error('file') is-invalid @enderror" name="file" value="{{ $surat01->alamat }}" required autocomplete="file" autofocus>

                            @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="keterangan" class="col-md-3 col-form-label text-md-right">{{ __('Keterangan') }}</label>

                        <div class="col-md-7">
                            <input id="keterangan" type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ $surat01->keterangan }}" required autocomplete="keterangan" autofocus>

                            @error('keterangan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
		    	</form>
		    </div>
		</div>
	</div>
</div>
@endsection
@push('js')
@endpush