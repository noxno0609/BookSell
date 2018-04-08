@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
    
            <div class="portrait" style="width:100%; height:80%;"> 
                <img src="{{ asset('images/image-not-found.jpg')}}" width="100%" height="100%"/>
            </div> 
            <p>
            <form action="" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}
                <input type="file" id="bookFile" name="bookimage" required="true" onchange="this.form.submit();" style="display: none;">
                <input class="btn btn-primary" style="width:100%" type="button" name="buttonFileUpload"value="Change Book Image" onclick="document.getElementById('bookFile').click();">
            </form>
            </p>
            
        </div>

        <form class="col-md-8" action="" method="PUT">
            <p>
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" value="">
            </p>

            <p>
                <label for="description">Description</label>
                <textarea class="form-control" name="description"></textarea>
            </p>

            <p>
                <label for="author">Author</label>
                <input class="form-control" type="text" name="author" value="">
            </p>

            <p>
                <label for="price">Price</label>
                <input class="form-control" type="text" name="price" value="">
            </p>

            <p>
                <label for="producer">Producer</label>
                <input class="form-control" type="text" name="producer" value="">
            </p>

            <div id="button-admin-edit">
                <input type="submit" name="btnSave" value="Save" class="btn btn-danger" onclick="return confirm('Are you sure to save?')">
                <input type="submit" name="btnCancel" value="Cancel" class="btn btn-default">
            </div> 
        </form>
    </div>
</div>   

@endsection