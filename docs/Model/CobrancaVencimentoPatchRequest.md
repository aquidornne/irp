# CobrancaVencimentoPatchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Status da cobrança. &lt;table&gt;&lt;tr&gt;&lt;td&gt;ENUM&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;REMOVIDA_PELO_USUARIO_RECEBEDOR&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt; | [optional] 
**devedor** | [**\DBSeller\ApiPixItau\Model\Devedor**](Devedor.md) |  | [optional] 
**valor** | [**\DBSeller\ApiPixItau\Model\CobrancaVencimentoPatchRequestValor**](CobrancaVencimentoPatchRequestValor.md) |  | [optional] 
**loc** | [**\DBSeller\ApiPixItau\Model\CobrancaVencimentoPatchRequestLoc**](CobrancaVencimentoPatchRequestLoc.md) |  | [optional] 
**chave** | **string** | Chave DICT do recebedor | [optional] 
**solicitacao_pagador** | **string** | O campo solicitacaoPagador, determina um texto a ser apresentado ao pagador para que ele possa digitar uma informação correlata, em formato livre, a ser enviada ao recebedor | [optional] 
**calendario** | [**\DBSeller\ApiPixItau\Model\CobrancaVencimentoPatchRequestCalendario**](CobrancaVencimentoPatchRequestCalendario.md) |  | [optional] 
**info_adicionais** | [**\DBSeller\ApiPixItau\Model\InformacaoAdicional[]**](InformacaoAdicional.md) | Cada respectiva informação adicional contida na lista (nome e valor) deve ser apresentada ao pagador | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

