@extends('adminlte.layouts.app')

@section('title', 'Create Iuran')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-8">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Create Iuran RT 01</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('iuran01.store') }}" method="POST">
                    @csrf
                    
                    <div class="form-group row">
                        <label for="nama_warga" class="col-md-3 col-form-label text-md-right">{{ __('Nama Warga') }}</label>

                        <div class="col-md-7">
                            <select class="form-control selec2bs4 @error('nama_warga') is-invalid @enderror"
                                style="width: 100%" name="warga01" required>
                                <option disabled selected>Pilih</option>
                                @foreach ($warga01 as $data)
                                    <option value="{{ $data->id }}">
                                        {{$data->nama_warga}}
                                    </option>         
                                @endforeach
                            </select>

                            @error('nama_warga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-md-3 col-form-label text-md-right">{{ __('Alamat') }}</label>

                        <div class="col-md-7">
                            <select class="form-control selec2bs4 @error('alamat') is-invalid @enderror"
                                style="width: 100%" name="warga01" required>
                                <option disabled selected>Pilih</option>
                                @foreach ($warga01 as $data)
                                    <option value="{{ $data->id }}">
                                        {{$data->alamat}}
                                    </option>         
                                @endforeach
                            </select>

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
                        <label for="nominal" class="col-md-3 col-form-label text-md-right">{{ __('Nominal') }}</label>

                        <div class="col-md-7">
                            <input id="nominal" type="text" name="nominal" class="form-control @error('nominal') is-invalid @enderror" name="nominal" value="{{ old('nominal') }}" required autocomplete="nominal" autofocus>

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
                            <input id="keterangan" type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}" required autocomplete="keterangan" autofocus>

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

