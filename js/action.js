//$('html').click(function() {
//  closeWindow();
//}); 
//$(function() {
//  cleaneInput();
//  $('.registration').click(function(){
//    $('.registration-window').parent('.obert_window').show();
//  });
//  $('.login').click(function(){
//    $('.login-window').parent('.obert_window').show();
//  });
//});
/*останавливаем распространение волны событий, нужно что закрыть окно щелкая по документу
 **/
function stopPrepagination(event){
  if (event.stopPropagation) {
    event.stopPropagation();
  }
}
function closeWindow(){
  if($('.obert_window').is(':visible'))
    $('.obert_window').hide();
}
function openWindow(el){
  el.next('.obert_window').show();
}