{{-- @extends('layouts.app') --}}
<div class="container">

    @include('vendor.voyager.exams.forms.edit.general-form')
    @include('vendor.voyager.exams.forms.edit.' . $dataTypeContent->type.'-form')

    <button type="submit" class="btn btn-primary process-exam-form">Lưu Đề Thi</button>
</div>