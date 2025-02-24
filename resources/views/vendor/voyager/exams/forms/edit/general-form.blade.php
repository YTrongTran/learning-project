<form id="general-form" method="POST">
    <input type="hidden" name="exam-id" id="exam-id" value="{{ $dataTypeContent->getKey() }}" />
    <div class="form-group">
        <label for="exam-title">Title</label>
        <input type="text" class="form-control" name="exam-title" id="exam-title" value="{{$dataTypeContent->title}}" required>
    </div>
    <div class="form-group hidden">
        <label for="exam-type">Type</label>
        <select type="select" class="form-control" name="exam-type" id="exam-type" required>
            <option value="toeic" {{ $dataTypeContent->type == 'toeic' ? 'selected' : '' }} >Toeic</option>
            <option value="superkid" {{ $dataTypeContent->type == 'superkid' ? 'selected' : '' }} >Superkids</option>
            <option value="teen" {{ $dataTypeContent->type == 'teen' ? 'teen' : '' }} >Teen</option>
            <option value="ielts" {{ $dataTypeContent->type == 'ielts' ? 'selected' : '' }} >Ielts</option>
            <option value="elderly" {{ $dataTypeContent->type == 'elderly' ? 'selected' : '' }} >Elderly</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exam-duration">Duration(minutes)</label>
        <input type="number" class="form-control" name="exam-duration" id="exam-duration" min="0" value="{{$dataTypeContent->duration}}" required>
    </div>
    <div class="form-group">
        <label for="exam-point">Point</label>
        <input type="number" class="form-control" name="exam-point" id="exam-point" min="0" value="{{$dataTypeContent->point}}" required>
    </div>
    <div class="form-group">
        <label for="exam-visible">Visible</label>
        <input type="checkbox" name="exam-visible" id="exam-visible" value="true" {{ $dataTypeContent->visible ? 'checked' : '' }}>
    </div>
</form>