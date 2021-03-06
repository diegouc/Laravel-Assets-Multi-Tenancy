@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        Create tenant
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.tenants.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', '') }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="domain">Domain</label>
                <input class="form-control {{ $errors->has('domain') ? 'is-invalid' : '' }}" type="text" name="domain" id="domain" value="{{ old('domain', '') }}" required>
                @if($errors->has('domain'))
                    <div class="invalid-feedback">
                        {{ $errors->first('domain') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">
                    Create
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
