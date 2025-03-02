<form id="general-form" method="POST">
    <div class="form-group">
        <label for="exam-title">Title</label>
        <input type="text" class="form-control" name="exam-title" id="exam-title" required>
    </div>
    <div class="form-group">
        <label for="exam-type">Type</label>
        <select type="select" class="form-control" name="exam-type" id="exam-type" required>
            <option value="toeic" selected>Toeic</option>
            <option value="superkid">Superkids</option>
            <option value="teen">Teen</option>
            <option value="ielts">Ielts</option>
            <option value="elderly">Elderly</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exam-duration">Duration(minutes)</label>
        <input type="number" class="form-control" name="exam-duration" id="exam-duration" min="0" value="45" required>
    </div>
    <div class="form-group">
        <label for="exam-point">Point</label>
        <input type="number" class="form-control" name="exam-point" id="exam-point" min="0" value="50" required>
    </div>
    <div class="form-group">
        <label for="exam-visible">Visible</label>
        <input type="checkbox" name="exam-visible" id="exam-visible" value="true" checked>
        
    </div>
    <div class="form-group">
        <label for="csvFile">Import form CSV</label>
        <input type="file" id="csvFile" name="import-csv" accept=".csv">
    </div>
</form>