@extends('layout.layout')

@section('danger')
    One Book Page
    @endsection


@section('books')
<table class="table">
    <th>Title</th>
    <th>Author</th>
    <tr>
        <td>{{$books["title"]}}</td>
        <td>{{$books["author"]}}</td>
    </tr>
</table>
@endsection

