@extends('layouts.template') 
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('level') }}" class="form-horizontal"> @csrf
                <div class="form-group row"> 
                    <label class="col-3 control-label col-form-label">Level Code</label>
                    <div class="col-9"> 
                        <input type="text" class="form-control" id="level_code" name="level_code" value="{{ old('level_code') }}" required> 
                        @error('level_code')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row"> 
                    <label class="col-3 control-label col-form-label">Nama Level</label>
                    <div class="col-9"> 
                        <input type="text" class="form-control" id="level_name" name="level_name" value="{{ old('level_name') }}" required> 
                        @error('level_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row"> 
                    <label class="col-3 control-label col-form-label"></label>
                    <div class="col-9"> 
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button> 
                        <a class="btn btn-sm btn-default ml-1" href="{{ url('level') }}">Kembali</a> 
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('css')
@endpush

@push('js')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var levelNameInput = document.getElementById('level_name');

        levelNameInput.addEventListener('input', function () {
            this.value = this.value.replace(/\d+/g, '');
        });
    });
</script>
@endpush
