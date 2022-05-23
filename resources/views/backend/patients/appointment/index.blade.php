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
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%"
                       cellspacing="0">
                    <thead>
                    <tr>
                        <th class="text-center">S/N</th>
                        <th class="text-center"> Message </th>
                        <th class="text-center"> Status</th>
                        <th class="text-center"> Date </th>
                        <th class="text-center"> Operation</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th class="text-center">S/N</th>
                        <th class="text-center"> Message </th>
                        <th class="text-center"> Status</th>
                        <th class="text-center"> Date </th>
                        <th class="text-center"> Operation</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($appointments as $key=>$appointment)
                        <tr class="hover:bg-gray-50 text-center">
                            <td class="align-middle">
                                {{ $key+1 }}
                            </td>
                            <td class="align-middle"> {{ $appointment->message }} </td>
                            @if($appointment->status==='Validate')
                                <td class="align-middle"><span
                                        class="badge badge-success">{{ $appointment->status }}</span></td>
                            @elseif($appointment->status==='Not Validate')
                                <td class="align-middle"><span
                                        class="badge bg-warning">{{ $appointment->status }}</span></td>
                            @else
                                <td class="align-middle"><span
                                        class="badge bg-danger">{{ $appointment->status }}</span></td>
                            @endif

                            <td class="align-middle"> {{ $appointment->date_appointment }} </td>

                            <td class="align-middle">
                                <a href="#" data-toggle="modal" data-target="{{ '#showModal'.$key }}"
                                   class="btn btn-warning">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>$('#dataTable').DataTable();</script>
@endsection
