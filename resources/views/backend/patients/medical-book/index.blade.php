@extends('layouts.Backend')

@section('top_sidebar')
    @include('layouts.includes.PatientTopBar')
@endsection

@section('content')
    @include('backend.patients.medical-book.book')
@endsection

@section('script')
    <script>$('#dataTable').DataTable();</script>
@endsection
