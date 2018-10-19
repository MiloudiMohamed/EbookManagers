@extends('layouts.app')
@section('content')
    @include('Book.menu.menu1')
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Title</th>
            <th>Creator</th>
            <th>Record Reference</th>
            <th>DOI</th>
            <th>ISBN</th>
            <th>EpubType</th>
            <th>In ACS</th>
            <th>Created</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{$book->title}}</td>
                <td>{{$book->creator}}</td>
                <td>{{$book->record_reference}}</td>
                <td>{{$book->doi}}</td>
                <td>{{$book->isbn}}</td>
                <td>
                    @if($book->epubtype_id != NULL)
                        {{$book->EpubType->name}}
                    @endif
                </td>
                <td>
                    @if(!empty($book->resource))
                        Yes
                    @endif
                </td>
                <td>{{$book->created}}</td>
                <td>
                    <a href="{{ route('updateBook',['id'=>$book->id]) }}">Edit</a> | <a>Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>Book</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </tfoot>
    </table>
@endsection

@section('javascripts')
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"/>
    <style>
        .ebook_menu a
        {
            color:white;
        }
    </style>
@endsection