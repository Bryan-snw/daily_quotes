@extends('layouts.main')

@section('container')
    <h1 class="bg-transparent text-center header">Create Post</h1>
    <div class="container-post">
        <form action="/post" method="POST">
            @csrf
            <div class="mb-3">
                <label for="source" class="form-label">Source</label>
                <input type="text" class="form-control @error('source') is-invalid @enderror" id="source" name="source"
                    placeholder="John" autofocus>
                @error('source')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Your Message</label>
                <textarea class="form-control @error('messaage') is-invalid @enderror"" id="message" name="message" rows="3"
                    placeholder="Your Message.."></textarea>
                @error('message')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div style="text-align: center">
                <button type="submit" class="btnSubmit btn btn-dark">Create Post</button>
            </div>
        </form>
    </div>
@endsection
