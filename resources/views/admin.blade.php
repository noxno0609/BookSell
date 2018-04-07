@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Admin Page</h3>
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Author</th>
            <th>Prime</th>
            <th>Producer</th>
            <th></th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>Book1</td>
            <td>bla bla bla</td>
            <td>john</td>
            <td>10.00 USD</td>
            <td>john</td>
            <td>
                <div>
                    <input class="btn btn-danger" type="button" value="Edit"/>
                    <input class="btn btn-primary" type="button" value="Remove"/>
                </div>
            </td>
        </tr>
        </tbody>

  </table>
</div>
@endsection