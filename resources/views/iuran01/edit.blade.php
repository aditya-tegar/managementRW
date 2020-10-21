@extends('adminlte.layouts.app')

@section('title', 'Edit Iuran RT 01')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-10">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Edit Iuran RT 01</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('iuran01.update', $iuran01->id) }}" method="POST">
                    {{ method_field('PUT') }}
		    		@csrf
                    {{-- <div class="form-group row">
                        <label for="nama_warga" class="col-md-3 col-form-label text-md-right">{{ __('Nama Warga') }}</label>

                        <div class="col-md-7">
                            <input id="nama_warga" type="text" name="nama_warga" class="form-control @error('nama_warga') is-invalid @enderror" name="nama_warga" value="{{ $iuran01->nama_warga }}" required autocomplete="nama_warga" autofocus>

                            @error('nama_warga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> --}}

                    <div class="form-group row">
                        <label for="nominal" class="col-md-3 col-form-label text-md-right">{{ __('Nominal') }}</label>

                        <div class="col-md-7">
                            <input id="nominal" type="number" name="nominal" class="form-control @error('nominal') is-invalid @enderror" name="nominal" value="{{ old('nominal') }}" required autocomplete="alamat" autofocus>

                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-md-3 col-form-label text-md-right">{{ __('Alamat') }}</label>

                        <div class="col-md-7">
                            <input id="alamat" type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $iuran01->alamat }}" required autocomplete="alamat" autofocus>

                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

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
                        <label for="keterangan" class="col-md-3 col-form-label text-md-right">{{ __('Keterangan') }}</label>

                        <div class="col-md-7">
                            <input id="keterangan" type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ $iuran01->keterangan }}" required autocomplete="keterangan" autofocus>

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