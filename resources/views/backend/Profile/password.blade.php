@extends('layouts.Backend')

@section('title','User information')

@section('top_sidebar')
    @if(Auth::guard('user')->check())
        @include('layouts.includes.ConsultantTopBar')
    @elseif(Auth::guard('doctor')->check())
        @include('layouts.includes.DoctorTopBar')
    @else
        @include('layouts.includes.PatientTopBar')
    @endif
@endsection

@section('content')

    <div class="container" style="margin-top: 3rem;">
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
