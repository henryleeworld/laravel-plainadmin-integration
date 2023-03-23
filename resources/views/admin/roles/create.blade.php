@extends('layouts.app')
@section('content')
<div class="title-wrapper pt-30">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="title mb-30">
                <h2>{{ trans('global.create') }} {{ trans('cruds.role.title_singular') }}</h2>
            </div>
        </div>
    </div>
</div>
<div class="card-styles">
    <div class="card-style-3 mb-30">
        <div class="card-content">
            <form action="{{ route("admin.roles.store") }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name" class="col-sm-2 col-form-label">{{ trans('cruds.role.fields.title') }}*</label>
                    <div class="col-sm-10">
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($role) ? $role->name : '') }}" required>
                        @if($errors->has('name'))
                        <em class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </em>
                        @endif
                    </div>
                    <p class="helper-block">
                        {{ trans('cruds.role.fields.title_helper') }}
                    </p>
                </div>
                <div class="mb-3 row {{ $errors->has('permissions') ? 'has-error' : '' }}">
                    <label for="permission" class="col-sm-2 col-form-label">{{ trans('cruds.role.fields.permissions') }}*
                        <span class="btn btn-info btn-sm select-all">{{ trans('global.select_all') }}</span>
                        <span class="btn btn-info btn-sm deselect-all">{{ trans('global.deselect_all') }}</span>
                    </label>
                    <div class="col-sm-10">
                        <select name="permission[]" id="permission" class="form-select select2" style="width: 100%;"  multiple="multiple" required>
                            @foreach($permissions as $id => $permissions)
                            <option value="{{ $id }}" {{ (in_array($id, old('permission', [])) || isset($role) && $role->permissions->contains($id)) ? 'selected' : '' }}>{{ $permissions }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('permission'))
                        <em class="invalid-feedback">
                            {{ $errors->first('permission') }}
                        </em>
                        @endif
                    </div>
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