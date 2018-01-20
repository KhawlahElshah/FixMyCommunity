


$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
 


$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});



$( "#council_id" ).change(function() {
  $("#count").html();

});


$(".typerow").click(function(){
  var $tr = $(this).closest('tr');
  var row = $tr.index()+1;
  
 
  var cell = $('table#typestable tr:nth-child(' + row+ ') td:nth-child(' + 2 + ')').text();
 var id =$('table#typestable tr:nth-child(' + row+ ') td:nth-child(' + 1 + ')').text();
  $("#typeidfield").val(id);
 $("#typeidfielddelete").val(id);
$("#typenamefield").val(cell);
 
});




$(".councilrow").click(function(){
  var $tr = $(this).closest('tr');
  var row = $tr.index()+1;
  
 
  var cell = $('table#councilstable tr:nth-child(' + row+ ') td:nth-child(' + 2 + ')').text();
  var id =$('table#councilstable tr:nth-child(' + row+ ') td:nth-child(' + 1 + ')').text();
  $("#councilidfield").val(id);
  $("#councilidfielddelete").val(id);
  $("#councilnamefield").val(cell);
});



$(".staterow").click(function(){
  var $tr = $(this).closest('tr');
  var row = $tr.index()+1;
  
 
  var cell = $('table#statestable tr:nth-child(' + row+ ') td:nth-child(' + 2 + ')').text();
  var id =$('table#statestable tr:nth-child(' + row+ ') td:nth-child(' + 1 + ')').text();
  $("#stateidfield").val(id);
  $("#stateidfielddelete").val(id);
  $("#statenamefield").val(cell);
  
});


$(".userrow").click(function(){
  var $tr = $(this).closest('tr');
  var row = $tr.index()+1;
  
 
 
  var id =$('table#userstable tr:nth-child(' + row+ ') td:nth-child(' + 1 + ')').text();
  var name = $('table#userstable tr:nth-child(' + row+ ') td:nth-child(' + 2 + ')').text();
  var email = $('table#userstable tr:nth-child(' + row+ ') td:nth-child(' + 3 + ')').text();
  var council = $('table#userstable tr:nth-child(' + row+ ') td:nth-child(' + 4 + ')').text();
  $("#useridfield").val(id);
  $("#usernamefield").val(name);
  $("#useremailfield").val(email);
  $("#usercouncilfield").val(council);
  $("#useridfielddelete").val(id);
  
});

$('#councilsselect').change(function(){

//   $('#count').val();
// $('councilsselect').val();
// $('')

//alert($(this).val());
$('#showcouncilid').val($(this).val());
});



$('.reportupdate').click(function(){

  var $tr = $(this).closest('tr');
  var row = $tr.index()+1;
  
  var id =$('table#settingstable tr:nth-child(' + row+ ') td:nth-child(' + 1 + ')').text();
$('#reportidfield').val(id);
});



$('#councilsselect').change(function(){

  var index=$(this)[0].selectedIndex;

var count= $('table#hiddenshowtable tr:nth-child(' + index+ ') td:nth-child(' + 2 + ')').text();
var highdanger=$('table#hiddenshowtable tr:nth-child(' + index+ ') td:nth-child(' + 3 + ')').text();
var avragedanger=$('table#hiddenshowtable tr:nth-child(' + index+ ') td:nth-child(' + 4 + ')').text();
var lowdanger=$('table#hiddenshowtable tr:nth-child(' + index+ ') td:nth-child(' + 5 + ')').text();
var done= $('table#hiddenshowtable tr:nth-child(' + index+ ') td:nth-child(' + 6 + ')').text();

$('#count').text(count);
$('#high').text(highdanger);
$('#avrage').text(avragedanger);
$('#low').text(lowdanger);
$('#countdone').text(done);

});



setTimeout(function(){$('.flash-message').fadeOut();}, 5000);
