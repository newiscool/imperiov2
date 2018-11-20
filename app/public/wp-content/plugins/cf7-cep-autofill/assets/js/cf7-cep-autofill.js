        jQuery(document).ready(function($) {
			
			//$(".cf7-cep-autofill").mask('00000-000');

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $(".cf7-cep-autofill__rua").val("");
                $(".cf7-cep-autofill__bairro").val("");
                $(".cf7-cep-autofill__cidade").val("");
                $(".cf7-cep-autofill__uf").val("");
            }
            
            //Quando o campo cep perde o foco.
            $(".cf7-cep-autofill").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $(".cf7-cep-autofill__rua").val("...");
                        $(".cf7-cep-autofill__bairro").val("...");
                        $(".cf7-cep-autofill__cidade").val("...");
                        $(".cf7-cep-autofill__uf").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $(".cf7-cep-autofill__rua").val(dados.logradouro);
                                $(".cf7-cep-autofill__bairro").val(dados.bairro);
                                $(".cf7-cep-autofill__cidade").val(dados.localidade);
                                $(".cf7-cep-autofill__uf").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });