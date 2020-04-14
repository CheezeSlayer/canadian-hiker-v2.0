@extends('layouts.app')

@section('content')
    @if( $userStatus )
        <App :user="{{ auth()->user() || false }}"></App>
    @else
        <App></App>
    @endif
@endsection
