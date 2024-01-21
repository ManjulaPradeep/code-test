@extends('master')

@section('title')

@endsection

@section('content')

@section('heading')

@endsection

<div class="container mt-5">
    <h1>Dashboard - Customer</h1>
    <a href="{{ route('customer.index') }}" class="btn btn-primary mt-3">Add Customer</a>
    <a href="{{ route('customer.edit') }}" class="btn btn-primary mt-3">Update Customer</a>
    <a href="{{ route('customer.delete') }}" class="btn btn-primary mt-3">Delete Customer</a>


</div>

@endsection