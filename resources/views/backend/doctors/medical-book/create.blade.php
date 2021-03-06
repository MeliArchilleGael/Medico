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
                                <h1 class="h4 text-gray-900 mb-4">{{ __('Register a New Consultation of the patient: ') }} {{ $patient->name }}</h1>
                            </div>

                            <form class="user" action="{{route('doctors.medical-book.store')}}" method="POST">
                                @csrf
                                <input type="hidden" name="patient" value="{{ $patient->id }}">
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                        <label for="exampleFirstName">{{ __('Consultation Name') }}</label><span
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


                                </div>
                                <div class="form-group">
                                    <fieldset>
                                        <legend>Observation of the consultation</legend>
                                        <label for="observations">{{ __('List of Observation') }}</label>
                                        <input type="hidden" id="observations" name="observations" value='[]'>

                                        <div id="observation_list" class="border-left-primary">
                                        </div>

                                        <div class="feature_form">
                                            <label for="observation"></label>
                                            <textarea id="observation" class="form-control"
                                                      placeholder="Enter Observation Here" name="" cols="30"
                                                      rows="5"></textarea>

                                            <button
                                                class="btn btn-primary btn-circle ml-2"
                                                id="add_observation"
                                                onclick="event.preventDefault(); submitForm('observations','observation', 'observation_list')"
                                            >Add
                                            </button>
                                        </div>
                                    </fieldset>
                                </div>

                                <div id="exam_section" class="form-group">
                                    <fieldset>
                                        <legend>Prescribed an exam for this consultation</legend>
                                        <label for="exams">{{ __('List of Exams') }}</label>
                                        <input type="hidden" id="exams" name="exams" value='[]'>

                                        <div id="exam_list" class="border-left-primary">
                                        </div>

                                        <div class="feature_form">
                                            <label for="exam"></label>
                                            <textarea id="exam" class="form-control" placeholder="Enter Exam Here"
                                                      name="" cols="30" rows="5"></textarea>

                                            <button
                                                class="btn btn-primary btn-circle ml-2"
                                                id="exam_button"
                                                onclick="event.preventDefault(); submitForm('exams','exam', 'exam_list')"
                                            >Add
                                            </button>
                                        </div>

                                        <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                            <label for="doctor">{{ __('Doctor (Optional)') }}</label>
                                            <select
                                                class="form-control form-control-user @error('doctor')is-invalid @enderror"
                                                name="doctor" id="doctor"
                                            >
                                                <option value=""> Select the doctor for this exam</option>
                                                @foreach($doctors as $doctor)
                                                    <option value="{{ $doctor->id }}"> {{ $doctor->name }} </option>
                                                @endforeach
                                            </select>
                                            @error('doctor')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </fieldset>
                                </div>

                                <div id="drug_section" class="form-group">
                                    <fieldset>
                                        <legend>Prescribed a Drugs for this consultation</legend>
                                        <label for="drugs">{{ __('List of drugs') }}</label>
                                        <input type="hidden" id="drugs" name="drugs" value='[]'>

                                        <div id="drugs_list" class="border-left-primary">
                                        </div>

                                        <div class="feature_form">
                                            <label for="drug"></label>
                                            <textarea id="drug" class="form-control" placeholder="Enter the name and Dosage of the drug"
                                                      name="" cols="30" rows="5"></textarea>

                                            <button
                                                class="btn btn-primary btn-circle ml-2"
                                                id="drug_button"
                                                onclick="event.preventDefault(); submitForm('drugs','drug', 'drugs_list')"
                                            >Add
                                            </button>
                                        </div>
                                    </fieldset>
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
@section('script')
    <script>
        function selectThis(type){
            let exam_section = document.getElementById('exam_section');
            let drug_section = document.getElementById('drug_section');
            if(type==="1"){
                exam_section.style.display='block';
                drug_section.style.display='none';
            }else{
                drug_section.style.display =  'block';
                exam_section.style.display =  'none';
            }
        }
    </script>
@endsection
