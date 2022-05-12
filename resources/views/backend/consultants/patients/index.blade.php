@extends('layouts.Backend')

@section('top_sidebar')
    @include('layouts.includes.ConsultantTopBar')
@endsection

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="content-between p-1">
                <h5 class="fw-bolder text-center text-primary"> {{ 'List of Patients' }} </h5>
                <a href="{{ route('consultants.patients.create') }}" class="btn btn-primary btn-circle">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%"
                       cellspacing="0">
                    <thead>
                    <tr>
                        <th class="text-center">S/N</th>
                        <th class="text-center"> Name </th>
                        <th class="text-center"> Telephone</th>
                        <th class="text-center"> Address</th>
                        <th class="text-center"> Created At </th>
                        <th class="text-center"> Operation </th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th class="text-center">S/N</th>
                        <th class="text-center"> Name </th>
                        <th class="text-center"> Telephone</th>
                        <th class="text-center"> Address</th>
                        <th class="text-center"> Created At </th>
                        <th class="text-center"> Operation </th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($patients as $key=>$patient)
                        <tr class="hover:bg-gray-50 text-center">
                            <td class="align-middle">
                                {{ $key+1 }}
                            </td>
                            <td class="align-middle"> {{ $patient->name }} </td>
                            <td class="align-middle"> {{ $patient->telephone }} </td>
                            <td class="align-middle"> {{ $patient->address }} </td>
                            <td class="align-middle"> {{ $patient->created_at }} </td>

                            <td class="align-middle">
                                <a href="#" data-toggle="modal" data-target="{{ '#deleteModal'.$key }}"
                                   class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <a href="#" data-toggle="modal" data-target="{{ '#showModal'.$key }}"
                                   class="btn btn-warning">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('consultants.patients.edit', $patient) }}"
                                   class="btn btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                {{-- <a href="{{ route('consultants.patients.show', $patient) }}"
                                   class="btn btn-info">
                                    <i class="fa fa-folder-open"></i>
                                </a> --}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- delete Modal-->
    @foreach($patients  as $key=>$patient)
        <div class="modal fade" id="{{ 'deleteModal'.$key }}" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ __('Are you sure thant you want to delete this ?') }}</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">{{ __('Delete Patient Information ') }}</div>
                    <div class="modal-footer content-between">
                        <button class="btn btn-secondary" type="button"
                                data-dismiss="modal">{{ __('Cancel') }}</button>
                        <form action="{{ route('consultants.patients.destroy', $patient->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">{{ __('Delete') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="{{ 'showModal'.$key }}" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ __('More about the Patient ') }}</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ __('Name') }} :
                        <ul class="list-unstyled ml-3">
                            <li>{{ $patient->name }}</li>
                        </ul>
                        <hr>
                        {{ __('Email') }} :
                        <ul class="list-unstyled ml-3">
                            <li>{{ $patient->email }}</li>
                        </ul>
                        <hr>
                        {{ __('Telephone') }} :
                        <ul class="list-unstyled ml-3">
                            <li>{{ $patient->telephone }}</li>
                        </ul>
                        <hr>
                        {{ __('Blood Group') }} :
                        <ul class="list-unstyled ml-3">
                            <li>{{ $patient->blood_group }}</li>
                        </ul>
                        <hr>
                        {{ __('Address') }} :
                        <ul class="list-unstyled ml-3">
                            <li>{{ $patient->address }}</li>
                        </ul>
                        <hr>
                        {{ __('Date of birth') }} :
                        <ul class="list-unstyled ml-3">
                            <li>{{ $patient->date_of_birth }}</li>
                        </ul>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button"
                                data-dismiss="modal">{{ __('Close') }}</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection

@section('script')
    <script>$('#dataTable').DataTable();</script>
@endsection
