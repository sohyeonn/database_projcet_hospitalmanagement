//2020.06.03 김효진
$('.content').click(function(){
  var doctor = $(":input:radio[name=doctor]:checked").val();
  var num=getParameter("num", false)
  var depart=getParameter("depart", false)
  console.log(num);
  console.log(doctor);
  console.log(depart);

  $.ajax({
    url				: './res_doc_result.php?num='+num+'&depart='+depart+'&doctor='+doctor,
    data			: {"num": num, "doctor": doctor,"depart": depart},
    type			: 'GET',
    success		: function(data){
    	//alert(data);
      location.href='res_doc_result.php?num='+num+'&depart='+depart+'&doctor='+doctor

    },
    error 		: function(xhr,status,error){
      alert(error);
    },
  })

});
function getParameter(name, url) {
  if(!url) url = window.location.href;

  name = name.replace(/[\[\]]/g, "\\$&");
  var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
  results = regex.exec(url);

  return results[2];
}
