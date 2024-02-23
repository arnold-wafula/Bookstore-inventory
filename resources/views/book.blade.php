@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <form method="POST" action="" class="col-md-6 mx-auto bg-white p-4 rounded">
        @csrf
        <div class="row mb-4">
            <div class="col-md-4">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Harry Potter and the Chamber of Secrets"/>
            </div>

             <div class="col-md-4">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control" placeholder="J.K. Rowling"/>
            </div>

            <div class="col-md-4">
                <label for="description">Description</label>
                <textarea name="description" rows="4" cols="50">In Harry Potter and the Chamber of Secrets, the summer after Harry's first year at Hogwarts has been his worst summer ever, the Dursleys more distant and horrible than ever before.</textarea>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">
                <label for="publisher">Publisher</label>
                <input type="text" name="publisher" class="form-control" placeholder="Pottermore">
            </div>

            <div class="col-md-4">
                <label for="publish_year">Publishing Year</label>
                <input type="text" name="publish_year" class="form-control" placeholder="2010">
            </div>

            <div class="col-md-4">
                <label for="ibsn">ISBN</label>
                <input type="text" name="ibsn" class="form-control" placeholder="978-0-596-52068-7">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">
                <label for="genre">Genre</label>
                <select name="genre" class="form-control">
                    <option value="">Select Genre</option>
                    @foreach($genres as $genre)
                    <option value="{{$genre->id}}">{{ $genre->genre_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <label for="language">Language</label>
                <select name="language" class="form-control">
                    <option value="">Select Language</option>
                    @foreach($languages as $language)
                    <option value="{{$language->id}}">{{ $language->language_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <label for="page_count">Page Count</label>
                <input type="number" name="page_count" class="form-control" placeholder="249">
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-4">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control" placeholder="$99">
            </div>
        </div>
        <div class="col-md-12">
        <button type="submit" class="btn btn-primary btn-block">Create Book</button>
            </div>
        </div>
    </form>
</div>
@endsection