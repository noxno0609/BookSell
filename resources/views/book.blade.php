@extends('layouts.app')

@section('content')
<div class="item-detail"><h2 style="color:red">Title</h2></div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
    
            <div class="portrait" style="width:100%; height:85%;">
                <img src="images/image-not-found.jpg" width="100%" height="100%"/>
            </div>            
        </div>

        <div class="col-md-8">
            <p><b>Description:</b></p>
            <p><b>Author:</b></p>
            <p><b>Producer:</b></p>
            <p><b>Prime:</b></p>
            <div id="button-book">
                <input type="submit" name="btnsubmit" value="Add To Card" class="btn btn-primary">
            </div> 
        </div>
    </div>
</div>   
@endsection 
