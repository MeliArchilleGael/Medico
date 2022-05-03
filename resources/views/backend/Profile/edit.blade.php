@extends('layouts.Backend')

@section('title','User information')

{{--@section('sidebar')
    @include('layouts.includes.ConsultantTopBar')
@endsection--}}

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
                                <h1 class="h4 text-gray-900 mb-4">{{ __('Update Account Information') }}</h1>
                            </div>
                            <form enctype="multipart/form-data" class="user" action="{{route('auth.profile.update')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label for="exampleFirstName">{{ __('Name') }}</label>
                                        <input type="text" class="form-control form-control-user @error('first_name')is-invalid @enderror" id="exampleFirstName"
                                               value="{{ Auth::user()->name }}" placeholder="{{ __('Enter the name here') }}" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="exampleInputEmail">Email</label>
                                        <input type="email" name="email" class="form-control form-control-user @error('email')is-invalid @enderror" id="exampleInputEmail"
                                               value="{{ Auth::user()->email }}" placeholder="Email">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" class="@error('address')is-invalid @enderror form-control form-control-user" id="address"
                                               value="{{ Auth::user()->address }}" placeholder="Address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="telephone">Telephone</label>
                                        <input type="text" name="telephone" @error('telephone')is-invalid @enderror class="form-control form-control-user" id="telephone"
                                               value="{{ Auth::user()->telephone }}" placeholder="Telephone">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="profile_url"> Profile Image </label>
                                        <input class="form-control" type="file" id="profile_url" name="profile" value="{{ Auth::user()->profile }}">
                                    </div>
                                </div>

                                <hr>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-user px-5">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 5rem;">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">{{ __('Update password') }}</h1>
                            </div>
                            <form class="user" action="{{route('auth.profile.updatePassword', Auth::user() )}}"
                                  method="POST">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-sm-12 mb-12 mb-sm-0">
                                        <label for="exampleInputPassword1">{{ __('Old password') }}</label>
                                        <input type="password" class="form-control form-control-user"
                                               name="old_password" id="exampleInputPassword1" placeholder="{{ __('Old password') }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="exampleInputPassword">{{ __('New password') }}</label>
                                        <input type="password" class="form-control form-control-user"
                                               name="new_password" id="exampleInputPassword" placeholder="{{ __('New password') }}">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="exampleRepeatPassword">{{ __('Confirm new password') }}</label>
                                        <input type="password" class="form-control form-control-user" name="new_password_confirmation"
                                               id="exampleRepeatPassword" placeholder="{{ __('Confirm new password') }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-user px-5">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
