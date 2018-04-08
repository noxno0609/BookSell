@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('admin.store')}}"  enctype="multipart/form-data" method="POST">   
        <div class="row">
         {{ csrf_field() }}
            <div class="col-md-4">
        
                <div class="portrait" style="width:100%; height:80%;"> 
                    <img id="bookImagePreview" src="{{ asset('images/image-not-found.jpg')}}" width="100%" height="100%"/>
                </div> 
                <p>
               
                <input type="file" id="bookFilePreview" name="bookimage" required="true" style="display: none;" onchange="
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#bookImagePreview').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }
                readURL(this);">
                <input class="btn btn-primary" style="width:100%" type="button" name="buttonFileUpload" value="Change Book Image" onclick="document.getElementById('bookFilePreview').click();">
        
                </p>
            
            </div>
      
            <div class="col-md-8">

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
                    <input type="submit" name="btnSave" value="Add" class="btn btn-danger" onclick="return confirm('Are you sure to add?')">
                    <input type="submit" name="btnCancel" value="Cancel" class="btn btn-default">
                </div> 

            </div>

    
        </div>
    </form>
</div>   

@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    

</script>
@endsection