=== Contact Form 7 - Autopreenchimento de Endereço ===
Contributors: fabbricaweb
Donate link: https://www.fabbricaweb.com.br
Tags: Contact Form 7, CF7, cep, endereco, autopreenchimento, autopreencher, rua, avenida, bairro, cidade, estado
Requires at least: 4.0
Tested up to: 4.9
Requires PHP: 5.5
Stable tag: 1.0.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Preenchimento automático de campos de endereço baseado no CEP informado.

== Description ==

**Contact Form 7 - Autopreenchimento de Endereço** permite que os campos de logradouro (rua, avenida e etc), bairro, cidade e estado (UF) sejam prenchidos automaticamente baseado no CEP informado.

> É necessário que o plugin Contact Form 7 esteja instalado e ativado.

**Contact Form 7 - Autopreenchimento de Endereço** identifica o campo que irá receber o CEP e os campos a serem preenchidos automaticamente através de **classes CSS específicas** que informam ao plugin o valor que o campo deve receber.

São elas:

* **cf7-cep-autofill** no campo em que o usuário deve preencher o **CEP**
* **cf7-cep-autofill__rua** para receber o valor do **logradouro**
* **cf7-cep-autofill__bairro** para receber o valor do **bairro**
* **cf7-cep-autofill__cidade** para receber o valor da **cidade**
* **cf7-cep-autofill__uf** para receber o valor do **estado**

Exemplos:

`[text* cep class:cf7-cep-autofill]`
`[text* logradouro class:cf7-cep-autofill__rua]`
`[text* bairro class:cf7-cep-autofill__bairro]`
`[text* cidade class:cf7-cep-autofill__cidade]`
`[text* estado class:cf7-cep-autofill__uf]`

Caso o campo da UF seja do tipo select (menu suspenso):

`[select* estado class:cf7-cep-autofill__uf include_blank "AC" "AL" "AP" "AM" "BA" "CE" "DF" "ES" "GO" "MA" "MT" "MS" "MG" "PA" "PB" "PR" "PE" "PI" "RJ" "RN" "RS" "RO" "RR" "SC" "SP" "SE " "TO"]`

= Dúvidas? =

Você pode esclarecer suas dúvidas criando um tópico no [fórum de ajuda do WordPress](https://wordpress.org/support/plugin/cf7-cep-autofill).

= Créditos =

Foram utilizados os seguintes scripts/serviços de terceiros:

* [ViaCEP](https://viacep.com.br/).

== Installation ==

1. Faça o upload dos arquivos do plugin no diretório `/wp-content/plugins/cf7-cep-autofill`, ou instale diretamente pela área de plugins do WordPress.
2. Ative o plugin.

== Frequently Asked Questions ==

= Quais formatos de CEP o plugin aceita? =

O plugin aceita o CEP nos seguintes formatos: 00000-000, 00.000-00 e 00000000.

== Changelog ==

= 1.0.4 (2018-06-04) =
- Correction of Plugin URI.

= 1.0.3 (2018-06-04) =
- Correction of readme.txt file.

= 1.0.2 (2018-06-03) =
- Correction of readme.txt file.

= 1.0.1 (2018-06-03) =
- Correction of readme.txt file.

= 1.0 (2018-06-03) =
- First release.