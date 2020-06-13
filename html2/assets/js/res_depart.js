$('.content').click(function(){
  var depart = $(":input:radio[name=Depart_radio]:checked").val();
  //alert(st);
  location.href('res_doc.html?depart='+depart);
});
