
@extends('layouts.layout')

@section('content')
<div>
    @php
        echo 'Hello Laravel Pizzas'
    @endphp

@foreach ($pizzas as $pizza)
<div>{{ $loop -> index }} {{ $pizza['type'] }}
    @if ($loop -> first)
        <span> - Item first</span>
    @endif

    @if ($loop -> last)
        <span> - Item last</span>
    @endif
</div>
@endforeach
</div>
@endsection
