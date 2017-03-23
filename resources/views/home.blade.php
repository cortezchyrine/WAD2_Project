@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <a href="/inputs"><button>BORROW</button></a></div>
                <div class="panel-body">
                        <table class="table table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th>Borrower</th>
                                    <th>Course</th>
                                    <th>Date Loaned</th>
                                    <th>Author</th>
                                    <th>Title</th>
                                    <th>Date Returned</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $books as $book )
                                    <tr>
                                        <td>{{ $book->borrowersname }}</td>
                                        <td>{{ $book->course }}</td>
                                        <td>{{ $book->date_loaned }}</td>
                                        <td>{{ $book->author }}</td>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->date_returned }}</td>
                                        <td><a href="/edit/{{ $book->id }}"><button class="alert alert-primary">Edit</button></a>
                                        <a href="/delete/{{ $book->id }}"><button class="alert alert-danger">Delete</button></a>
                                         </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
