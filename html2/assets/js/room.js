$('.content').click(function(){
  var room = $(":input:radio[name=room]:checked").val();
  //alert(st);
  location.href('res_payment.html?room='+room);
});
