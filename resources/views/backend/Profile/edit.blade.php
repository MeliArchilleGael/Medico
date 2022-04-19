@extends('layouts.Backend')

@section('title','User information')

@section('sidebar')
    @if(Auth::check())
        @if(Auth::user()->role->name=='Admin')
            @include('layouts.includes.Backend.AdminSideBar')
        @elseif(Auth::user()->role->name=='Client')
            @include('layouts.includes.Backend.ClientSideBar')
        @elseif(Auth::user()->role->name == 'Partner')
            @include('layouts.includes.Backend.PartnerSideBar')
        @endif
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
                                <h1 class="h4 text-gray-900 mb-4">{{ __('Update Account Information') }}</h1>
                            </div>
                            <form enctype="multipart/form-data" class="user" action="{{route('auth.profile.update')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label for="exampleFirstName">{{ __('Name') }}</label>
                                        <input type="text" class="form-control form-control-user @error('first_name')is-invalid @enderror" id="exampleFirstName"
                                               value="{{ $user->name }}" placeholder="{{ __('Enter the name here') }}" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="exampleInputEmail">Email</label>
                                        <input type="email" name="email" class="form-control form-control-user @error('email')is-invalid @enderror" id="exampleInputEmail"
                                               value="{{ $user->email }}" placeholder="Email">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" class="@error('address')is-invalid @enderror form-control form-control-user" id="address"
                                               value="{{ $user->address }}" placeholder="Address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="telephone">Telephone</label>
                                        <input type="text" name="telephone" @error('telephone')is-invalid @enderror class="form-control form-control-user" id="telephone"
                                               value="{{ $user->telephone }}" placeholder="Telephone">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="profile_url"> Profile Image </label>
                                        <input class="form-control" type="file" id="profile_url" name="profile" value="{{ $user->profile }}">
                                    </div>
                                </div>

                                <hr>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-user px-5">
                                        {{ __('messages.backend.update') }}
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

    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">{{ __('messages.update_password') }}</h1>
                            </div>
                            <form class="user" action="{{route('auth.profile.updatePassword', $user)}}"
                                  method="POST">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-sm-12 mb-12 mb-sm-0">
                                        <label for="exampleInputPassword">{{ __('messages.old_password') }}</label>
                                        <input type="password" class="form-control form-control-user"
                                               name="old_password" id="exampleInputPassword" placeholder="{{ __('messages.old_password') }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="exampleInputPassword">{{ __('messages.new_password') }}</label>
                                        <input type="password" class="form-control form-control-user"
                                               name="new_password" id="exampleInputPassword" placeholder="{{ __('messages.new_password') }}">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="exampleRepeatPassword">{{ __('messages.confirm_new_password') }}</label>
                                        <input type="password" class="form-control form-control-user" name="new_password_confirmation"
                                               id="exampleRepeatPassword" placeholder="{{ __('messages.confirm_new_password') }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-user px-5">
                                        {{ __('messages.backend.update') }}
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
