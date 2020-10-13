@extends('adminlte.layouts.app')

@section('title', 'Create Warga')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-8">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Create RT</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('datarw03.store') }}" method="POST">
		    		@csrf
                        {{-- <div class="form-group row">
                            <label for="no_ktp" class="col-md-3 col-form-label text-md-right">{{ __('No RT') }}</label>
                            <div class="col-md-7">
                                <input id="no_ktp" type="number" name="no_ktp" class="form-control @error('no_ktp') is-invalid @enderror" name="no_ktp" value="{{ old('no_ktp') }}" required autocomplete="no_ktp" autofocus>
    
                                @error('no_ktp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div> --}}

                    <div class="form-group row">
                        <label for="nama_warga" class="col-md-3 col-form-label text-md-right">{{ __('RT') }}</label>
                        <div class="col-md-7">
                            <input id="nama_warga" type="text" name="nama_warga" class="form-control @error('nama_warga') is-invalid @enderror" name="nama_warga" value="{{ old('nama_warga') }}" required autocomplete="nama_warga" autofocus>

                            @error('nama_warga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-md-3 col-form-label text-md-right">{{ __('Nama Ketua RT') }}</label>

                        <div class="col-md-7">
                            <input id="alamat" type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="no_telepon" class="col-md-3 col-form-label text-md-right">{{ __('No Telepon') }}</label>

                        <div class="col-md-7">
                            <input id="no_telepon" type="text" name="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon" value="{{ old('no_telepon') }}" required autocomplete="no_telepon" autofocus>

                            @error('no_telepon')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Save') }}
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
<script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $('.select2bs4').select2({
            theme: 'bootstrap4',
            
        });

        bsCustomFileInput.init();
    });
</script>
@endpush

