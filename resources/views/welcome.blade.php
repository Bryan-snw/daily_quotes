@php
    $index = rand(0, sizeof($posts) - 1);
    if (isset($_GET['generate'])) {
        while ($_GET['generate'] == $index) {
            $index = rand(0, sizeof($posts) - 1);
        }
    }
@endphp

@extends('layouts.main')

@section('container')
    <h1 class="bg-transparent text-center header">Share Kindness, Not Hatred</h1>

    <div class="wrap">
        <div class="myCard">
            <h4 class="text-center content">"{{ $posts[$index]->message }}"</h4>
            <p class="text-end sender">- {{ $posts[$index]->source }}</p>
        </div>
        <form action="" method="GET">
            <button type="submit" name="generate" value={{ $index }} class="btnGenerate btn btn-dark">Generate
                Quotes</button>
        </form>
    </div>
@endsection
