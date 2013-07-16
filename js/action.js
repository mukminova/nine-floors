$('html').click(function() {
  closeInfoPanel();
});
function theRotator() {
  // Устанавливаем прозрачность всех картинок в 0
  $('div#rotator ul li').css({
    opacity: 0.0
  });
	 
  // Берем первую картинку и показываем ее (по пути включаем полную видимость)
  $('div#rotator ul li:first').css({
    opacity: 1.0
  });
	 
  // Вызываем функцию rotate для запуска слайдшоу, 5000 = смена картинок происходит раз в 5 секунд
  setInterval('rotate()',5000);
}
	 
function rotate() {	
  // Берем первую картинку
  var current = ($('div#rotator ul li.show')?  $('div#rotator ul li.show') : $('div#rotator ul li:first'));
	 
  // Берем следующую картинку, когда дойдем до последней начинаем с начала
  var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('div#rotator ul li:first') :current.next()) : $('div#rotator ul li:first'));	
	 
  // Расскомментируйте, чтобы показвать картинки в случайном порядке
  // var sibs = current.siblings();
  // var rndNum = Math.floor(Math.random() * sibs.length );
  // var next = $( sibs[ rndNum ] );
	 
  // Подключаем эффект растворения/затухания для показа картинок, css-класс show имеет больший z-index
  next.css({
    opacity: 0.0
  })
  .addClass('show')
  .animate({
    opacity: 1.0
  }, 1000);
	 
  // Прячем текущую картинку
  current.animate({
    opacity: 0.0
  }, 1000)
  .removeClass('show');
}
function stopPrepagenation(e){
  e.stopPropagation();
}

function closeInfoPanel(){
  if($("#all-site-menu").is(':visible')){
    $("#all-site-menu").fadeOut();
    $("#all-site-button").toggleClass('active');
  }
}
function openInfoPanel(){
  $("#all-site-menu").fadeIn(); 
  $("#all-site-button").toggleClass('active');
}
function takeActionSiteMenu(){
  if ($("#all-site-menu").is(':visible')) 
    closeInfoPanel();
  else 
    openInfoPanel();
}
$(function() {
  
  $(".vendor").find("span").hide().end().hover(function() { 
    $(this).find("span").stop().fadeIn(); 
  }, function() {
    $(this).find("span").stop().fadeOut(); 
  }); 
  // Запускаем слайдшоу
  theRotator();		
  
  $("#all-site-button").click(function() {
    takeActionSiteMenu();
  });
});
function loginValedate(){
  alert('asd');
}
