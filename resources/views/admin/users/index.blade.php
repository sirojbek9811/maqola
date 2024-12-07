@extends('admin.layouts.app')

@section('content')
    <div class="page-header">
      <h1>@lang('Foydalanuvchilar')</h1>
    </div>

    @include ('admin/users/_list')
@endsection
