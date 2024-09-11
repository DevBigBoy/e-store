@extends('layouts.master')

@section('title', 'Profile')

@section('breadcrumb-title', 'Create Product')


@push('scripts')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endpush


@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard.products.index') }}">Profile</a>
    </li>
    <li class="breadcrumb-item active">
        Edit
    </li>
@endsection

@section('content')

    <div class="row">
        <div class="col-11 m-auto">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('dashboard') }}" class="btn btn-warning">
                        <i class="fas fa-arrow-left"></i>
                        Back
                    </a>
                </div>
                <!-- /.card-header -->

                <form method="POST" action="{{ route('dashboard.profile.update') }}">
                    @csrf
                    @method('PATCH')

                    <x-input-error />

                    <x-alert type="success" />

                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="f_name">First Name</label>
                                <input type="text" @class(['form-control', 'is-invalid' => $errors->has('first_name')]) value="{{ $user->profile->first_name }}"
                                    id="f_name" name="first_name" />

                            </div>

                            <div class="form-group col-6">
                                <label for="l_name">Last Name</label>
                                <input type="text" @class(['form-control', 'is-invalid' => $errors->has('last_name')]) value="{{ $user->profile->last_name }}"
                                    id="l_name" placeholder="Last Name" name="last_name" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="datetimepicker">birthday</label>

                                <input type="text" value="{{ $user->profile->birthday }}" @class(['form-control', 'is-invalid' => $errors->has('birthday')])
                                    id="datetimepicker" name="birthday" />

                                @error('birthday')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-6">
                                <label>Gender</label>
                                <select @class(['form-control', 'is-invalid' => $errors->has('gender')]) name="gender">
                                    <option value="">Choose--</option>
                                    <option @selected($user->profile->gender == 'male') value="male">Male
                                    </option>
                                    <option @selected($user->profile->gender == 'female') value="female">Female</option>
                                </select>

                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-4">
                                <label for="city">city</label>
                                <input type="text" @class(['form-control', 'is-invalid' => $errors->has('city')]) id="city" placeholder="City"
                                    name="city" value="{{ $user->profile->city }}">

                            </div>
                            <div class="form-group col-4">

                                <label for="country">country</label>
                                <select @class(['form-control', 'is-invalid' => $errors->has('country')]) name="country">
                                    @foreach ($countries as $c => $country)
                                        <option @selected($user->profile->country == $c) value="{{ $c }}">{{ $country }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-4">
                                <label for="state">state</label>
                                <input type="text" @class(['form-control', 'is-invalid' => $errors->has('state')]) id="state" placeholder="state "
                                    name="state" value="{{ $user->profile->state }}">

                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-2">
                                <label>local</label>
                                <select class="form-control" name="local">

                                    @foreach ($locales as $l => $local)
                                        <option @selected($user->profile->local == $l) value="{{ $l }}">
                                            {{ $local }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-7">
                                <label for="address">Street Address</label>
                                <input type="text" @class([
                                    'form-control',
                                    'is-invalid' => $errors->has('street_address'),
                                ]) id="address"
                                    placeholder="Street address" name="street_address"
                                    value="{{ $user->profile->street_address }}">

                            </div>

                            <div class="form-group col-3">
                                <label for="postal_code">postal code</label>
                                <input type="text" @class(['form-control', 'is-invalid' => $errors->has('postal_code')]) id="postal_code"
                                    placeholder="postal code" name="postal_code" value="{{ $user->profile->postal_code }}">
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection

@push('scripts')
    <!-- Include jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Include Moment.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <!-- Include Daterangepicker -->
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script>
        $(function() {
            $('#datetimepicker').daterangepicker({
                singleDatePicker: true, // Only allow picking one date
                autoUpdateInput: false, // Prevent auto update until date is picked
                locale: {
                    format: 'YYYY-MM-DD' // Date-time format
                }
            });

            $('#datetimepicker').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('YYYY-MM-DD')); // Only single date is picked
            });

            $('#datetimepicker').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val(''); // Clear the input if canceled
            });
        });
    </script>
@endpush
