@extends('layout.sidenav-layout')
@section('content')
    @include('components.producttype.producttype-list')
    @include('components.producttype.producttype-delete')
    @include('components.producttype.producttype-create')
    @include('components.producttype.producttype-update')
@endsection
