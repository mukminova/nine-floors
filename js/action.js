//$(function(){
//  $('.login-button').click(function(){
//    //    $.ajax({
//    //      url:"/site/profile",
//    //      type: "POST",
//    //      success:function() {
//    //        closeWindow();}
//    //    $.post("profile", "json");
//    $('.login-button').submit();
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
function addPeople(el){
  el.after("<div class='newpeople'><br/><label>Фамилия Имя</label>\n\
<input type='text'>\n\
<div class='delete' onclick='deletePeople($(this))'></div><br/></div>");
}
function deletePeople(el){
  el.parent('.newpeople').hide();
}



//function AjaxRequest(result_id,url) { 
//  jQuery.ajax({ 
//    url:     url, //Адрес подгружаемой страницы 
//    type:     "POST", //Тип запроса 
//    dataType: "html", //Тип данных 
//    error: function (){ //Если ошибка 
//      alert("Ошибка соединения"); 
//    }, 
//    //success - функция, которая вызывается, когда 
//    //запрос прошёл успешно и данные (data) получены 
//    success: function(response){  
//      document.getElementById(result_id).innerHTML = response; 
//    } 
//  }); 

