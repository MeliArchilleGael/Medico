@extends('layouts.Backend')

@section('top_sidebar')
    @include('layouts.includes.PatientTopBar')
@endsection

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="content-between p-1">
                <div class="fw-bolder text-center text-primary">
                    <span style="font-size:20px">List of appointment of the patient: {{ Auth::user()->name }}</span>
                </div>
            </div>
        </div>
        <div class="card-body">
            <section id="appointment" class="appointment section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Make an Appointment</h2>
                        <p>Fill the form to make an appointment with one of ours thousand specialist doctor.</p>
                    </div>

                    <form action="{{ route('patients.appointment.store') }}" method="post" role="form" class="form"
                          data-aos="fade-up"
                          data-aos-delay="100">
                        @csrf
                        {{--<div class="row">
                            <div class="col-md-4 form-group">
                                <label for="name">Name:</label><span style="color: red">  *</span>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                       id="name" value="{{ old('name') }}"
                                       placeholder="Your Name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4 form-group mt-3 mt-md-0">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                       id="email" value="{{ old('email') }}"
                                       placeholder="Your Email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4 form-group mt-3 mt-md-0">
                                <label for="phone">Phone Number</label><span style="color: red">  *</span>
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone"
                                       value="{{ old('phone') }}" id="phone"
                                       placeholder="Your Phone">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>--}}
                        <div class="row">
                            <div class="col-md-4 form-group mt-3">
                                <label for="date">Date and time</label><span style="color: red">  *</span>
                                <input type="datetime-local" name="date_appointment"
                                       class="form-control datepicker @error('date_appointment') is-invalid @enderror"
                                       id="date"
                                       value="{{ old('date_appointment') }}" placeholder="Appointment Date">
                                @error('date_appointment')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4 form-group mt-3">
                                <label for="doctor">Select the doctor</label><span style="color: red">  *</span>
                                <select name="doctor_id" id="doctor" class="form-control">
                                    <option selected disabled value="">Select Doctor</option>
                                    @foreach($doctors as $doctor)
                                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                    @endforeach
                                </select>
                                @error('doctor_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mt-3">
                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5"
                                  placeholder="Message (Optional)">{{ old('message') }}</textarea>
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="text-center pt-3">
                            <button type="submit" class=" btn btn-warning">Make an Appointment</button>
                        </div>
                    </form>

                </div>
            </section><!-- End Appointment Section -->
        </div>
    </div>

@endsection

@section('script')
    <script>$('#dataTable').DataTable();</script>
@endsection
