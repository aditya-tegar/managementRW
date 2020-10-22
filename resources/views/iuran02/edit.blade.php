@extends('adminlte.layouts.app')

@section('title', 'Edit Iuran RT 02')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-10">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Edit Iuran RT 02</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('iuran02.update', $iuran02->id) }}" method="POST">
                    {{ method_field('PUT') }}
		    		@csrf
                    <div class="form-group row">
                        <label for="jenis_iuran" class="col-md-3 col-form-label text-md-right">{{ __('Jenis Iuran') }}</label>

                        <div class="col-md-7">
                            <select class="form-control selec2bs4" name="jenis_iuran" id="jenis_iuran">
                                <option value="Pilih">Pilih</option>
                                <option value="K3">K3</option>
                                <option value="Kas">Kas</option>
                                <option value="Dana Sosial">Dana Sosial</option>
                              </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nominal" class="col-md-3 col-form-label text-md-right">{{ __('Nominal') }}</label>

                        <div class="col-md-7">
                            <select class="form-control selec2bs4" name="nominal" id="nominal">
                                <option value="Pilih">Pilih</option>
                                <option value="20000">20000-K3</option>
                                <option value="5000">5000-Kas</option>
                                <option value="10000">10000-Dana Sosial</option>
                              </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="keterangan" class="col-md-3 col-form-label text-md-right">{{ __('Keterangan') }}</label>

                        <div class="col-md-7">
                            <input id="keterangan" type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ $iuran02->keterangan }}" required autocomplete="keterangan" autofocus>

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