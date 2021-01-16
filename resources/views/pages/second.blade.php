@extends('layout.app')

@section('title') Second Page @endsection

@section('content')
    <h1 class="display-4 text-center mb-3 font-weight-bold">Second Page</h1>

    @widget('App\Widgets\MessageForm', ['widget_id' => 2])
@endsection
