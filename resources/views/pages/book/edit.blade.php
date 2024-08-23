@extends('layouts.app')

@section('title', 'Edit Book Data')

@section('content')

              <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Form</h5>
                    </div>
                    <div class="card-body">
                      <form action="{{ route('book.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Title</label>
                          <input type="text" class="form-control @error('title')
                          is-invalid
                          @enderror"
                          id="basic-default-fullname" placeholder="The Lords of the Rings" name="title" value="{{ $book->title }}"/>
                          @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Author</label>
                          <input type="text" class="form-control  @error('author')
                          is-invalid
                          @enderror" 
                          id="basic-default-fullname" placeholder="John Doe" name="author" value="{{ $book->author }}"/>
                          @error('author')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Publisher</label>
                          <input type="text" class="form-control @error('publisher')
                          is-invalid
                          @enderror" 
                          id="basic-default-fullname" placeholder="John Doe" name="publisher" value="{{ $book->publisher }}"/>
                          @error('publisher')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Year</label>
                          <input type="text" class="form-control @error('year')
                          is-invalid
                          @enderror" id="basic-default-fullname" placeholder="John Doe" name="year" value="{{ $book->year }}"/>
                          @error('year')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">ISBN</label>
                          <input type="text" class="form-control @error('isbn')
                          is-invalid
                          @enderror" id="basic-default-fullname" placeholder="John Doe" name="isbn" value="{{ $book->isbn }}"/>
                          @error('isbn')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Cover</label>
                            <input type="file" class="form-control @error('cover')
                          is-invalid
                          @enderror" id="inputGroupFile02" name="cover" value="{{ $book->cover }}"/>
                          @error('cover')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Description</label>
                          <textarea
                            class="form-control @error('description')
                          is-invalid
                          @enderror"
                            placeholder="Hi, Do you have a moment to talk Joe?" name="description">
                            {{ $book->description }}
                          </textarea>
                          @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-message">Category</label>
                            <select class="form-select @error('category')
                            is-invalid
                            @enderror" id="inputGroupSelect01" name="category" value={{ $book->category }}>
                                <option selected>Choose...</option>
                                <option value="1">Fiction</option>
                                <option value="2">Fantasy</option>
                                <option value="3">Science Fiction</option>
                                <option value="4">Action & Adventure</option>
                                <option value="5">Mystery</option>
                                <option value="6">Horror</option>
                                <option value="7">Thriller & Suspense</option>
                                <option value="8">Historical Fiction</option>
                                <option value="9">Romance</option>
                                <option value="10">Children's</option>
                                <option value="11">Memoir & Autobiography</option>
                                <option value="12">Biography</option>
                                <option value="13">Food & Drink</option>
                                <option value="14">History</option>
                                <option value="15">True Crime</option>
                                <option value="16">Religion & Spirituality</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
@endsection