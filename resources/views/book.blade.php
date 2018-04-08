@extends('layouts.app')

@section('content')
<div class="item-detail"><h2 style="color:red">{{$book->title}}</h2></div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
    
            <div class="portrait" style="width:100%; height:100%;">
                @if($book->imagename == null)
                <img src="{{ asset('images/image-not-found.jpg')}}" width="100%" height="100%"/>
                @else
                <img src="{{ asset('uploads/'.$book->imagename) }}" width="100%" height="100%"/>
                @endif
            </div>            
        </div>

        <div class="col-md-8">
            <p><b>Description: {{$book->description}}</b></p>
            <p><b>Author: {{$book->author}}</b></p>
            <p><b>Producer: {{$book->producer}}</b></p>
            <p><b>Price: {{number_format($book->price, 0)}} VNĐ</b></p>
            <div id="button-book">
                <input type="submit" name="btn" value="Add To Cart" class="btn btn-primary">
            </div> 
        </div>
    </div>
</div>   
@endsection 
