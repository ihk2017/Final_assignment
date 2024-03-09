@extends('layout.sidenav-layout')
@section('content')
    @include('components.registration.registration-list')
    @include('components.registration.registration-delete')
    @include('components.registration.registration-create')
    @include('components.registration.registration-update')
@endsection
