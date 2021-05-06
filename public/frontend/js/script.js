$(document).scroll(function() {
    var isScrolled = $(this).scrollTop() > $(".topBar").height();
    $(".topBar").toggleClass("scrolled", isScrolled);
});

function volumeToggle(button) {
    var muted = $(".previewVideo").prop("muted");
    $(".previewVideo").prop("muted", !muted);

    $(button).find("i").toggleClass("fa-volume-mute");
    $(button).find("i").toggleClass("fa-volume-up");
}

function previewEnded() {
    $(".previewVideo").toggle(); // Toggles the hidden/nonhidden property of the element.
    $(".previewImage").toggle();
}

function goBack() {
    window.history.back();
}

function startHideTimer() {
    var timeout = null;

    $(document).on("mousemove", function() {
        clearTimeout(timeout);
        $(".watchNav").fadeIn();
        timeout = setTimeout(function() {
            $(".watchNav").fadeOut();
        }, 2000);
    });
}

function initVideo(videoId, username, _token=null) {
    startHideTimer();
    setStartTime(videoId, username, _token);
    updateProgressTimer(videoId, username, _token);
}

function updateProgressTimer(videoId, username,_token=null) {
    addDuration(videoId, username, _token);
    
    var timer;
    $("video").on("playing", function(event) {
        window.clearInterval(timer);
        
        timer = window.setInterval(function() {
            updateProgress(videoId, username, event.target.currentTime, _token);
        }, 3000);
    }).on("ended", function() {
        setFinished(videoId, username);
        window.clearInterval(timer);
    });
}

function addDuration(videoId, username, _token=null) {
    $.post("/ajax/addDuration", {video_id: videoId, user_id: username, _token:_token}, function(data) {
        if (data !== null && data !== "") {
            alert(data);
        }
    });
}

function updateProgress(videoId, username, progress, _token=null) {
    $.post("/ajax/updateDuration", {video_id: videoId, user_id: username, progress: progress, _token:_token}, function(data) {
        if (data !== null && data !== "") {
            alert(data);
        }
    });
}

function setFinished(videoId, username, _token=null) {
    $.post("ajax/setFinished", {videoId: videoId, username: username, _token:_token}, function(data) {
        if (data !== null && data !== "") {
            alert(data);
        }
    });
}

function setStartTime(videoId, username, _token=null) {
    $.post("/ajax/getProgress", {video_id: videoId, user_id: username, _token:_token}, function(data) {
        if (isNaN(data)) {
            alert(data);
            return;
        }

        $("video").on("canplay", function() {
            this.currentTime = data;
            $("video").off("canplay");
        })
    })
}

function restartVideo() {
    $("video")[0].currentTime = 0; // JavaScript object
    $("video")[0].play();
    $(".upNext").fadeOut();
}

function watchVideo(videoId) {
    console.log("Hello from watchVideo()");
    console.log(videoId);
    window.location.href = "/watch/" + videoId;
}

function showUpNext() {
    $(".upNext").fadeIn();
}