@extends('layouts.base')

@section('body')
    <livewire:navbar />

    @yield('content')

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
