@extends('layouts.Backend')

@section('top_sidebar')
    @include('layouts.includes.DoctorTopBar')
@endsection

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="content-between p-1">
                <div class="fw-bolder text-center text-primary">
                    <span
                        style="font-size:20px">{{ 'List of Exam prescribe for the consultation:' }} {{ $consultation->name }}</span>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%"
                       cellspacing="0">
                    <thead>
                    <tr>
                        <th class="text-center">S/N</th>
                        <th class="text-center"> Name Exam</th>
                        <th class="text-center"> Prescribed By</th>
                        <th class="text-center"> Observations</th>
                        <th class="text-center"> Status</th>
                        <th class="text-center"> Operation</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th class="text-center">S/N</th>
                        <th class="text-center"> Name Exam</th>
                        <th class="text-center"> Prescribed By</th>
                        <th class="text-center"> Observations</th>
                        <th class="text-center"> Status</th>
                        <th class="text-center"> Operation</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($consultation['prescribedExams'] as $key=>$exam)
                        <tr class="hover:bg-gray-50 text-center">
                            <td class="align-middle">
                                {{ $key+1 }}
                            </td>
                            <td class="align-middle"> {{ $exam->name }} </td>
                            <td class="align-middle"> {{ $consultation->prescribeBy->name }} </td>
                            <td class="align-middle">
                                @foreach($consultation->observations as $observation)
                                    <li>{{ $observation->observation }}</li>
                                @endforeach
                            </td>
                            @if($exam->status==='Not Done')
                                <td class="align-middle"><span class="badge badge-danger">{{ $exam->status }}</span>
                                </td>
                            @else
                                <td class="align-middle"><span class="badge bg-success">{{ $exam->status }}</span></td>
                            @endif


                            <td class="align-middle">
                                <a href="#" data-toggle="modal" data-target="{{ '#showModal'.$key }}"
                                   class="btn btn-warning">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('doctors.exam.edit', $exam) }}"
                                   class="btn btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                {{--<a href="{{ route('consultants.medical-book.show', $patient) }}"
                                   class="btn btn-info">
                                    <i class="fa fa-folder-open"></i>
                                </a>--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- delete Modal-->
        <div class="modal fade" id="{{ 'showModal'.$key }}" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header align-content-center">
                        <div class="modal-title"
                             id="exampleModalLabel">{{ __('More about the Consultation of the client ') }}</div>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span class="text-danger" aria-hidden="true">??</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <strong> {{ __('About the consultation') }} </strong>
                        <hr>
                        <ul class="list-unstyled ml-3">
                            <li>Name: {{ $consultation->name }}</li>
                            <li>Date: {{ $consultation->date_consultation }}</li>
                            <li>Done by the : {{ $consultation->role_prescrisber }}: {{ $consultation->done_by }}</li>
                            <li>Status: {{ $consultation->status }} </li>
                        </ul>
                        <hr>
                        <strong> {{ __('Observation') }} </strong>
                        <ul class="list-unstyled ml-3">
                            @if($consultation['observations']->isEmpty())
                                No Observation found for this consultation
                            @else
                                @foreach($consultation['observations'] as $observation)
                                    <li>Name: <strong>{{ $observation->observation }}</strong></li>
                                    <br>
                                @endforeach
                            @endif
                        </ul>
                        <hr>
                        <strong> {{ __('Exams Prescribed') }} </strong>
                        <ul class="list-unstyled ml-3">
                            @if($consultation['prescribedExams']->isEmpty())
                                No Prescribed exams found for this consultation
                            @else
                                @foreach($consultation['prescribedExams'] as $exam)
                                    <li>Name: <strong>{{ $exam->name }}</strong></li>
                                    <li>Status: <strong>{{ $exam->status }}</strong></li>
                                    <li>Result: <strong>{{ $exam->result }}</strong></li>
                                    <li>Observation: <strong>{{ $exam->observation }}</strong></li>
                                    <br>
                                @endforeach
                            @endif
                        </ul>
                        <hr>


                        <strong> {{ __('Drugs Prescribed') }}  </strong>
                        <ul class="list-unstyled ml-3">
                            @if($consultation['prescribedDrugs']->isEmpty())
                                Not Drugs Prescribed for this consultation
                            @else
                                @foreach($consultation['prescribedDrugs'] as $exam)
                                    <li>Name: <strong>{{ $exam->name }}</strong></li>
                                    <li>Status: <strong>{{ $exam->status }}</strong></li>
                                    <li>Observation: <strong>{{ $exam->observation }}</strong></li>
                                    <br>
                                @endforeach
                            @endif
                        </ul>
                        <hr>


                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button"
                                data-dismiss="modal">{{ __('Close') }}</button>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('script')
    <script>$('#dataTable').DataTable();</script>
@endsection
