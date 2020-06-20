$('.content').click(function(){
  var room = $(":input:radio[name=room]:checked").val();
  var num=getParameter("num", false)

  $.ajax({
    url				: './res_room_result.php?num='+num+'&room='+room,
    data			: {num:num, room:room},
    type			: 'GET',
    success		: function(data){
      //alert(data);
      location.href('res_room_result.php?num='+num+'&room='+room);
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
