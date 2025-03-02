<!-- Left Sidebar - Exact width and padding -->
<div class="lg:w-[21%] w-full">
    <div class="w-full h-fit rounded-md overflow-hidden shadow-md border-r border-[#E5E7EB]">
        <h2 class="font-bold text-[15px] bg-rose-200 p-2">Test Menu</h2>
        <div class="p-2">
            <a href="{{ route('quiz.step3') }}" data-level="superkids" class="quiz-link">
                <div class="font-medium text-[13px] mb-2 hover:text-rose-700">Tiếng Anh Mẫu Hè Superkids (6-11 Tuổi)
                </div>
            </a>
            <a href="{{ route('quiz.step3') }}" data-level="teen" class="quiz-link">
                <div class="font-medium text-[13px] mb-2 hover:text-rose-700">Tiếng Anh Thiếu Niên Young Leaders (11-15
                    Tuổi)</div>
            </a>
            <a href="{{ route('quiz.step3') }}" data-level="communicate" class="quiz-link">
                <div class="font-medium text-[13px] mb-2 hover:text-rose-700">Tiếng Anh Người Lớn English Hub</div>
            </a>
            <a href="{{ route('quiz.step3') }}" data-level="ielts" class="quiz-link">
                <div class="font-medium text-[13px] mb-2 hover:text-rose-700">Luyện Thi IELTS</div>
            </a>
            <a href="{{ route('quiz.step3') }}" data-level="toeic" class="quiz-link">
                <div class="font-medium text-[13px] mb-2 hover:text-rose-700">Luyện Thi TOEIC</div>
            </a>
           
        </div>
    </div>
    <form id="quizForm" action="{{ route('quiz.step3') }}" method="POST" style="display: none;">
        @csrf
        <input type="hidden" name="level" id="levelInput">
        <input type="hidden" name="level_text" id="levelTextInput">
    </form>
</div>

<script>
    $(document).ready(function() {
        $(".quiz-link").click(function(e) {
            e.preventDefault();

            let level = $(this).data("level");
            let levelText = $(this).find(".font-medium").text();

            $("#levelInput").val(level);
            $("#levelTextInput").val(levelText);

            $("#quizForm").submit();
        });
    });
</script>
