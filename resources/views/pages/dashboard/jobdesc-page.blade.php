@extends('layout.sidenav-layout')
@section('content')
    @include('components.jobdesc.jobdesc-list')
    @include('components.jobdesc.jobdesc-delete')
    @include('components.jobdesc.jobdesc-create')
    @include('components.jobdesc.jobdesc-update')
@endsection
