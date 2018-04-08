@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Thumbnail</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá </th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
                <th style="width: 10%"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td></td>
                <td>Sách </td>
                <td>50.00 USD</td>
                <td>2</td>
                <td>100.00 USD</td>                
                <td>   
                     <input class="btn btn-danger" style="width: 100%" type="button" value="Remove"/> 
                </td> 
            </tr>
            </tbody>
    </table>
    <div style="text-align: right;">
        <label for="TongTien" >Tổng Tiền:</label>
    </div>
    <div style="text-align: right;">
        <input class="btn btn-info" style="width: 16%" type="button" value="Thanh Toán"/>    
    </div>

</div>
@endsection 