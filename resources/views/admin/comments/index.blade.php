@extends('admin.layouts.app')

@section('content')
    <div class="page-header">
      <h1>@lang('Xabarlar')</h1>
    </div>

    @include ('admin/comments/_list')
@endsection
