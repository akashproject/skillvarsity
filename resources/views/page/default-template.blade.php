@extends('layouts.main')
    @section('content')
    <section>
        <div class="container">
            <div class="row">
                <h1> {{ $contentMain->name}} </h1>
            </div>
            <div class="row">
                {!! $contentMain->description!!}
            </div>
        </div>
    </section>
    @endsection