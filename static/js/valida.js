// function formEstudio(){
//     $("#usuarioForm").fadeOut("slow");
//     $("#estudioForm").fadeIn("slow");
// }
// function formUsuario(){
//     $("#estudioForm").fadeOut("fast");
//     $("#usuarioForm").fadeIn("slow");
// }

// DESCULPA RAFA TO FAZENDO AQUI

$(function(){
    $("#formEstudio").click(function(){
        $(".formularioUsuario").stop().fadeOut(function(){
            $(".formularioEstudio").stop().fadeIn();
        });
    });
    $("#formUsuario").click(function(){
        $(".formularioEstudio").stop().fadeOut(function(){
            $(".formularioUsuario").stop().fadeIn();
        });
    });
});

$(function(){
    $("#logEstudio").click(function(){
        $(".loginUsuario").stop().fadeOut(function(){
            $(".loginEstudio").stop().fadeIn();
        });
    });
    $("#logUsuario").click(function(){
        $(".loginEstudio").stop().fadeOut(function(){
            $(".loginUsuario").stop().fadeIn();
        });
    });
});