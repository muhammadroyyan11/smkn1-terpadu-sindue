//Camera Slide-Show Custom Js Here.
$(function () {
    $('.camera_wrap').camera({
        playPause: true,
        navigation: true,
        navigationHover: true,
        hover: false,
        loader: 'pie',
        loaderColor: '#f6b530',
        loaderBgColor: '#222222',
        loaderOpacity: 1,
        loaderPadding: 0,
        time: 4000,
        transPeriod: 1500,
        pauseOnClick: true,
        pagination: false
    });
});