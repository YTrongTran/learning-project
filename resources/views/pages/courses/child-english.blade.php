@extends('layouts.main') @section('title', 'Khóa học thiếu nhi') @section('content')
<div style="background: url({{ asset('images/banner-khoa-hoc-thieu-nhi.avif') }}) no-repeat; background-size: cover;"
    class="h-[400px]"></div>
<div class="container">
    <div class="mt-20">
        <h2 class="course-title">NES, Phát Huy Tối Đa Khả Năng NGHE - NÓI Phản Xạ</h2>
    </div>
    <div class="mt-20">
        <h2 class="course-title">PHƯƠNG PHÁP CHUYÊN BIỆT CỦA NES</h2>
    </div>
    <div class="mt-20">
        <h2 class="course-title">Lộ Trình Đào tạo tại NES </h2>
    </div>
    <div class="mt-20">
        <h2 class="course-title">​CƠ SỞ VẬT CHẤT</h2>
    </div>
    <div class="mt-20">
        <h2 class="course-title">Các chi nhánh của NES </h2>
    </div>
    <div class="mt-20">
        <h2 class="course-title">​HỌC VIÊN CỦA NES</h2>
    </div>
</div>
<x-contact-course-component></x-contact-course-component>
@stop