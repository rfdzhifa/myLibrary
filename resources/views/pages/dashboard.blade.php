@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- Grid Card -->
    <h6 class="pb-1 mb-4 text-muted">Book</h6>
        <div class="row row-cols-3 row-cols-md-3 g-4 mb-3">
            @foreach ($books as $book)
            <div class="col">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('storage/' . $book->cover) }}" alt="{{ $book->title }}" />
                    <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text" 
                    style="height: 30px; 
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;">
                        {{ $book->description }}
                    </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
@endsection