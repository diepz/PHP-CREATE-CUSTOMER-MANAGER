@extends('welcome')
@section('title', 'Sản phẩm new')
<form action="{{ route('customer.store') }}" method="post">
    @csrf
<div class="shade">
    <div class="blackboard">
        <div class="form">
            <p>
                <label>Tên sản phẩm: </label>
                <input type="text" name="title"/>
            </p>
            <p>
                <label>Thông tin: </label>
                <input type="text" name="content"/>
            </p>
        </div>
        <p class="wipeout">
            <input type="submit" value="CREATE" />
        </p>
        <p class="wipeout">
            <input type="submit" value="CAN" onclick="window.history.go(-1); return false;"/>
        </p>
    </div>

</div>
</form>
