var a;
 $("body").load(function(){
    $("section").hide();
});

$("a").click(function(){
$("section").hide();
});

$("#home").click(function(){
$("section").hide();
$("#home").show();
})
function openNav() {
    document.getElementById("notifications").style.width = "100%";
    document.getElementById("main").style.marginLeft = "100%";
}

function closeNav() {
    document.getElementById("notifications").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
function bcolor(e)
{
  document.getElementById("nav").style.backgroundColor=e;
}
  $( function() {
    $( "#to" ).datepicker();
  } );
