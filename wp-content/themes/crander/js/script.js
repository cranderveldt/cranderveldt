// JavaScript Document
jQuery(document).ready(function($){
  $('#menu a').each(function(){
    $(this).html('<span class="ss-icon ss-standard">' + $(this).attr('title') + '</span><span class="title">' + $(this).text() + '</span>');
  });
  $('#footer-nav a').each(function(){
    $(this).html('<span class="ss-icon ss-standard">' + $(this).attr('title') + '</span>');
  });
});
