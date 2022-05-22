@extends('layouts.Backend')

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
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">{{ __('Profile') }}</h1>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-5 col-md-5">
                                    @if(isset(Auth::user()->profile))
                                        <img width="100%" src="{{ asset('storage/'.Auth::user()->profile) }}" alt="">
                                    @else
                                        No Profile Picture
                                    @endif

                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="p-1">{{ __('Name') }}
                                        : {{ Auth::user()->name }}
                                    </div>
                                    <hr>
                                    <div class="p-1">Email
                                        : {{ Auth::user()->email }}
                                    </div>
                                    <hr>
                                    <div class="p-1">Telephone
                                        : {{ Auth::user()->Telephone }}
                                    </div>
                                    <hr>
                                    <div class="p-1">Address
                                        : {{ Auth::user()->address }}
                                    </div>
                                    <hr>

                                </div>
                            </div>

                            <div class="text-center">
                                <a href="{{ route('auth.profile.edit') }}" type="submit" class="btn btn-primary btn-user px-5">
                                    {{ __('Update') }}
                                </a>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
