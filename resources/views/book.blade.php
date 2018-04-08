@extends('layouts.app')

@section('content')
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
            <h2 style="color:red"><b>{{$book->title}}</b></h2>
            <p><b style="font-size:25px;color: green;">{{$book->author}}</b></p>
            <p><h4 style="color:#b37700;">{{number_format($book->price, 0)}} VNĐ</h4></p>
            <p><b style="font-size:20px">{{$book->producer}}</b></p>
            <p><i style="font-size:20px"> {{$book->description}}</i></p>
            
            
            <div id="button-book">
                <input type="submit" name="btn" value="Add To Cart" class="btn btn-primary" onclick="window.location='{{route('addtocart', $book->id)}}'">
            </div> 
        </div>
    </div>
</div>   
@endsection 
