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
                                <h1 class="h4 text-gray-900 mb-4">{{ __('New Leader') }}</h1>
                            </div>

                            <form class="user" action="{{route('admin.leaders.store')}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label for="exampleFirstName">{{ __('Name') }}</label>
                                        <input type="text"
                                               class="form-control form-control-user @error('name')is-invalid @enderror"
                                               id="exampleFirstName"
                                               value="{{ old('name') }}"
                                               placeholder="{{ __('Enter your name here') }}" name="name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label for="poste">{{ __('Poste') }}</label>
                                        <input type="text"
                                               class="form-control form-control-user @error("poste")is-invalid @enderror"
                                               id="poste"
                                               value="{{ old("poste") }}"
                                               placeholder="{{ __('Enter your poste here') }}" name="poste">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label for="linkedin">{{ __('Linkedin link') }}</label>
                                        <input type="text"
                                               class="form-control form-control-user @error('linkedin')is-invalid @enderror"
                                               id="linkedin"
                                               value="{{ old('linkedin') }}"
                                               placeholder="{{ __('Example: https://linkedind/user_12') }}" name="linkedin">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label for="image">Image</label>
                                        <input type="file" name="photo" id="image"
                                               class="form-control @error('photo')is-invalid @enderror">
                                    </div>
                                </div>

                                <hr>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-user px-5">
                                        {{ __('Register') }}
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
