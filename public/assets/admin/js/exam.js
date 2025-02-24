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


    $("#exam-type").change(function(){
        $(".exam-form").addClass("hidden");
        $(`.exam-form-${ $(this).val() }`).removeClass("hidden");
    });

    $("#exam-type").change();

    // $(".add-question").click( function(){
    //     let question = $(this).prev(".question").clone();
    //     let title = $(".question-title", $(question) );
    //     let question_id = title.data("question-id");
    //     question_id++;
    //     title.attr("data-question-id", question_id);
    //     title.text( "Question " + ( question_id + 1 )  );
    //     question.find("input,select").val("").change();
    //     $(".question-content", question).show();
    //     $(this).before(question);
    // });

    $(".process-exam-form").click( function(e){
        e.preventDefault();
        if ($("#general-form")[0].reportValidity()) {
            if( $(`.exam-form-${$("#exam-type").val()}`)[0].reportValidity() ){
              $(`.exam-form-${$("#exam-type").val()}`).trigger('submit');
            }
        }
    });

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

    $('.exam-form').submit(function(e) {

        e.preventDefault();

        if (isSubmitting) {
          return;
        }
      
        isSubmitting = true; 
    
        var formData = new FormData(this);

        if( $("#exam-id").length > 0 ){
          formData.append('exam-id', $("#exam-id").val() );
        }

        formData.append('exam-type', $("#exam-type").val() );
        formData.append('exam-title', $("#exam-title").val() );
        formData.append('exam-duration', $("#exam-duration").val() );
        formData.append('exam-point', $("#exam-point").val() );
        formData.append('exam-visible', $("#exam-visible").val() );

        $.ajax({
          url: '/admin/adminExams',
          // url: '/admin/adminExams/' + ( + $("#exam-id").length > 0 ? $("#exam-id").val() : '' ) ,
          type: 'POST',
          // type: $("#exam-id").length > 0  ? 'PATCH' : 'POST',
          data: formData,
          processData: false,
          contentType: false,
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function(response) {
            if( response.success ){
              toastr.success(response.message, 'Success!' );
              setTimeout( function(){
                window.location.href = "/admin/exams";
              }, 500);
            }else{
              toastr.error(response.message, 'Error!' );
            }
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