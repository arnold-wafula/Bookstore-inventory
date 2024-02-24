@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<div>
    <h2>Books</h2>
    <table id="myTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th>Publisher</th>
                <th>Publish Year</th>
                <th>ISBN</th>
                <th>Genre</th>
                <th>Language</th>
                <th>Page Count</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>{{ $book->publish_year }}</td>
                    <td>{{ $book->ibsn }}</td>
                    <td>{{ $book->genre }}</td>
                    <td>{{ $book->language }}</td>
                    <td>{{ $book->page_count }}</td>
                    <td>{{ $book->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
@endsection