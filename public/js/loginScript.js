$(document).ready(function(){

    // Validações de preenchimento
    $(".conteiner .entry").blur(function(){

        if ($(this).val() == "") {
            
            $(this).closest(".conteiner").removeClass("check").addClass("error")
            $(this).closest(".conteiner").find(".alert").html("Campo obrigatório")

        } else if ($(this).closest(".conteiner").attr("id") == "login_user" && ($(this).val().indexOf("@") == -1 || $(this).val().indexOf(".") == -1)) {

            $(this).closest(".conteiner").removeClass("check").addClass("error")
            $(this).closest(".conteiner").find(".alert").html("O nome de usuário precisa ser um e-mail válido")

        } else {
            $(this).closest(".conteiner").removeClass("error").addClass("check")
            $(this).closest(".conteiner").find(".alert").html("")
        }

    });


});

function efetuar_login(){
    
    if ($(".conteiner.error").length == 0){
        alert("Login efetuado")
    }
}