            $(".star").click(function(){
                var valor = $(this).val().toString();
                valores = valor.split('-');
                var avaliacao = valores[0];
                var id = valores[1];
                $.ajax({
                    type: "POST",
                    url: "/static/Banco/Avaliar.php",
                    data: {id: id, avaliacao: avaliacao},
                    success: function(data) {
                        alert("Agradecemos sua avaliação!");
                    },
                    error: function(request, status, error) {
                        alert("Erro: " + request.responseText);
                    }
                });
            });