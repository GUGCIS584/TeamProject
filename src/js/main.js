$(document).ready(function(){
  $("#Yearly_salary").hide();
  $("#Subject_name1").hide();
  $("#Subject_name2").hide();
  $("#Subject_name3").hide();
  $("#Subject_name4").hide();
  $("#Subject_name5").hide();
  $("#Pay_per_sebject").hide();
  $("#Hours").hide();


    $('#Subject_total').on('change', function() {
      if ( this.value === "0"){
        $("#Subject_name1").hide();
        $("#Subject_name2").hide();
        $("#Subject_name3").hide();
        $("#Subject_name4").hide();
        $("#Subject_name5").hide();
      }
      if ( this.value === "1"){
        $("#Subject_name1").show();
        $("#Subject_name2").hide();
        $("#Subject_name3").hide();
        $("#Subject_name4").hide();
        $("#Subject_name5").hide();
      }
      else if ( this.value === "2"){
        $("#Subject_name1").show();
        $("#Subject_name2").show();
        $("#Subject_name3").hide();
        $("#Subject_name4").hide();
        $("#Subject_name5").hide();
      }
      else if ( this.value === "3"){
        $("#Subject_name1").show();
        $("#Subject_name2").show();
        $("#Subject_name3").show();
        $("#Subject_name4").hide();
        $("#Subject_name5").hide();
      }
      else if ( this.value === "4"){
        $("#Subject_name1").show();
        $("#Subject_name2").show();
        $("#Subject_name3").show();
        $("#Subject_name4").show();
        $("#Subject_name5").hide();
      }
      else if ( this.value === "5"){
        $("#Subject_name1").show();
        $("#Subject_name2").show();
        $("#Subject_name3").show();
        $("#Subject_name4").show();
        $("#Subject_name5").show();
      }
    });

    $('#Type_of_job').on('change', function() {
      if ( this.value === "0"){

        $("#Yearly_salary").hide();
        $("#Pay_per_sebject").hide();
        $("#Hours").hide();
      }
      if ( this.value === "part-time"){
        $("#Yearly_salary").hide();
        $("#Pay_per_sebject").show();
        $("#Hours").show();
      }
      else if ( this.value === "full-time"){
        $("#Yearly_salary").show();
        $("#Pay_per_sebject").hide();
        $("#Hours").hide();
      }
    });


});
