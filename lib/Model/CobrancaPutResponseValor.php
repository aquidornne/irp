<?php
/**
 * CobrancaPutResponseValor
 *
 * PHP version 5
 *
 * @category Class
 * @package  DBSeller\ApiPixItau
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Recebimentos Pix
 *
 * Recebimentos Pix
 *
 * OpenAPI spec version: 2.41.15
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.35
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DBSeller\ApiPixItau\Model;

use \ArrayAccess;
use \DBSeller\ApiPixItau\ObjectSerializer;

/**
 * CobrancaPutResponseValor Class Doc Comment
 *
 * @category Class
 * @description Estrutura com valores monetários referentes a cobrança do documento.
 * @package  DBSeller\ApiPixItau
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CobrancaPutResponseValor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'cobrancaPutResponse_valor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'original' => 'string',
'modalidade_alteracao' => 'int',
'retirada' => '\DBSeller\ApiPixItau\Model\Retirada'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'original' => null,
'modalidade_alteracao' => null,
'retirada' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'original' => 'original',
'modalidade_alteracao' => 'modalidadeAlteracao',
'retirada' => 'retirada'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'original' => 'setOriginal',
'modalidade_alteracao' => 'setModalidadeAlteracao',
'retirada' => 'setRetirada'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'original' => 'getOriginal',
'modalidade_alteracao' => 'getModalidadeAlteracao',
'retirada' => 'getRetirada'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['original'] = isset($data['original']) ? $data['original'] : null;
        $this->container['modalidade_alteracao'] = isset($data['modalidade_alteracao']) ? $data['modalidade_alteracao'] : null;
        $this->container['retirada'] = isset($data['retirada']) ? $data['retirada'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['original'] === null) {
            $invalidProperties[] = "'original' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets original
     *
     * @return string
     */
    public function getOriginal()
    {
        return $this->container['original'];
    }

    /**
     * Sets original
     *
     * @param string $original Valor nominal/original da cobrança.
     *
     * @return $this
     */
    public function setOriginal($original)
    {
        $this->container['original'] = $original;

        return $this;
    }

    /**
     * Gets modalidade_alteracao
     *
     * @return int
     */
    public function getModalidadeAlteracao()
    {
        return $this->container['modalidade_alteracao'];
    }

    /**
     * Sets modalidade_alteracao
     *
     * @param int $modalidade_alteracao Modalidade de Alteração. Trata-se de um campo que determina se o valor final do documento pode ser alterado pelo pagador.
     *
     * @return $this
     */
    public function setModalidadeAlteracao($modalidade_alteracao)
    {
        $this->container['modalidade_alteracao'] = $modalidade_alteracao;

        return $this;
    }

    /**
     * Gets retirada
     *
     * @return \DBSeller\ApiPixItau\Model\Retirada
     */
    public function getRetirada()
    {
        return $this->container['retirada'];
    }

    /**
     * Sets retirada
     *
     * @param \DBSeller\ApiPixItau\Model\Retirada $retirada retirada
     *
     * @return $this
     */
    public function setRetirada($retirada)
    {
        $this->container['retirada'] = $retirada;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
