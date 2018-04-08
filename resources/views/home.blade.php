@extends('layouts.app')

<?php $count = 0; ?>
@section('content')

    <div class="container">
        @foreach($books as $book)
            @if($count == 0)
            <div class="row" style="margin-bottom:30px">
            @endif
            
                <?php $count++; ?> 

                <div class="col-md-4 item-detail" style="padding: 20px;">
                    <div class="portrait" style="width:100%; height:75%;">
                        @if($book->imagename == null)
                        <img src="{{ asset('images/image-not-found.jpg')}}" width="100%" height="100%"/>
                        @else
                        <a href=""><img src="{{ asset('uploads/'.$book->imagename) }}" width="100%" height="100%" class="img-responsive" /></a>
                        @endif
                    </div> 
                
                    <div style="width:100%; height: 15%"><h3>{{ $book->title }} </h3></div>
                    <div style="width:100%; height: 9%"><h4 style="color:red">{{ number_format($book->price, 0) }} VNĐ</h4></div>
                    <div style="width:100%; height: 6%">
                        <input class="btn btn-danger" style="width: 40%" type="button" value="Add To Cart"/>
                        <input class="btn btn-primary" style="width: 40%" type="button" value="Details" onclick="window.location='{{route('book', $book->id)}}'"/>
                    </div>
                </div>

            @if($count == 3)
            </div>
            <?php $count=0; ?>
            @endif
        @endforeach
        
        @if($count != 0)
        </div>
        <?php $count=0; ?>
        @endif

        <div style="text-align:center; margin: auto;">
            {{ $books->links() }}
        </div>
    </div>
@endsection
