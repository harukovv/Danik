
$(document).ready(function(){
   $.post("main.php", {
    id : "1"
   } , function(data){
    $("#idishnik").html(data);
   })
});