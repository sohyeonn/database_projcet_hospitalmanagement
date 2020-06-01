//2020.06.02 김효진-
$('.content').ready(function(){
  var st = $(":input:radio[name=Depart_radio]:checked").val();
  location.href('res_doc.html?st='+st);
});
