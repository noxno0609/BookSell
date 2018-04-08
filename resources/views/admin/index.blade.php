@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Admin Page</h3>
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>Thumbnail</th>
            <th>Title</th>
            <th>Description</th>
            <th>Author</th>
            <th>Price</th>
            <th>Producer</th>
            <th style="width:15%"></th>
        </tr>
        </thead>

        <tbody>

            @foreach($books as $book)
            <tr>
                <td> <img src="{{ asset('uploads/'.$book->imagename) }}" width="100%" height="auto" class="img-responsive" /> </td>
                <td>{{ $book->title }} </td>
                <td>{{ $book->description }} </td>
                <td>{{ $book->author }} </td>
                <td>{{ number_format($book->price, 0) }} VNĐ</td>
                <td>{{ $book->producer }} </td>
                <td>
                    <div>
                        <form action="{{route('admin.destroy', $book->id)}}" method="POST">
                            {{method_field('DELETE')}}
                            {{ csrf_field() }}

                            <input class="btn btn-primary" type="button" value="Edit" onclick="window.location='{{route('admin.edit', $book->id)}}'"/>

                            <input type="submit" class="btn btn-danger" value="Remove" onclick="return confirm('Are you sure to delete?')"/>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach

        </tbody>

  </table>
</div>
@endsection