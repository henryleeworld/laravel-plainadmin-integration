@extends('layouts.app')
@section('content')
<div class="title-wrapper pt-30">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="title mb-30">
                <h2>{{ trans('global.create') }} {{ trans('cruds.permission.title_singular') }}</h2>
            </div>
        </div>
    </div>
</div>
<div class="card-styles">
    <div class="card-style-3 mb-30">
        <div class="card-content">
            <form action="{{ route("admin.permissions.store") }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name" class="col-sm-2 col-form-label">{{ trans('cruds.permission.fields.title') }}*</label>
                    <div class="col-sm-10">
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($permission) ? $permission->name : '') }}" required>
                        @if($errors->has('name'))
                        <em class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </em>
                        @endif
                    </div>
                    <p class="helper-block">
                        {{ trans('cruds.permission.fields.title_helper') }}
                    </p>
                </div>
                <div>
                    <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection