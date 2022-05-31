@extends('layouts.app')

@section('title')
    @lang('translation.starter')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Starter
        @endslot
        @slot('li_1')
            Pages
        @endslot
    @endcomponent
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

@endsection
