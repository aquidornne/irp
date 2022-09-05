# DBSeller\ApiPixItau\CobrancaImediataCobApi

All URIs are relative to *https:/secure.api.itau/pix_recebimentos/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getcob**](CobrancaImediataCobApi.md#getcob) | **GET** /cob | 
[**getcobtxid**](CobrancaImediataCobApi.md#getcobtxid) | **GET** /cob/{txid} | 
[**getcobtxidqrcode**](CobrancaImediataCobApi.md#getcobtxidqrcode) | **GET** /cob/{txid}/qrcode | 
[**patchcobtxid**](CobrancaImediataCobApi.md#patchcobtxid) | **PATCH** /cob/{txid} | 
[**postcob**](CobrancaImediataCobApi.md#postcob) | **POST** /cob | 
[**putcobtxid**](CobrancaImediataCobApi.md#putcobtxid) | **PUT** /cob/{txid} | 

# **getcob**
> \DBSeller\ApiPixItau\Model\Cobrancas getcob($inicio, $fim, $cpf, $cnpj, $location_presente, $status, $paginacao_pagina_atual, $paginacao_itens_por_pagina, $x_correlation_id)



Endpoint para consultar cobranças imediatas através de parâmetros como início, fim, cpf, cnpj e status.

### Example
```php
<?php
require_once('/path/para/pixrecebimentos-itau/vendor/autoload.php')

/**
 * ##################################################################
 * Configurando para uso em ambiente desenvolvimento (SandBox Itaú)
 * ##################################################################
 * 
 * 
 * (OBS): Para modo producao = TRUE
 *        Em modo produção é necessário o uso de certificado digital , chave privada.
 *        Também é preciso alterar o Host Base da API, assim como a Url Oauth2.
 *        Ex:
 *        $config->setModoProducao(true);
*         $config->setHost('https:/secure.api.itau/pix_recebimentos/v2');
*         $config->setUrlOAuth('https://sts.itau.com.br/api/jwt');
*         $config->setApiKey('client_id','XXXXXXXXXXX');
*         $config->setApiKey('client_secret','YYYYYYYYYYYY');
*         $config->setPathCertificado('c:\\caminho\\certificado\\itau\\certificado.pem');
*         $config->setPathPrivateKey('c:\\caminho\\private\\key\\itau\\private_key.pem');
*         $clienteOauth = new DBSeller\ApiPixItau\Api\OauthApi(new GuzzleHttp\Client(),$config);
*         $accessTokenOauth = $clienteOauth->gerarAccessToken();
*         $config->setAccessToken($accessTokenOauth);
 *      
 */
$config = DBSeller\ApiPixItau\Configuration::getDefaultConfiguration();
$config->setModoProducao(false);
$config->setHost('https://devportal.itau.com.br/sandboxapi/pix_recebimentos_ext_v2/v2');
$config->setUrlOAuth('https://devportal.itau.com.br/api/jwt');
$config->setApiKey('client_id','c82c8177-5f5a-349e-88e2-30a5b2a78a54');
$config->setApiKey('client_secret','f013e480-92ec-4828-9d65-8d9b3100a885');
$clienteOauth = new DBSeller\ApiPixItau\Api\OauthApi(new GuzzleHttp\Client(),$config);
$accessTokenOauth = $clienteOauth->gerarAccessToken();
$config->setAccessToken($accessTokenOauth);

echo "Dados usados na configuração:\n";
echo "Modo Produção: ". $config->isModoProducao() ."\n";
echo "Host Base Api Recebimentos PIX: " . $config->getHost() . "\n";
echo "Url Oauth: " . $config->getUrlOAuth() . "\n";
echo "Client_id:" . $config->getApiKey('client_id') . "\n";
echo "Client_secret:" . $config->getApiKey('client_secret') . "\n";
echo "Access_token:" . $config->getAccessToken() . "\n";
echo "\n\n";
/**
 * Fim da configuração do ambiente SandBox
 */

$apiInstance = new DBSeller\ApiPixItau\Api\CobrancaImediataCobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inicio = "inicio_example"; // string | Data inicial. Respeita RFC 3339.
$fim = "fim_example"; // string | Data de fim. Respeita RFC 3339.
$cpf = "cpf_example"; // string | CPF do pagador cadastrado na cobrança.
$cnpj = "cnpj_example"; // string | CNPJ do pagador cadastrado na cobrança.
$location_presente = true; // bool | Indicador se localização está presente.
$status = "status_example"; // string | Filtro pelo Status da cobrança. Pode ser ATIVA, CONCLUIDA, REMOVIDA_PELO_PSP OU REMOVIDA_PELO_USUARIO_RECEBEDOR
$paginacao_pagina_atual = 56; // int | Numero da Página que deseja realizar o acesso, valor considerado por default 0.
$paginacao_itens_por_pagina = 56; // int | Quantidade de ocorrência retornadas por pagina, valor por default 100.
$x_correlation_id = "x_correlation_id_example"; // string | Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail

try {
    $result = $apiInstance->getcob($inicio, $fim, $cpf, $cnpj, $location_presente, $status, $paginacao_pagina_atual, $paginacao_itens_por_pagina, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CobrancaImediataCobApi->getcob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inicio** | **string**| Data inicial. Respeita RFC 3339. |
 **fim** | **string**| Data de fim. Respeita RFC 3339. |
 **cpf** | **string**| CPF do pagador cadastrado na cobrança. | [optional]
 **cnpj** | **string**| CNPJ do pagador cadastrado na cobrança. | [optional]
 **location_presente** | **bool**| Indicador se localização está presente. | [optional]
 **status** | **string**| Filtro pelo Status da cobrança. Pode ser ATIVA, CONCLUIDA, REMOVIDA_PELO_PSP OU REMOVIDA_PELO_USUARIO_RECEBEDOR | [optional]
 **paginacao_pagina_atual** | **int**| Numero da Página que deseja realizar o acesso, valor considerado por default 0. | [optional]
 **paginacao_itens_por_pagina** | **int**| Quantidade de ocorrência retornadas por pagina, valor por default 100. | [optional]
 **x_correlation_id** | **string**| Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail | [optional]

### Return type

[**\DBSeller\ApiPixItau\Model\Cobrancas**](../Model/Cobrancas.md)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getcobtxid**
> \DBSeller\ApiPixItau\Model\Cobranca getcobtxid($txid, $revisao)



Endpoint para consultar uma cobrança através de um determinado txid.

### Example
```php
<?php
require_once('/path/para/pixrecebimentos-itau/vendor/autoload.php')

/**
 * ##################################################################
 * Configurando para uso em ambiente desenvolvimento (SandBox Itaú)
 * ##################################################################
 * 
 * 
 * (OBS): Para modo producao = TRUE
 *        Em modo produção é necessário o uso de certificado digital , chave privada.
 *        Também é preciso alterar o Host Base da API, assim como a Url Oauth2.
 *        Ex:
 *        $config->setModoProducao(true);
*         $config->setHost('https:/secure.api.itau/pix_recebimentos/v2');
*         $config->setUrlOAuth('https://sts.itau.com.br/api/jwt');
*         $config->setApiKey('client_id','XXXXXXXXXXX');
*         $config->setApiKey('client_secret','YYYYYYYYYYYY');
*         $config->setPathCertificado('c:\\caminho\\certificado\\itau\\certificado.pem');
*         $config->setPathPrivateKey('c:\\caminho\\private\\key\\itau\\private_key.pem');
*         $clienteOauth = new DBSeller\ApiPixItau\Api\OauthApi(new GuzzleHttp\Client(),$config);
*         $accessTokenOauth = $clienteOauth->gerarAccessToken();
*         $config->setAccessToken($accessTokenOauth);
 *      
 */
$config = DBSeller\ApiPixItau\Configuration::getDefaultConfiguration();
$config->setModoProducao(false);
$config->setHost('https://devportal.itau.com.br/sandboxapi/pix_recebimentos_ext_v2/v2');
$config->setUrlOAuth('https://devportal.itau.com.br/api/jwt');
$config->setApiKey('client_id','c82c8177-5f5a-349e-88e2-30a5b2a78a54');
$config->setApiKey('client_secret','f013e480-92ec-4828-9d65-8d9b3100a885');
$clienteOauth = new DBSeller\ApiPixItau\Api\OauthApi(new GuzzleHttp\Client(),$config);
$accessTokenOauth = $clienteOauth->gerarAccessToken();
$config->setAccessToken($accessTokenOauth);

echo "Dados usados na configuração:\n";
echo "Modo Produção: ". $config->isModoProducao() ."\n";
echo "Host Base Api Recebimentos PIX: " . $config->getHost() . "\n";
echo "Url Oauth: " . $config->getUrlOAuth() . "\n";
echo "Client_id:" . $config->getApiKey('client_id') . "\n";
echo "Client_secret:" . $config->getApiKey('client_secret') . "\n";
echo "Access_token:" . $config->getAccessToken() . "\n";
echo "\n\n";
/**
 * Fim da configuração do ambiente SandBox
 */

$apiInstance = new DBSeller\ApiPixItau\Api\CobrancaImediataCobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$txid = "txid_example"; // string | Txid a ser consultado.
$revisao = "revisao_example"; // string | Id de transação do documento, utilizado para a sua identificação no banco central

try {
    $result = $apiInstance->getcobtxid($txid, $revisao);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CobrancaImediataCobApi->getcobtxid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **txid** | **string**| Txid a ser consultado. |
 **revisao** | **string**| Id de transação do documento, utilizado para a sua identificação no banco central | [optional]

### Return type

[**\DBSeller\ApiPixItau\Model\Cobranca**](../Model/Cobranca.md)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getcobtxidqrcode**
> \DBSeller\ApiPixItau\Model\Qrcode getcobtxidqrcode($txid, $x_correlation_id)



Operação responsável por recuperar os dados do documento

### Example
```php
<?php
require_once('/path/para/pixrecebimentos-itau/vendor/autoload.php')

/**
 * ##################################################################
 * Configurando para uso em ambiente desenvolvimento (SandBox Itaú)
 * ##################################################################
 * 
 * 
 * (OBS): Para modo producao = TRUE
 *        Em modo produção é necessário o uso de certificado digital , chave privada.
 *        Também é preciso alterar o Host Base da API, assim como a Url Oauth2.
 *        Ex:
 *        $config->setModoProducao(true);
*         $config->setHost('https:/secure.api.itau/pix_recebimentos/v2');
*         $config->setUrlOAuth('https://sts.itau.com.br/api/jwt');
*         $config->setApiKey('client_id','XXXXXXXXXXX');
*         $config->setApiKey('client_secret','YYYYYYYYYYYY');
*         $config->setPathCertificado('c:\\caminho\\certificado\\itau\\certificado.pem');
*         $config->setPathPrivateKey('c:\\caminho\\private\\key\\itau\\private_key.pem');
*         $clienteOauth = new DBSeller\ApiPixItau\Api\OauthApi(new GuzzleHttp\Client(),$config);
*         $accessTokenOauth = $clienteOauth->gerarAccessToken();
*         $config->setAccessToken($accessTokenOauth);
 *      
 */
$config = DBSeller\ApiPixItau\Configuration::getDefaultConfiguration();
$config->setModoProducao(false);
$config->setHost('https://devportal.itau.com.br/sandboxapi/pix_recebimentos_ext_v2/v2');
$config->setUrlOAuth('https://devportal.itau.com.br/api/jwt');
$config->setApiKey('client_id','c82c8177-5f5a-349e-88e2-30a5b2a78a54');
$config->setApiKey('client_secret','f013e480-92ec-4828-9d65-8d9b3100a885');
$clienteOauth = new DBSeller\ApiPixItau\Api\OauthApi(new GuzzleHttp\Client(),$config);
$accessTokenOauth = $clienteOauth->gerarAccessToken();
$config->setAccessToken($accessTokenOauth);

echo "Dados usados na configuração:\n";
echo "Modo Produção: ". $config->isModoProducao() ."\n";
echo "Host Base Api Recebimentos PIX: " . $config->getHost() . "\n";
echo "Url Oauth: " . $config->getUrlOAuth() . "\n";
echo "Client_id:" . $config->getApiKey('client_id') . "\n";
echo "Client_secret:" . $config->getApiKey('client_secret') . "\n";
echo "Access_token:" . $config->getAccessToken() . "\n";
echo "\n\n";
/**
 * Fim da configuração do ambiente SandBox
 */
$apiInstance = new DBSeller\ApiPixItau\Api\CobrancaImediataCobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$txid = "txid_example"; // string | Txid a ser consultado.
$x_correlation_id = "x_correlation_id_example"; // string | Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail

try {
    $result = $apiInstance->getcobtxidqrcode($txid, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CobrancaImediataCobApi->getcobtxidqrcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **txid** | **string**| Txid a ser consultado. |
 **x_correlation_id** | **string**| Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail | [optional]

### Return type

[**\DBSeller\ApiPixItau\Model\Qrcode**](../Model/Qrcode.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchcobtxid**
> \DBSeller\ApiPixItau\Model\CobrancaPatchResponse patchcobtxid($txid, $body)



Operação responsável por revisar uma cobranca

### Example
```php
<?php
require_once('/path/para/pixrecebimentos-itau/vendor/autoload.php')

/**
 * ##################################################################
 * Configurando para uso em ambiente desenvolvimento (SandBox Itaú)
 * ##################################################################
 * 
 * 
 * (OBS): Para modo producao = TRUE
 *        Em modo produção é necessário o uso de certificado digital , chave privada.
 *        Também é preciso alterar o Host Base da API, assim como a Url Oauth2.
 *        Ex:
 *        $config->setModoProducao(true);
*         $config->setHost('https:/secure.api.itau/pix_recebimentos/v2');
*         $config->setUrlOAuth('https://sts.itau.com.br/api/jwt');
*         $config->setApiKey('client_id','XXXXXXXXXXX');
*         $config->setApiKey('client_secret','YYYYYYYYYYYY');
*         $config->setPathCertificado('c:\\caminho\\certificado\\itau\\certificado.pem');
*         $config->setPathPrivateKey('c:\\caminho\\private\\key\\itau\\private_key.pem');
*         $clienteOauth = new DBSeller\ApiPixItau\Api\OauthApi(new GuzzleHttp\Client(),$config);
*         $accessTokenOauth = $clienteOauth->gerarAccessToken();
*         $config->setAccessToken($accessTokenOauth);
 *      
 */
$config = DBSeller\ApiPixItau\Configuration::getDefaultConfiguration();
$config->setModoProducao(false);
$config->setHost('https://devportal.itau.com.br/sandboxapi/pix_recebimentos_ext_v2/v2');
$config->setUrlOAuth('https://devportal.itau.com.br/api/jwt');
$config->setApiKey('client_id','c82c8177-5f5a-349e-88e2-30a5b2a78a54');
$config->setApiKey('client_secret','f013e480-92ec-4828-9d65-8d9b3100a885');
$clienteOauth = new DBSeller\ApiPixItau\Api\OauthApi(new GuzzleHttp\Client(),$config);
$accessTokenOauth = $clienteOauth->gerarAccessToken();
$config->setAccessToken($accessTokenOauth);

echo "Dados usados na configuração:\n";
echo "Modo Produção: ". $config->isModoProducao() ."\n";
echo "Host Base Api Recebimentos PIX: " . $config->getHost() . "\n";
echo "Url Oauth: " . $config->getUrlOAuth() . "\n";
echo "Client_id:" . $config->getApiKey('client_id') . "\n";
echo "Client_secret:" . $config->getApiKey('client_secret') . "\n";
echo "Access_token:" . $config->getAccessToken() . "\n";
echo "\n\n";
/**
 * Fim da configuração do ambiente SandBox
 */

$apiInstance = new DBSeller\ApiPixItau\Api\CobrancaImediataCobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$txid = "txid_example"; // string | Txid a ser consultado.
$body = new \DBSeller\ApiPixItau\Model\CobrancaPatchRequest(); // \DBSeller\ApiPixItau\Model\CobrancaPatchRequest | 

try {
    $result = $apiInstance->patchcobtxid($txid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CobrancaImediataCobApi->patchcobtxid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **txid** | **string**| Txid a ser consultado. |
 **body** | [**\DBSeller\ApiPixItau\Model\CobrancaPatchRequest**](../Model/CobrancaPatchRequest.md)|  | [optional]

### Return type

[**\DBSeller\ApiPixItau\Model\CobrancaPatchResponse**](../Model/CobrancaPatchResponse.md)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postcob**
> postcob($body, $x_correlation_id)



Endpoint para criar uma cobrança imediata, neste caso, o txid deve ser definido pelo PSP.

### Example
```php
<?php
require_once('/path/para/pixrecebimentos-itau/vendor/autoload.php')

/**
 * ##################################################################
 * Configurando para uso em ambiente desenvolvimento (SandBox Itaú)
 * ##################################################################
 * 
 * 
 * (OBS): Para modo producao = TRUE
 *        Em modo produção é necessário o uso de certificado digital , chave privada.
 *        Também é preciso alterar o Host Base da API, assim como a Url Oauth2.
 *        Ex:
 *        $config->setModoProducao(true);
*         $config->setHost('https:/secure.api.itau/pix_recebimentos/v2');
*         $config->setUrlOAuth('https://sts.itau.com.br/api/jwt');
*         $config->setApiKey('client_id','XXXXXXXXXXX');
*         $config->setApiKey('client_secret','YYYYYYYYYYYY');
*         $config->setPathCertificado('c:\\caminho\\certificado\\itau\\certificado.pem');
*         $config->setPathPrivateKey('c:\\caminho\\private\\key\\itau\\private_key.pem');
*         $clienteOauth = new DBSeller\ApiPixItau\Api\OauthApi(new GuzzleHttp\Client(),$config);
*         $accessTokenOauth = $clienteOauth->gerarAccessToken();
*         $config->setAccessToken($accessTokenOauth);
 *      
 */
$config = DBSeller\ApiPixItau\Configuration::getDefaultConfiguration();
$config->setModoProducao(false);
$config->setHost('https://devportal.itau.com.br/sandboxapi/pix_recebimentos_ext_v2/v2');
$config->setUrlOAuth('https://devportal.itau.com.br/api/jwt');
$config->setApiKey('client_id','c82c8177-5f5a-349e-88e2-30a5b2a78a54');
$config->setApiKey('client_secret','f013e480-92ec-4828-9d65-8d9b3100a885');
$clienteOauth = new DBSeller\ApiPixItau\Api\OauthApi(new GuzzleHttp\Client(),$config);
$accessTokenOauth = $clienteOauth->gerarAccessToken();
$config->setAccessToken($accessTokenOauth);

echo "Dados usados na configuração:\n";
echo "Modo Produção: ". $config->isModoProducao() ."\n";
echo "Host Base Api Recebimentos PIX: " . $config->getHost() . "\n";
echo "Url Oauth: " . $config->getUrlOAuth() . "\n";
echo "Client_id:" . $config->getApiKey('client_id') . "\n";
echo "Client_secret:" . $config->getApiKey('client_secret') . "\n";
echo "Access_token:" . $config->getAccessToken() . "\n";
echo "\n\n";
/**
 * Fim da configuração do ambiente SandBox
 */

$apiInstance = new DBSeller\ApiPixItau\Api\CobrancaImediataCobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DBSeller\ApiPixItau\Model\CobrancaImediataPostRequest(); // \DBSeller\ApiPixItau\Model\CobrancaImediataPostRequest | 
$x_correlation_id = "x_correlation_id_example"; // string | Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail

try {
    $apiInstance->postcob($body, $x_correlation_id);
} catch (Exception $e) {
    echo 'Exception when calling CobrancaImediataCobApi->postcob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DBSeller\ApiPixItau\Model\CobrancaImediataPostRequest**](../Model/CobrancaImediataPostRequest.md)|  | [optional]
 **x_correlation_id** | **string**| Identificador de correlação que serve como um agrupar dentro da estrutura de audit trail | [optional]

### Return type

void (empty response body)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putcobtxid**
> putcobtxid($txid, $body)



Endpoint para criar uma cobrança imediata.

### Example
```php
<?php
require_once('/path/para/pixrecebimentos-itau/vendor/autoload.php')

/**
 * ##################################################################
 * Configurando para uso em ambiente desenvolvimento (SandBox Itaú)
 * ##################################################################
 * 
 * 
 * (OBS): Para modo producao = TRUE
 *        Em modo produção é necessário o uso de certificado digital , chave privada.
 *        Também é preciso alterar o Host Base da API, assim como a Url Oauth2.
 *        Ex:
 *        $config->setModoProducao(true);
*         $config->setHost('https:/secure.api.itau/pix_recebimentos/v2');
*         $config->setUrlOAuth('https://sts.itau.com.br/api/jwt');
*         $config->setApiKey('client_id','XXXXXXXXXXX');
*         $config->setApiKey('client_secret','YYYYYYYYYYYY');
*         $config->setPathCertificado('c:\\caminho\\certificado\\itau\\certificado.pem');
*         $config->setPathPrivateKey('c:\\caminho\\private\\key\\itau\\private_key.pem');
*         $clienteOauth = new DBSeller\ApiPixItau\Api\OauthApi(new GuzzleHttp\Client(),$config);
*         $accessTokenOauth = $clienteOauth->gerarAccessToken();
*         $config->setAccessToken($accessTokenOauth);
 *      
 */
$config = DBSeller\ApiPixItau\Configuration::getDefaultConfiguration();
$config->setModoProducao(false);
$config->setHost('https://devportal.itau.com.br/sandboxapi/pix_recebimentos_ext_v2/v2');
$config->setUrlOAuth('https://devportal.itau.com.br/api/jwt');
$config->setApiKey('client_id','c82c8177-5f5a-349e-88e2-30a5b2a78a54');
$config->setApiKey('client_secret','f013e480-92ec-4828-9d65-8d9b3100a885');
$clienteOauth = new DBSeller\ApiPixItau\Api\OauthApi(new GuzzleHttp\Client(),$config);
$accessTokenOauth = $clienteOauth->gerarAccessToken();
$config->setAccessToken($accessTokenOauth);

echo "Dados usados na configuração:\n";
echo "Modo Produção: ". $config->isModoProducao() ."\n";
echo "Host Base Api Recebimentos PIX: " . $config->getHost() . "\n";
echo "Url Oauth: " . $config->getUrlOAuth() . "\n";
echo "Client_id:" . $config->getApiKey('client_id') . "\n";
echo "Client_secret:" . $config->getApiKey('client_secret') . "\n";
echo "Access_token:" . $config->getAccessToken() . "\n";
echo "\n\n";
/**
 * Fim da configuração do ambiente SandBox
 */

$apiInstance = new DBSeller\ApiPixItau\Api\CobrancaImediataCobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$txid = "txid_example"; // string | Txid a ser consultado.
$body = new \DBSeller\ApiPixItau\Model\CobrancaPutRequest(); // \DBSeller\ApiPixItau\Model\CobrancaPutRequest | 

try {
    $apiInstance->putcobtxid($txid, $body);
} catch (Exception $e) {
    echo 'Exception when calling CobrancaImediataCobApi->putcobtxid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **txid** | **string**| Txid a ser consultado. |
 **body** | [**\DBSeller\ApiPixItau\Model\CobrancaPutRequest**](../Model/CobrancaPutRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[APIGatewaySTSAuthorizer](../../README.md#APIGatewaySTSAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

