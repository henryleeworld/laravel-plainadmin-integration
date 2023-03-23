@extends('layouts.app')
@section('content')
<div class="title-wrapper pt-30">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="title mb-30">
                <h2>{{ trans('global.edit') }} {{ trans('cruds.role.title_singular') }}</h2>
            </div>
        </div>
    </div>
</div>
<div class="card-styles">
    <div class="card-style-3 mb-30">
        <div class="card-content">
            <form action="{{ route("admin.roles.update", [$role->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name" class="form-label">{{ trans('cruds.role.fields.title') }}*</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($role) ? $role->name : '') }}" required>
                    @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.role.fields.title_helper') }}
                    </p>
                </div>
                <div class="form-group {{ $errors->has('permission') ? 'has-error' : '' }}">
                    <label for="permission" class="form-label">{{ trans('cruds.role.fields.permissions') }}*
                        <span class="btn btn-info btn-sm select-all">{{ trans('global.select_all') }}</span>
                        <span class="btn btn-info btn-sm deselect-all">{{ trans('global.deselect_all') }}</span>
                    </label>
                    <select name="permission[]" id="permission" class="form-select select2" multiple="multiple" required>
                        @foreach($permissions as $id => $permissions)
                        <option value="{{ $id }}" {{ (in_array($id, old('permissions', [])) || isset($role) && $role->permissions()->pluck('name', 'id')->contains($id)) ? 'selected' : '' }}>{{ $permissions }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('permission'))
                    <em class="invalid-feedback">
                        {{ $errors->first('permission') }}
                    </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.role.fields.permissions_helper') }}
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