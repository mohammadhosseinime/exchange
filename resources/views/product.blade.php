@extends('layouts.base')

@section('content')
<section class="content">
@if (session('status'))
  <div class="alert alert-success" role="alert">
    {{ session('status') }}
  </div>
@endif


<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">{{ $product->name }}</h3>
  </div>
  <div class="card-body">
  <p>{{ $product->description }}</p>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

</section>

@endsection
