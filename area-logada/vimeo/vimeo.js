// var iframe = document.querySelector('iframe');
// var player = new Vimeo.Player(iframe);

// player.on('play', function() {
//   console.log('Played the video');
// })

// player.getVideoTitle().then(function(title) {
//   console.log('title:', title);
// });

var optionsPlayer1 = {
  id: 470569855,
  width: 900
}

var videoPlayer1 = new Vimeo.Player('playerOrbo', optionsPlayer1)

videoPlayer1.setVolume(.5)
videoPlayer1.on('play', function() {
  console.log('Played the first video')
})