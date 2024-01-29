$("#OrderSend").click(function(){
    
    if($("#NameBook").val() !== "" && $("#AuthorBook").val() !== "" && $("#DateOrder").val() !== "" && $("#BookIzdan").val() !== "" ){
        $.post("./order.php", {
            NameBook : $("#NameBook").val() ,
            AuthorBook : $("#AuthorBook").val() ,
            DateOrder : $("#DateOrder").val() ,
            BookIzdan : $("#BookIzdan").val()
        } ,function(data){
            alert(data);
            if(data != '0'){
                let link = "main1.php";
                window.location.replace(link);
            }else{
                alert("заполните все поля!");
            }

        }
        )
    }
})

$( "#OrderSend" ).click(function( event ) {
  event.preventDefault();
});
