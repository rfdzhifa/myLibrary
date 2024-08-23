@extends('layouts.app')

@section('title', 'Library Data')

@section('content')

        <a href="{{ route('book.create') }}">
            <button type="button" class="btn btn-primary" style="margin-bottom: 30px">Add Data</button>
        </a>
            <div class="card">
                <h5 class="card-header">Book</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Publisher</th>
                        <th>Year</th>
                        <th>ISBN</th>
                        <th>Cover</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($books as $book)
                        <tr style="height: 50px">
                            <th scope="row">{{ $book->id }}</th>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i><strong>{{ $book->title }}</strong></td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->publisher }}</td>
                            <td>{{ $book->year }}</td>
                            <td>{{ $book->isbn }}</td>
                            <td>
                                <img  class="img-fluid" src="{{ asset('storage/' . $book->cover) }}" alt="{{ $book->title }}">
                            </td>
                            <td>{{ Str::limit($book->description, 50, '...') }}</td>
                            <td>{{ $book->category }}</td>
                            <td nowrap>
                                <a href="{{ route('book.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('book.destroy', $book->id) }}" method="POST" class="d-inline">
                                  @csrf
                                  @method('delete')
                                  <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                      </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
@endsection