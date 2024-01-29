$('main').on('click','.uzm',function (){
    alert("1");
    id = this.id;
    if($("#NameBook" + id).val() !== "" && $("#AuthorBook"+ id).val() !== "" && $("#DateOrder"+ id).val() !== "" && $("#BookIzdan"+ id).val() !== "" ){
        $.post("./edit.php", {
            id : id,
            NameBook : $("#NameBook"+id).val() ,
            AuthorBook : $("#AuthorBook"+id).val() ,
            DateOrder : $("#DateOrder"+id).val() ,
            BookIzdan : $("#BookIzdan"+id).val()
        } ,function(data){
            console.log(data);

        }
        )
    }else{
        alert("заполните все поля!");
    }
})