# yii2-rackspace
A Yii2 plugin for some Rackspace lovin' so simple even your dog will be able to use it.

## Defining the Extension

Here is the full definition, from an example:

    'rackspace' => [
    	'class' => 'sammaye\rackspace\Rackspace',
    	'identityEndpoint' => 'US_IDENTITY_ENDPOINT',
    	'username' => 'SomeNotSoAwesomeUser',
    	'apiKey' => 'AwesomeKeyInit'
    ],
    
Everything is quite self explanatory except for `identityEndpoint`. This is a string representation of the constent name.

At the time of writing there are currently two values for the `identityEndpoint` option:

- `US_IDENTITY_ENDPOINT`
- `UK_IDENTITY_ENDPOINT`

These directly relate to the SDK's own.

Now with this definition you can just use the API like the component doesn't even exist, for example:

    $cdn = Yii::$app->rackspace->cdnService();
    var_dump($cdn->listServices());
    
## Links

- [Issue Tracker](https://github.com/Sammaye/yii2-rackspace/issues)
- [Github](https://github.com/Sammaye/yii2-rackspace)
- [Packagist](https://packagist.org/packages/sammaye/yii2-rackspace)
