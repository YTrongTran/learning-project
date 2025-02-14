jQuery(document).ready(function($) {
    var isSubmitting = false; 

    $(document).on("click", ".has-toggle", function(){
        $(".question-content", $(this).parent(".question") ).slideToggle();
        // if ($(".question-content").is(":visible")) {
        //   $(".question-content").slideUp();
        // } else {
        //   $(".question-content").slideDown();
        // }
    });

    let toeicHTML = $(".exam-toeic").html(),
        superkidHTML= $(".exam-superkid").html();

    $("#exam-type").change(function(){
        if( $(this).val() == "toeic" ){
            // $(".exam-toeic").removeClass("hidden");
            // $(".exam-superkid").addClass("hidden");
            $(".exam-toeic").html(toeicHTML);
            $(".exam-superkid").html('');
        }else{
            $(".exam-toeic").html('');
            $(".exam-superkid").html(superkidHTML);
            // $(".exam-toeic").addClass("hidden");
            $(".exam-superkid").removeClass("hidden");
        }
    });

    $(".add-question").click( function(){
        let question = $(this).prev(".question").clone();
        let title = $(".question-title", $(question) );
        let question_id = title.data("question-id");
        question_id++;
        title.attr("data-question-id", question_id);
        title.text( "Question " + ( question_id + 1 )  );
        question.find("input,select").val("").change();
        $(".question-content", question).show();
        $(this).before(question);
    });

    // $(".process-exam-form").click( function(e){
    //     e.preventDefault();
    //     handleSubmit();
    // });

    function handleSubmit() {
        var form = $('exam-form');
        var formData = new FormData(form);
        var serverURL = '/submit-form';

        fetch(serverURL, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            alert(data.message);
        })
        .catch(error => console.error(error));
    }

    $('#exam-form').submit(function(e) {

        e.preventDefault();

        if (isSubmitting) {
          return;
        }
      
        isSubmitting = true; 
    
        var formData = new FormData(this);
    
        $.ajax({
          url: '/adminExams',
          type: $("#exam-id").length > 0  ? 'PUT' : 'POST',
          data: formData,
          processData: false,
          contentType: false,
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function(response) {
            toastr.success(response.message, 'Success!' );
            setTimeout( function(){
              window.location.href = "/admin/exams";
            }, 500);
          },
          error: function(jqXHR, textStatus, errorThrown) {
            // console.error('Lỗi: ', textStatus, errorThrown);
            toastr.error(errorThrown, 'Error!');
          },complete: function() {
            isSubmitting = false;
          }
        });
    });

    


});