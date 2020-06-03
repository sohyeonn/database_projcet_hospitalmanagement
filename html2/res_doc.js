//2020.06.03 김효진
$('.content').click(function(){
  var depart = $(":input:radio[name=Depart_radio]:checked").val();
  var doctor = $(":input:radio[name=doctor]:checked").val();
  location.href('res_date.html?depart='+depart+'?doctor='+doctor);
});
