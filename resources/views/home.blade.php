@extends('layouts.app')

@section('content')
        {{-- <App :user="{{ $auth_user || false }}"></App> --}}
        <App></App>
@endsection

<script>
    window.auth_user = {!! json_encode($auth_user); !!};
</script>