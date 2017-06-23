
jQuery( document ).ready(function() {
    jQuery('#side_info').prepend("<img id='monkey_icon' src='"+templateUrl+"/images/chat_green.png' />");
    jQuery('#lush_logo').prepend("<a href='https://www.lush.com/' target='_blank'><img id='lush_logo' src='"+templateUrl+"/images/lush_logo.png' /></a>");
});



// poster frame click event
jQuery(document).on('click','.js-videoPoster',function(ev) {
  ev.preventDefault();
  var $poster = jQuery(this);
  var $wrapper = $poster.closest('.js-videoWrapper');
  videoPlay($wrapper);
});

// play the targeted video (and hide the poster frame)
function videoPlay($wrapper) {
  var $iframe = $wrapper.find('.js-videoIframe');
  var src = $iframe.data('src');
  // hide poster
  $wrapper.addClass('videoWrapperActive');
  // add iframe src in, starting the video
  $iframe.attr('src',src);
}

// stop the targeted/all videos (and re-instate the poster frames)
function videoStop($wrapper) {
  // if we're stopping all videos on page
  if (!$wrapper) {
    var $wrapper = $('.js-videoWrapper');
    var $iframe = $('.js-videoIframe');
  // if we're stopping a particular video
  } else {
    var $iframe = $wrapper.find('.js-videoIframe');
  }
  // reveal poster
  $wrapper.removeClass('videoWrapperActive');
  // remove youtube link, stopping the video from playing in the background
  $iframe.attr('src','');
}