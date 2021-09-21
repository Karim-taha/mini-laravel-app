@extends('layout.layout')

@section('danger')
    Books Page
    @endsection


@section('books')
<table class="table">
    <th>Title</th>
    <th>Author</th>
    @foreach ($books as $book)
    <tr>
        <td>{{$book["title"]}}</td>
        <td>{{$book["author"]}}</td>
    </tr>
    @endforeach
</table>
@endsection

