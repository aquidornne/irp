# Cobranca

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**calendario** | [**\DBSeller\ApiPixItau\Model\CobrancaCalendario**](CobrancaCalendario.md) |  | 
**devedor** | [**\DBSeller\ApiPixItau\Model\Pessoa**](Pessoa.md) |  | [optional] 
**loc** | [**\DBSeller\ApiPixItau\Model\Loc**](Loc.md) |  | [optional] 
**valor** | [**\DBSeller\ApiPixItau\Model\CobrancaValor**](CobrancaValor.md) |  | 
**chave** | **string** | Chave DICT do recebedor | 
**solicitacao_pagador** | **string** | O campo solicitacaoPagador, determina um texto a ser apresentado ao pagador para que ele possa digitar uma informação correlata, em formato livre, a ser enviada ao recebedor | [optional] 
**info_adicionais** | [**\DBSeller\ApiPixItau\Model\InformacaoAdicional[]**](InformacaoAdicional.md) | Cada respectiva informação adicional contida na lista (nome e valor) deve ser apresentada ao pagador | [optional] 
**txid** | **string** | O campo txid determina o identificador da transação. O objetivo desse campo é ser um elemento que possibilite a conciliação de pagamentos. O txid é criado exclusivamente pelo usuário recebedor e está sob sua responsabilidade. Deve ser único por CNPJ do recebedor. Para Code dinâmico o campo deve possuir de 26 posição até 35 posições. Os caracteres permitidos no contexto do Pix para o campo txId são: Letras minúsculas, de ‘a’ a ‘z’, Letras maiúsculas, de ‘A’ a ‘Z’, Dígitos decimais, de ‘0’ a ‘9’ | 
**revisao** | **int** | Quantidade de revisões da cobrança. | 
**location** | **string** | URL com a localização do payload informado na criação da cobrança | 
**status** | **string** | Status do registro da cobrança. &lt;table&gt;&lt;tr&gt;&lt;td&gt;ENUM&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;ATIVA&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;CONCLUIDA&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;REMOVIDA_PELO_USUARIO_RECEBEDOR&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;REMOVIDA_PELO_PSP&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt; | 
**pix_copia_e_cola** | **string** | Este campo retorna o valor do Pix Copia e Cola correspondente à cobrança. Trata-se da sequência de caracteres que representa o BR Code. | [optional] 
**pix** | [**\DBSeller\ApiPixItau\Model\Pix[]**](Pix.md) | Lista de Pix recebidos | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

