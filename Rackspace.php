<?php 

namespace sammaye\rackspace;

use yii\base\Component;
use OpenCloud\Rackspace as Rs;

class Rackspace extends Component
{
    public $username;
    public $apiKey;
    
    public $identityEndpoint = 'US_IDENTITY_ENDPOINT';
    
    private $_client;
    
    public function getClient()
    {
        if($this->_client === null){
            $this->_client = new Rs(constant('OpenCloud\Rackspace::' . $this->identityEndpoint), array(
                'username' => $this->username,
                'apiKey' => $this->apiKey
            ));
        }
        
        return $this->_client;
    }
    
    public function __get($k)
    {
        if(property_exists($this->getClient(), $k)){
            return $this->getClient()->$k;    
        }
        return $this->$k;
    }
    
    public function __call($name, $params)
    {
        if(!method_exists($this->getClient(), $name)){
			return parent::__call($name, $params);
		}
		return call_user_func_array(array($this->getClient(), $name), $params);
    }
}