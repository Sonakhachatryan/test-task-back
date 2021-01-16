@extends('layout.app')

@section('title') Home @endsection

@section('content')
    <h1 class="display-4 text-center mb-3 font-weight-bold">Home</h1>

    @widget('App\Widgets\MessageForm', ['widget_id' => 1])
@endsection
