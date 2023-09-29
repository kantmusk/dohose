var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 2. Создается объект player. This function creates an <iframe> (and YouTube player)
// где videoId - это идентификатор видео. 
// В любом месте можно изменить значение видео с помощью player.loadVideoById('новый_идентификатор_видео');
// Параметры плеера, такие как показать/скрыть controls, showinfo можно править в массиве playerVars

var player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    height: '490',
    width: '100%',
    videoId: 'are8d8mWbnU',
    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });
}

function onPlayerReady(event) {
  //event.target.playVideo();
}

// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for six seconds and then stop.
var done = false;
function onPlayerStateChange(event) {
  if (event.data == YT.PlayerState.PLAYING && !done) {
    setTimeout(stopVideo, 6000);
    done = true;
  }
}
function stopVideo() {
  player.stopVideo();
}



  
function stopYoutubeVideo(){
    player.stopVideo();
    $('.mask').remove();
    $('.modal-window-theatre').hide();
    
}

function stopVideo() {
   player.stopVideo();
}

//Эта простая функция парсит URL ссылки видео с youtube и возвращает идентификатор видео.
function youtube_parser(url){
    var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
    var match = url.match(regExp);
    return (match&&match[7].length==11)? match[7] : false;
}