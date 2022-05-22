@extends('layouts.Backend')

@section('top_sidebar')
    @include('layouts.includes.DoctorTopBar')
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
                                <h1 class="h4 text-gray-900 mb-4">{{ __('Register the result of the exam: ') }} {{ $exam->name }}</h1>
                            </div>

                            <form class="user" action="{{route('doctors.exam.update', $exam->id)}}"
                                  method="POST">
                                @method("PATCH")
                                @csrf

                                <div class="form-group">
                                    <label for="result">Result</label>
                                    <select name="result" class="form-control form-control-user @error('result')is-invalid @enderror" id="result">
                                        <option selected disabled value="">Select the result </option>
                                        <option value="Positive">Positive</option>
                                        <option value="Negative">Negative</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="observations">{{ __('Observation') }}</label>
                                    <textarea id="observations"
                                           name="observation"
                                              class="form-control form-control-user"
                                              cols="30" rows="5"
                                           >{{ $exam->observation }}</textarea>
                                </div>

                                <hr>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-user px-5">
                                        {{ __('Update') }}
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

@section('script')
    <script>

    </script>
@endsection

