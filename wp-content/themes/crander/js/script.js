// JavaScript Document
jQuery(document).ready(function($){
  $('#container nav a').each(function(){
    $(this).html('<span class="ss-icon ss-standard">' + $(this).text() + '</span><span class="title">' + $(this).attr('title') + '</span>');
  });
  $('#container nav a').hover(function(e){
    $(this).width($(this).find('span.title').width() + 39);
  }, function(e) {
    $(this).width(24);
  });
});
