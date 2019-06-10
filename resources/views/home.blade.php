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
    <h3 class="card-title">عنوان</h3>
  </div>
  <div class="card-body">
    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    فوتر
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->

</section>

@endsection
