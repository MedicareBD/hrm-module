@extends('core::layouts.admin.app')

@section('title', __('Edit designation'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>{{ __("Edit designation") }}</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.designations.index') }}" class="btn btn-primary">
                            <i class="fas fa-list"></i> {{ __('Designations List') }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.designations.update', $designations->id) }}" method="post" class="instant_reload_form">
                        @method('PUT')

                        <div class="form-group row">
                            <label for="designation_name" class="col-sm-2 col-form-label">{{ __('Designation Name') }}
                                <i class="text-danger">*</i>
                            </label>
                            <div class="col-sm-5">
                                <input name="designation_name" class="form-control" type="text" placeholder="{{ __('Designation Name') }}" id="designation_name" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="details" class="col-sm-2 col-form-label">{{ __('Details') }} <i class="text-danger"></i></label>
                            <div class="col-sm-5">
                                <textarea name="details" class="form-control" type="text" placeholder="Details" id="details"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-7 text-right">
                                <button class="btn btn-primary waves-effect waves-light float-right submit-button mt-3">
                                    <i class="fas fa-save"></i>
                                    {{ __("Update") }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
