@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
    
            <div class="portrait" style="width:100%; height:80%;">
                <img src="images/image-not-found.jpg" width="100%" height="100%"/>
            </div> 

            <p>
                <input class="btn btn-primary" type="button" value="Upload Images" style="width:100%; height:20%"/>
            </p>
            
        </div>

        <div class="col-md-8">
            <p>
                <label for="txtTitle">Title</label>
                <input class="form-control" type="text" name="txtTitle" value="">
            </p>

            <p>
                <label for="txtDescription">Description</label>
                <input class="form-control" type="text" name="txtDescription" value="">
            </p>

            <p>
                <label for="txtAuthor">Author</label>
                <input class="form-control" type="text" name="txtAuthor" value="">
            </p>

            <p>
                <label for="txtPrime">Prime</label>
                <input class="form-control" type="text" name="txtPrime" value="">
            </p>

            <p>
                <label for="txtProducer">Producer</label>
                <input class="form-control" type="text" name="txtProducer" value="">
            </p>

            <div id="button-admin-edit">
                <input type="submit" name="btnsubmit" value="Save" class="btn btn-danger">
                <input type="submit" name="btnsubmit" value="Cancel" class="btn btn-default">
            </div> 
        </div>
    </div>
</div>   

@endsection