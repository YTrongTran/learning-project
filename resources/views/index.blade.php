@extends('layouts.main') @section('title', 'Home') @section('content')
<div class="container">
    <div>
        <h1>Greater you everyday Trưởng thành hơn mỗi ngày</h1>
        <p>
            Đồng hành cùng mỗi học viên để khơi dậy tiềm năng và đam mê trên
            hành trình học tập trọn đời
        </p>
        <button class="btn-primary">Dang ky ngay</button>
    </div>
    <div>
        <x-form-contact-component></x-form-contact-component>
    </div>
</div>
@stop
