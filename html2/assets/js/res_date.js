//2020.06.14 18013175 김효진
$('.content').click(function(){
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

        var date = new Date(year,month,day,time,0,0);

        $.ajax({
              type:"GET",
              url:".res_date_result.php",
              data : {date},
              dataType : "HTML",
              success: function(HTML){
                  console.log(HTML);
              },
              error: function(xhr, status, error) {
                  alert(error);
              }
          });

        });
      });
    });
  });
});
