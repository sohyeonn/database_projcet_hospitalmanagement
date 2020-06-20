$('.content').click(function(){
  var depart = $(":input:radio[name=Depart_radio]:checked").val();
  //alert(st);
  var num=getParameter("num", false)
  console.log(num);
  // location.href('res_doc.html?depart='+depart);
  location.href('res_doc.html?num='+num+'&depart='+depart);
});


function getParameter(name, url) {
  if(!url) url = window.location.href;

  //console.log(url);

  name = name.replace(/[\[\]]/g, "\\$&");
  var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
  results = regex.exec(url);

  return results[2];
}
