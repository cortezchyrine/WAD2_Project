@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit</div>

                <div class="panel-body">
                    <form method="POST" action = "/save/{{ $edit->id }}">
                        {{csrf_field()}}

                        Borrower's Name: <input type="text" value="{{ $edit->borrowersname }}" name="borrowersname"><br>
                        Course: <input type="text" value="{{ $edit->course }}" name="course"><br>
                        Date Loaned: <input type="date" value="{{ $edit->date_loaned }}" name="date_loaned"><br>
                        Author:<input type="text" value="{{ $edit->author }}" name="author"><br>
                        Title: <input type="text" value="{{ $edit->title }}" name="title"><br><br>
                        Date Returned: <input type="date" value="{{ $edit->date_returned }}" name="date_returned"><br><br>
                        <input type="submit" value="Submit" class="button">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection