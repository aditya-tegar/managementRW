@extends('adminlte.layouts.app')

@section('title', 'Edit Iuran RW 03')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-10">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Edit Iuran RW 03</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('iuranrw03.update', $iuranrw03->id) }}" method="POST">
                    {{ method_field('PUT') }}
		    		@csrf

                    <div class="form-group row">
                        <label for="nominal" class="col-md-3 col-form-label text-md-right">{{ __('Nominal') }}</label>

                        <div class="col-md-7">
                            <input id="nominal" type="number" name="nominal" class="form-control @error('nominal') is-invalid @enderror" name="nominal" value="{{ $iuranrw03->nominal }}" required autocomplete="nominal" autofocus>

                            @error('nominal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="keterangan" class="col-md-3 col-form-label text-md-right">{{ __('Keterangan') }}</label>

                        <div class="col-md-7">
                            <input id="keterangan" type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ $iuranrw03->keterangan }}" required autocomplete="keterangan" autofocus>

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