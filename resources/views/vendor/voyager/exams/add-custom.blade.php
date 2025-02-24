{{-- @extends('layouts.app') --}}
<div class="container">
    
    @include('vendor.voyager.exams.forms.add.general-form')
    @include('vendor.voyager.exams.forms.add.superkid-form')
    @include('vendor.voyager.exams.forms.add.teen-form')
    @include('vendor.voyager.exams.forms.add.toeic-form')
    @include('vendor.voyager.exams.forms.add.ielts-form')
    @include('vendor.voyager.exams.forms.add.elderly-form')

    <button type="submit" class="btn btn-primary process-exam-form">Lưu Đề Thi</button>
</div>