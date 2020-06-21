//2020.06.01 18013175 김효진
$('.content').click(function(){
    var num=getParameter("num", false)

  $('#years').change(function(e) {
    console.log( $('#years option:selected').val());
    var year = $('#years option:selected').val();
    $('#months').change(function(e) {
      console.log( $('#months option:selected').val());
      var month = $('#months option:selected').val();
      $('#days').change(function(e) {
        console.log( $('#days option:selected').val());
        var day = $('#days option:selected').val();
        $('#choiceTime').change(function(e) {
          console.log( $('#choiceTime option:selected').val());
          var time = $('#choiceTime option:selected').val();

          var dateStr = year+"-"+month+"-"+day+" "+time+":00";

          $.ajax({
            url				: './res_date_result.php?num='+num+'&date='+dateStr,
            data			: {"num": num, "date": dateStr},
            type			: 'GET',
            success		: function(data){
              //alert(data);
              location.href='res_date_result.php?num='+num+'&date='+dateStr
            },
            error 		: function(xhr,status,error){
              alert(error);
            },
          })
        });
      });
    });
  }
);
});
function getParameter(name, url) {
  if(!url) url = window.location.href;

  name = name.replace(/[\[\]]/g, "\\$&");
  var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
  results = regex.exec(url);

  return results[2];
}
