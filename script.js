const liveStreamContainer = document.getElementById('live-stream');

// Function to initialize the live stream
function initLiveStream() {
    const youtubeVideoId = 'your-youtube-video-id'; // Replace with your YouTube video ID
    const iframeElement = document.createElement('iframe');
    iframeElement.src = `https://www.youtube.com/watch?v=xWRNjYJFP00/${youtubeVideoId}?autoplay=1&controls=1`;
    iframeElement.allowFullscreen = true;

    // Function to toggle fullscreen mode
    function toggleFullScreen() {
        if (!document.fullscreenElement) {
            iframeElement.requestFullscreen();
        } else {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            }
        }
    }

    // Event listener to toggle fullscreen when double-clicked
    iframeElement.addEventListener('dblclick', toggleFullScreen);

    liveStreamContainer.appendChild(iframeElement);
}

initLiveStream();
