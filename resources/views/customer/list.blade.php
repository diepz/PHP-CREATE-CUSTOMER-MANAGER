@extends('welcome')
@section('title', 'List Danh Sách Sản Phẩm')
<form action="{{ route('customer.search') }}" method="get">
    @csrf
<div class="input-group">
    <input type="text" class="form-control" name="keyword" placeholder="Search for...">
    <span class="input-group-btn">
                    <button class="btn btn-secondary" type="submit" name="keyword">Search</button>
                </span>
</div>
</form>
<div class="table-users">
    <div class="header">DANH SÁCH SẢN PHẨM</div>
    <table cellspacing="0">
        <tr>
            <th>Danh sách sản phẩm</th>
            <th>Tên sản phẩm</th>
            <td>Thông tin</td>
            <td>EDIT</td>
            <td>DELETE</td>

        </tr>
    </table>
    @foreach($customers as $key => $customer)

    <table>

        <tr>
                <td>{{ ++$key}}</td>
                <td>{{ $customer->title }}</td>
                <td>{{ $customer->content }}</td>
                <td><a href="{{ route('customer.edit', $customer->id)}}">EDIT</a>
                </td>
                <td><a href="{{ route('customer.delete', $customer->id) }}">DELETE</a>
                </td>

            </tr>
    </table>
    @endforeach
</div>
<a href="{{ route('customer.create') }}"><input type="submit" value="ADD NEW" class="btncls1"/></a>