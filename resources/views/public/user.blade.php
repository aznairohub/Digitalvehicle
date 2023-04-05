@extends('public.public_header')
@section('user-body')
@if (Session::has('jsAlert'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">

<strong>Alert !</strong> {{ session('jsAlert') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@endsection