@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" >Please fill-up the Form</div>

                <div class="panel-body">
                    <form method="POST" action = "/forms">
                        {{csrf_field()}}
                        Borrower's Name: <input type="text" name="borrowersname"><br>
                        Course: <input type="text" name="course"><br>
                        Date Loaned: <input type="date" name="date_loaned"><br>
                        Author:<input type="text" name="author"><br>
                        Title: <input type="text" name="title"><br><br>
                        Date Returned: <input type="date" name="date_returned"><br><br>
                        <input type="submit" value="Submit" class="button">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection