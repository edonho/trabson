$("#btnTeste").click(function(){           
    //Sem parâmetros: o efeito é executado em 400ms
    $("#wrapper").fadeOut();
    //Parâmetro com a duração em ms do efeito
    $("#wrapper").fadeOut(1000);
    //Parâmetro slow: o efeito é executado em 600ms
    $("#wrapper").fadeOut("slow");
    //Parâmetro fast: o efeito é executado em 200ms
    $("#wrapper").fadeOut("fast");
    //Informada duração e função de callback
    $("#wrapper").fadeOut("fast",
        function(){
            alert("fade concluido");
        }
    );
});
