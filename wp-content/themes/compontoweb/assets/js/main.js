jQuery(document).ready(function($){
  //load more
  const load_num = 4
  var times_loaded = 1
  $('article:gt('+(load_num-1) +')').hide()
  $('#loadmore').on('click', function(){
    times_loaded += 1
    $('article:lt('+ (load_num*times_loaded) +')').show(1000)
    console.log('Carregadas mais' +load_num+ ', Total Carregadas: ' +$('li:visible').length)
    if($('article:hidden').length){
      $('#loadmore').show()
    }else{
      $('#loadmore').hide()
    }
  })
});