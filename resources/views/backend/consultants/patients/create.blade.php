@extends('layouts.Backend')

@section('top_sidebar')
    @include('layouts.includes.ConsultantTopBar')
@endsection

@section('content')
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">{{ __('Register a New Patient') }}</h1>
                            </div>

                            <form class="user" action="{{route('consultants.patients.store')}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                        <label for="exampleFirstName">{{ __('Name') }}</label><span
                                            style="color:red">*</span>
                                        <input type="text"
                                               class="form-control form-control-user @error('name')is-invalid @enderror"
                                               id="exampleFirstName"
                                               value="{{ old('name') }}"
                                               placeholder="{{ __('Enter your name here') }}" name="name">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                        <label for="address">{{ __('Address') }}</label><span style="color:red">*</span>
                                        <input type="text"
                                               class="form-control form-control-user @error('address')is-invalid @enderror"
                                               id="address"
                                               value="{{ old('address') }}"
                                               placeholder="{{ __('Enter your address here') }}" name="address">
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                        <label for="telephone">{{ __('Telephone') }}</label><span
                                            style="color:red">*</span>
                                        <input type="text"
                                               class="form-control form-control-user @error('telephone')is-invalid @enderror"
                                               id="telephone"
                                               value="{{ old('telephone') }}"
                                               placeholder="{{ __('Enter your telephone number here') }}"
                                               name="telephone">
                                        @error('telephone')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                        <label for="email">{{ __('Email') }}</label>
                                        <input type="email"
                                               class="form-control form-control-user @error('email')is-invalid @enderror"
                                               id="email"
                                               placeholder="generate automatically or enter example: name@medico.con" name="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                        <label for="weight">{{ __('Weight (Kg) ') }}</label>
                                        <input type="number"
                                               class="form-control form-control-user @error('weight')is-invalid @enderror"
                                               id="weight"
                                               value="{{ old('weight') }}"
                                               placeholder="{{ __('Enter your weight here(in Kg)') }}" name="weight">
                                        @error('weight')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                        <label for="height">{{ __('Height (cm) ') }}</label>
                                        <input type="number"
                                               class="form-control form-control-user @error('height')is-invalid @enderror"
                                               id="height"
                                               value="{{ old('height') }}"
                                               placeholder="{{ __('Enter your height here') }}" name="height">
                                        @error('height')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                        <label for="blood_group">{{ __('Blood Group') }}</label>
                                        <select
                                            class="form-control form-control-user @error('blood_group')is-invalid @enderror"
                                            name="blood_group" id="blood_group">
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="A+">A+</option>
                                            <option value="AB">AB</option>
                                            <option value="B">B</option>
                                        </select>

                                        @error('blood_group')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                        <label for="date_of_birth">{{ __('Date of birth') }}</label><span
                                            style="color:red">*</span>
                                        <input type="date"
                                               class="form-control form-control-user @error('date_of_birth')is-invalid @enderror"
                                               id="date_of_birth"
                                               value="{{ old('date_of_birth') }}"
                                               placeholder="{{ __('Enter your Date of birth here') }}"
                                               name="date_of_birth">
                                        @error('date_of_birth')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                        <label for="department">{{ __('Select a department for the Patient') }}</label>
                                        <select
                                            class="form-control form-control-user @error('blood_group')is-invalid @enderror"
                                            name="department_id" id="department">
                                            <option disabled selected value="">Select One ...</option>
                                            @foreach($departments as $department)
                                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                                            @endforeach
                                        </select>

                                        @error('department_id')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <hr>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-user px-5">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
