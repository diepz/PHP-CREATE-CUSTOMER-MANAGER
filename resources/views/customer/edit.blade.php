@extends('welcome')
@section('title', 'Sản phẩm new')
<form action="{{ route('customer.update', $customers->id) }}" method="post">
    @csrf
    <div class="shade">
        <div class="blackboard">
            <div class="form">
                <p>
                    <label>Tên sản phẩm: </label>
                    <input type="text" name="title" value="{{ $customers->title }}"/>
                </p>
                <p>
                    <label>Thông tin: </label>
                    <input type="text" name="content" value="{{ $customers->content }}"/>
                </p>
            </div>
            <p class="wipeout">
                <input type="submit" value="EDIT" />
            </p>
            <p class="wipeout">
                <input type="submit" value="CAN" onclick="window.history.go(-1); return false;"/>
            </p>
        </div>

    </div>
</form>
