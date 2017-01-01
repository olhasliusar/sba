;(function($){
    $(document).ready(function(){

        var iframe = document.getElementById('youtube-iframe');

        var srcVideo = iframe.src;
        newVideo = srcVideo.replace('watch?v=', 'embed/');

        iframe.src = newVideo;
        
    });
})(jQuery);