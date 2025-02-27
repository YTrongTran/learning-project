$(window).on("scroll", function () {
    const scrollTop = $(window).scrollTop();
    const scale = 1 + scrollTop / 500;
    const zoomOut = Math.min(scale, 2);

    $("#child-home").css("transform", `scale(${zoomOut})`);
});

// const image = document.getElementById('child-home');

// window.addEventListener('scroll', () => {
//   const scrollTop = window.scrollY;
//   const scale = 1 + scrollTop / 500;
//   const zoomOut = Math.min(scale, 2);

//   image.style.transform = `scale(${zoomOut})`;
// });

function attachAudioEvents() {
    $("audio.audio-listening").on("seeking", function () {
        this.currentTime = 0;
    });
    $("audio.audio-listening").on("pause", function () {
        if (
            !$(this).data("locked") &&
            !this.ended &&
            !$(this).data("preventLoop")
        ) {
            this.play();
        }
    });
    $("audio.audio-listening").on("ratechange", function () {
        this.playbackRate = 1.0;
    });
    $("audio.audio-listening").on("contextmenu dragstart", function (e) {
        e.preventDefault();
    });
    $("audio.audio-listening").on("ended", function () {
        $(this).off("seeking pause ratechange contextmenu dragstart");
        this.currentTime = 0;
        let audioSrc = $(this).find("source").attr("src");
        sessionStorage.setItem(audioSrc, "locked");
        $(this).data("locked", true);
    });
    $("audio.audio-listening").on("play", function (e) {
        let audioSrc = $(this).find("source").attr("src");
        if (sessionStorage.getItem(audioSrc) === "locked") {
            e.preventDefault();
            $(this).data("preventLoop", true);
            this.pause();
            setTimeout(() => $(this).data("preventLoop", false), 500);
        }
    });
}

// $(document).ready(function () {
// });

function restoreAudio() {
    $("button[id^='start-recording-']").each(function () {
        let questionId = $(this).attr("id").split("-")[2];

        let savedAudioData = localStorage.getItem("audio_data_" + questionId);

        if (savedAudioData) {
            let audioElement = $("#audio-playback-" + questionId);
            let audioInput = $("#audio_data_" + questionId);

            audioElement.attr("src", savedAudioData).removeClass("hidden");
            audioInput.val(savedAudioData);
            $(this).removeClass("opacity-50 cursor-not-allowed");
            let nextQuestion = jQuery("button[id^='start-recording-']")
                .filter(function () {
                    return jQuery(this).hasClass(
                        "opacity-50 cursor-not-allowed"
                    );
                })
                .first();
            if (nextQuestion.length > 0) {
                nextQuestion.removeClass("opacity-50 cursor-not-allowed");
            }
        }
    });
}

function attachAudioSpeakingEvents() {
    let mediaRecorders = {};
    let audioChunks = {};
    let countdowns = {};

    $("button[id^='start-recording-']").addClass(
        "opacity-50 cursor-not-allowed"
    );
    let firstButton = $('button[id="start-recording-1"]');
    if (firstButton) {
        firstButton.removeClass("opacity-50 cursor-not-allowed");
    }

    function updateTimerDisplay(questionId, timeLeft) {
        let minutes = Math.floor(timeLeft / 60);
        let seconds = timeLeft % 60;
        $(`#countdown-timer-${questionId}`).text(
            `${minutes.toString().padStart(2, "0")}:${seconds
                .toString()
                .padStart(2, "0")}`
        );
    }

    $(document).on("click", "[id^=start-recording-]", function () {
        let questionId = $(this).attr("id").replace("start-recording-", "");
        let timeLimit =
            parseInt($(this).closest("li").find("p").text().match(/\d+/)[0]) *
            60;

        navigator.mediaDevices
            .getUserMedia({
                audio: true,
            })
            .then((stream) => {
                let mediaRecorder = new MediaRecorder(stream);
                mediaRecorders[questionId] = mediaRecorder;
                audioChunks[questionId] = [];

                mediaRecorder.ondataavailable = (event) => {
                    audioChunks[questionId].push(event.data);
                };

                mediaRecorder.onstop = () => {
                    const audioBlob = new Blob(audioChunks[questionId], {
                        type: "audio/wav",
                    });
                    const reader = new FileReader();
                    reader.readAsDataURL(audioBlob);
                    reader.onloadend = function () {
                        $(`#audio_data_${questionId}`).val(reader.result);
                        localStorage.setItem(
                            "audio_data_" + questionId,
                            reader.result
                        );
                    };
                    const audioUrl = URL.createObjectURL(audioBlob);
                    $(`#audio-playback-${questionId}`)
                        .attr("src", audioUrl)
                        .removeClass("hidden");
                };

                mediaRecorder.start();

                updateTimerDisplay(questionId, timeLimit);
                $(`#countdown-timer-${questionId}`).removeClass("hidden");

                countdowns[questionId] = setInterval(() => {
                    timeLimit--;
                    updateTimerDisplay(questionId, timeLimit);
                    if (timeLimit <= 0) {
                        clearInterval(countdowns[questionId]);
                        mediaRecorder.stop();
                        $(`#start-recording-${questionId}`).removeClass(
                            "hidden"
                        );
                        $(`#stop-recording-${questionId}`).addClass("hidden");
                    }
                }, 1000);

                $(this).addClass("hidden");
                $(`#stop-recording-${questionId}`).removeClass("hidden");
            });
    });

    $(document).on("click", "[id^=stop-recording-]", function () {
        let questionId = $(this).attr("id").replace("stop-recording-", "");

        let audioData = $("#audio_data_" + questionId).val();

        if (audioData) {
            localStorage.setItem("audio_recorded_" + questionId, audioData);
        }

        if (mediaRecorders[questionId]) {
            mediaRecorders[questionId].stop();
        }
        clearInterval(countdowns[questionId]);
        $(`#countdown-timer-${questionId}`).addClass("hidden");
        $(this).addClass("hidden");
        $(`#start-recording-${questionId}`).removeClass("hidden");

        if (!$("#start-recording-" + questionId).data("recorded")) {
            $("#start-recording-" + questionId).data("recorded", true);
            let nextQuestion = jQuery("button[id^='start-recording-']")
                .filter(function () {
                    return jQuery(this).hasClass(
                        "opacity-50 cursor-not-allowed"
                    );
                })
                .first();
            if (nextQuestion.length > 0) {
                nextQuestion.removeClass("opacity-50 cursor-not-allowed");
            }
        }
    });
}
