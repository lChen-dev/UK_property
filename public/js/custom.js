$('.app-header__menu-handle').click(function(){
    if($(this).next().hasClass('active')){
        $(this).next().removeClass('active');
    }else{
        $(this).next().addClass('active');
    }
});
$('a[data-media-viewer-overlay]').click(function(){
    $('div[data-media-viewer]').removeClass('lg:hidden');
    var key=$(this).data('media-viewer-overlay');
    var k = key.split("-");
    switch(k[0]){
        case "foto":
            $('section[data-media-viewer-fotos]').removeClass('lg:hidden');
            $('section[data-media-viewer-plattegrond]').addClass('lg:hidden');
            $('section[data-media-viewer-foto360]').addClass('lg:hidden');
            $('section[data-media-viewer-video]').addClass('lg:hidden');
            $('section[data-media-viewer-overview]').addClass('lg:hidden');
            $('.media-viewer-fotos__slides').slick('slickGoTo', k[1] - 1);
            break;
        case "plattegrond":
            $('section[data-media-viewer-plattegrond]').removeClass('lg:hidden');
            $('section[data-media-viewer-fotos]').addClass('lg:hidden');
            $('section[data-media-viewer-foto360]').addClass('lg:hidden');
            $('section[data-media-viewer-video]').addClass('lg:hidden');
            $('section[data-media-viewer-overview]').addClass('lg:hidden');
            break;
        case "360":
            $('section[data-media-viewer-foto360]').removeClass('lg:hidden');
            $('section[data-media-viewer-fotos]').addClass('lg:hidden');
            $('section[data-media-viewer-plattegrond]').addClass('lg:hidden');
            $('section[data-media-viewer-video]').addClass('lg:hidden');
            $('section[data-media-viewer-overview]').addClass('lg:hidden');
            $('#pano').empty();
            embedpano({xml:"data/360degree/" + k[2].match(/\d+/)[0] + ".xml", target:"pano"});
            break;
        case "video":
            $('section[data-media-viewer-video]').removeClass('lg:hidden');
            $('section[data-media-viewer-foto360]').addClass('lg:hidden');
            $('section[data-media-viewer-fotos]').addClass('lg:hidden');
            $('section[data-media-viewer-plattegrond]').addClass('lg:hidden');
            $('section[data-media-viewer-overview]').addClass('lg:hidden');
            $('div[data-video-container]').html('<video width="640" height="480" controls><source src="/data/video/movie.mp4" type="video/mp4"></video>');
            break;
        case "overzicht":
            $('section[data-media-viewer-overview]').removeClass('lg:hidden');
            $('section[data-media-viewer-video]').addClass('lg:hidden');
            $('section[data-media-viewer-foto360]').addClass('lg:hidden');
            $('section[data-media-viewer-fotos]').addClass('lg:hidden');
            $('section[data-media-viewer-plattegrond]').addClass('lg:hidden');
            break;
   }
});

$('a[data-media-viewer-overlay-switch]').click(function(){
    $('div[data-media-viewer]').removeClass('lg:hidden');
    var key=$(this).data('media-viewer-overlay-switch');
    var k = key.split("-");
    switch(k[0]){
        case "foto":
            $('section[data-media-viewer-fotos]').removeClass('lg:hidden');
            $('section[data-media-viewer-plattegrond]').addClass('lg:hidden');
            $('section[data-media-viewer-foto360]').addClass('lg:hidden');
            $('section[data-media-viewer-video]').addClass('lg:hidden');
            $('section[data-media-viewer-overview]').addClass('lg:hidden');
            $('.media-viewer-fotos__slides').slick('slickGoTo', k[1] - 1);
            break;
        case "plattegrond":
            $('section[data-media-viewer-plattegrond]').removeClass('lg:hidden');
            $('section[data-media-viewer-fotos]').addClass('lg:hidden');
            $('section[data-media-viewer-foto360]').addClass('lg:hidden');
            $('section[data-media-viewer-video]').addClass('lg:hidden');
            $('section[data-media-viewer-overview]').addClass('lg:hidden');
            break;
        case "360":
            $('section[data-media-viewer-foto360]').removeClass('lg:hidden');
            $('section[data-media-viewer-fotos]').addClass('lg:hidden');
            $('section[data-media-viewer-plattegrond]').addClass('lg:hidden');
            $('section[data-media-viewer-video]').addClass('lg:hidden');
            $('section[data-media-viewer-overview]').addClass('lg:hidden');
            $('button[data-menu-item-param]').removeClass('active');
            $('#pano').empty();
            embedpano({xml:"data/360degree/" + k[2].match(/\d+/)[0] + ".xml", target:"pano"});
            break;
        case "video":
            $('section[data-media-viewer-video]').removeClass('lg:hidden');
            $('section[data-media-viewer-foto360]').addClass('lg:hidden');
            $('section[data-media-viewer-fotos]').addClass('lg:hidden');
            $('section[data-media-viewer-plattegrond]').addClass('lg:hidden');
            $('section[data-media-viewer-overview]').addClass('lg:hidden');
            $('div[data-video-container]').html('<video width="640" height="480" controls><source src="/data/video/movie.mp4" type="video/mp4"></video>');
            break;
        case "overzicht":
            $('section[data-media-viewer-overview]').removeClass('lg:hidden');
            $('section[data-media-viewer-video]').addClass('lg:hidden');
            $('section[data-media-viewer-foto360]').addClass('lg:hidden');
            $('section[data-media-viewer-fotos]').addClass('lg:hidden');
            $('section[data-media-viewer-plattegrond]').addClass('lg:hidden');
            break;
   }
});

$('.media-viewer-foto360 .menu-item-text').click(function(){
    var no = $(this).data('menu-item-param');
    $('button[data-menu-item-param]').removeClass('active');
    $(this).addClass('active');
    $('#pano').empty();
    embedpano({xml:"data/360degree/" + no.match(/\d+/)[0] + ".xml", target:"pano"});
});

$('button[data-media-viewer-close]').click(function(){
    $('div[data-media-viewer]').addClass('lg:hidden');
    var elem = document.documentElement;
    $('div[data-video-container]').html('');
    if (elem.requestFullscreen) {
    }
    else
    {
        document.exitFullscreen();    
        $('svg[data-fullscreen-open]').removeClass('hidden');
        $('svg[data-fullscreen-exit]').addClass('hidden');
    }
});
$('button[data-media-viewer-fullscreen]').click(function(){
    var elem = document.documentElement;
    if($('svg[data-fullscreen-exit]').hasClass('hidden')){
        $('svg[data-fullscreen-exit]').removeClass('hidden');
        $('svg[data-fullscreen-open]').addClass('hidden');
        elem.requestFullscreen();
    }
    else
    {
        $('svg[data-fullscreen-open]').removeClass('hidden');
        $('svg[data-fullscreen-exit]').addClass('hidden');
        document.exitFullscreen();
    }
});