@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width:10%">Thumbnail</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá </th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
                <th style="width: 10%"></th>
            </tr>
            </thead>
            <tbody>

            @if($items != null)
                @foreach($items as $item)
                <?php $book = $item['item']; ?>
                <tr>
                    <td> <img src="{{ asset('uploads/'.$book->imagename) }}" width="100%" height="auto" class="img-responsive" /> </td>
                    <td><b>{{$book->title}} </b></td>
                    <td> {{number_format($book->price, 0)}} </td>
                    <td> {{$item['quantity']}}</td>
                    <td> {{number_format($item['price'], 0)}} VNĐ</td>                
                    <td>   
                        <input class="btn btn-danger" style="width: 100%" type="button" value="Remove" onclick="window.location='{{route('removefromcart', $book->id)}}'"/> 
                    </td> 
                </tr>

                @endforeach
            @endif
            </tbody>
    </table>
    <div style="text-align: right;">
        <p style="font-size:17px">Tổng Tiền: <b style="color:#b37700">{{ number_format($cart->totalPrice, 0) }} VNĐ</b></p>
    </div>
    <div style="text-align: right;">
        <input class="btn btn-info" style="width: 16%" type="button" value="Thanh Toán"/>    
    </div>

</div>
@endsection 