@extends('layouts.Backend')

@section('top_sidebar')
    @include('layouts.includes.ConsultantTopBar')
@endsection

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row" style="justify-content: space-between">
                <h5 class="m-0 pl-3 font-weight-bold text-center text-primary"> {{ 'List of Messages' }} </h5>
                <a href="{{''}}" class="btn btn-primary btn-circle">
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
                        <th class="text-center"> email</th>
                        <th class="text-center"> Subject</th>
                        <th class="text-center"> Message </th>
                        <th class="text-center"> Operatipatient
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th class="text-center">S/N</th>
                        <th class="text-center"> Name </th>
                        <th class="text-center"> email</th>
                        <th class="text-center"> Subject</th>
                        <th class="text-center"> Message </th>
                        <th class="text-center"> Operation</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($patients as $key=>$patient)
                        <tr class="hover:bg-gray-50 text-center">
                            <td class="align-middle">
                                {{ $key+1 }}
                            </td>
                            <td class="align-middle"> {{ $patient->name }} </td>
                            <td class="align-middle"> {{ $patient->email }} </td>
                            <td class="align-middle"> {{ $patient->subject }} </td>
                            <td class="align-middle"> {!! html_entity_decode($patient->message) !!} </td>

                            <td class="align-middle">
                                <a href="#" data-toggle="modal" data-target="{{ '#deleteModal'.$key }}"
                                   class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- delete Modal-->
    @foreach($patients  as $key=>$message)
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
                    <div class="modal-body">{{ __('Delete') }}</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button"
                                data-dismiss="modal">{{ __('Cancel') }}</button>
                        <form action="{{''}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-primary" type="submit">{{ __('Delete') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection

@section('script')
    <script>$('#dataTable').DataTable();</script>
@endsection
