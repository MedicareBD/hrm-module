@extends('core::layouts.admin.app')

@section('title', __('Create designation'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>{{ __('Add Designation') }}</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.employees.index') }}" class="btn btn-primary">
                            <i class="fas fa-list"></i> {{ __('Designations List') }}
                        </a>
                    </div>
                </div>
                <div class="card-body">


                    <form action="https://pharmacyv5.bdtask.com/pharmacare-9.4_demo/employee/add_employee/"
                        enctype="multipart/form-data" method="post" accept-charset="utf-8"
                        data-select2-id="select2-data-9-eajc">
                        <input type="hidden" name="app_csrf" value="3b6e9d9117d5cba1d2e237fdaaeca74e">

                        <input type="hidden" name="employee_id" value="" style="display:none;">

                        <div class="form-group row">

                            <label for="firstname" class="col-md-2 text-right col-form-label">First Name <i
                                    class="text-danger"> * </i>:</label>
                            <div class="col-md-4">
                                <div class="">

                                    <input type="text" name="firstname" class="form-control" id="firstname"
                                        placeholder="First Name" value="">
                                </div>

                            </div>

                            <label for="lastname" class="col-md-2 text-right col-form-label">Last Name <i
                                    class="text-danger"> * </i>:</label>
                            <div class="col-md-4">
                                <div class="">

                                    <input type="text" name="lastname" class="form-control" id="lastname"
                                        placeholder="Last Name" value="">


                                </div>

                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="designation" class="col-md-2 text-right col-form-label">Designation <i
                                    class="text-danger"> * </i>:</label>
                            <div class="col-md-4" data-select2-id="select2-data-8-jrhc">
                                <div class="" data-select2-id="select2-data-7-wgoh">

                                    <select name="designation_id" class="form-control select2 select2-hidden-accessible"
                                        data-select2-id="select2-data-1-peto" tabindex="-1" aria-hidden="true">
                                        <option value="" selected="selected" data-select2-id="select2-data-3-ldj1">
                                            Select Designation</option>
                                        <option value="1" data-select2-id="select2-data-11-dzq9">Service provider
                                        </option>
                                        <option value="2" data-select2-id="select2-data-12-ougd">Sales Person</option>
                                        <option value="3" data-select2-id="select2-data-13-qjdd">Cleaner </option>
                                        <option value="4" data-select2-id="select2-data-14-mwfo">Manager</option>
                                    </select><span
                                        class="select2 select2-container select2-container--default select2-container--below"
                                        dir="ltr" data-select2-id="select2-data-2-vqqt" style="width: 357.771px;"><span
                                            class="selection"><span class="select2-selection select2-selection--single"
                                                role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                aria-disabled="false"
                                                aria-labelledby="select2-designation_id-in-container"><span
                                                    class="select2-selection__rendered"
                                                    id="select2-designation_id-in-container" role="textbox"
                                                    aria-readonly="true" title="Select Designation">Select
                                                    Designation</span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>

                                </div>

                            </div>
                            <label for="phone" class="col-md-2 text-right col-form-label">Phone<i class="text-danger"> *
                                </i>:</label>
                            <div class="col-md-4">
                                <div class="">

                                    <input type="text" class="form-control valid_number" name="phone" id="phone"
                                        placeholder="Phone" value="">

                                </div>

                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="rate_type" class="col-md-2 text-right col-form-label">Rate Type<i
                                    class="text-danger"> * </i>:</label>
                            <div class="col-md-4">
                                <div class="">


                                    <select class="form-control select2 select2-hidden-accessible" name="rate_type"
                                        id="rate_type" data-select2-id="select2-data-rate_type" tabindex="-1"
                                        aria-hidden="true">
                                        <option value="" data-select2-id="select2-data-5-qkg7">Select Option
                                        </option>}
                                        <option value="1">Hourly</option>
                                        <option value="2">Salary</option>
                                    </select><span class="select2 select2-container select2-container--default"
                                        dir="ltr" data-select2-id="select2-data-4-tgqp"
                                        style="width: 357.771px;"><span class="selection"><span
                                                class="select2-selection select2-selection--single" role="combobox"
                                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                aria-disabled="false" aria-labelledby="select2-rate_type-container"><span
                                                    class="select2-selection__rendered" id="select2-rate_type-container"
                                                    role="textbox" aria-readonly="true" title="Select Option">Select
                                                    Option</span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>

                                </div>

                            </div>

                            <label for="hour_rate" class="col-md-2 text-right col-form-label">Hour Rate/Salary <i
                                    class="text-danger"> * </i>:</label>
                            <div class="col-md-4">
                                <div class="">

                                    <input type="text" class="form-control valid_number" name="hrate"
                                        id="hrate" placeholder="Hour Rate/Salary" value="">

                                </div>

                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-2 text-right col-form-label">Email:</label>
                            <div class="col-md-4">
                                <div class="">

                                    <input class="form-control" id="email" type="email" name="email"
                                        placeholder="Email" value="">

                                </div>

                            </div>
                            <label for="blood_group" class="col-md-2 text-right col-form-label">Blood Group:</label>
                            <div class="col-md-4">
                                <input type="text" name="blood_group" class="form-control" id="blood_group" placeholder="Blood Group" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address_line_1" class="col-md-2 text-right col-form-label">{{ __('Address Line 1') }}<i class="text-danger"> </i>:</label>
                            <div class="col-md-4">
                                <textarea name="address_line_1" id="address_line_1" class="form-control"></textarea>
                            </div>

                            <label for="address_line_2" class="col-md-2 text-right col-form-label">{{ __('Address Line 2') }}<i class="text-danger"> </i>:</label>
                            <div class="col-md-4">
                                <textarea name="address_line_2" id="address_line_1" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="country" class="col-md-2 text-right col-form-label">{{ __('Country') }}:</label>
                            <div class="col-md-4">
                                <input type="text" name="country" class="form-control" id="country" placeholder="{{ __('Country') }}" value="">
                            </div>
                            <label for="image" class="col-md-2 text-right col-form-label">{{ __('Image') }}:</label>
                            <div class="col-md-4">
                                <div class="">
                                    <input name="image" type="file" class="form-control" id="image" placeholder="{{ __("Image") }}" value="">
                                    <input name="old_image" type="hidden" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city" class="col-md-2 text-right col-form-label">{{ __('City') }}:</label>
                            <div class="col-md-4">
                                <div class="">
                                    <input type="text" name="city" class="form-control" id="country" placeholder="City" value="">
                                </div>
                            </div>
                            <label for="zip" class="col-md-2 text-right col-form-label">{{ __('Zip') }}:</label>
                            <div class="col-md-4">
                                <input name="zip" type="text" class="form-control" id="zip" placeholder="{{ __('Zip') }}" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-2 text-right col-form-label">{{ __("Status") }} <i  class="text-danger"> * </i>:</label>
                            <div class="col-md-4">
                                <div class="">
                                    <label class="radio-inline my-2">
                                        <input type="radio" name="status" value="1" checked="checked"
                                            id="status">
                                        {{ __('Active') }}
                                    </label>
                                    <label class="radio-inline my-2">
                                        <input type="radio" name="status" value="0" id="status">
                                        {{ __('Inactive') }}
                                    </label>
                                </div>
                            </div>
                            <label for="preview" class="col-md-2 text-right col-form-label">{{ __('Preview') }}:</label>
                            <div class="col-md-4">
                                <div class="">
                                    <img id="blah" class="img-thambnail" src="https://pharmacyv5.bdtask.com/pharmacare-9.4_demo/assets/dist/img/employee/employee.jpg" alt="your image" height="70px" width="70px;">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 text-right">
                                <button class="btn btn-primary waves-effect waves-light float-right submit-button">
                                    <i class="fas fa-save"></i>
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
