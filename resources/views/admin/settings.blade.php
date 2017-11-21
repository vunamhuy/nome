@extends('layouts.master')

@section('Admin shop', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')

    <div class="container">
        <ul>
            @foreach ($settings as $settingsValue)
            <li>{{ $settingsValue }}</li>
            @endforeach
        </ul>
    </div>

@endsection