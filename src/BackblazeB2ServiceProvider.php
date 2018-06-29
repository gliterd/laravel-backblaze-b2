<?php

namespace Gliterd\BackblazeB2;

use BackblazeB2\Client as BackblazeClient;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use Mhetreramesh\Flysystem\BackblazeAdapter;

class BackblazeB2ServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Storage::extend('b2', function ($app, $config) {
            if(!(
                isset($config['accountId']) ||
                isset($config['applicationKey']) ||
                isset($config['bucketName']))) {
                throw new BackblazeException('Please set all configuration keys. (accountId, applicationKey, bucketName)');
            }
            $client = new BackblazeClient($config['accountId'], $config['applicationKey']);
            $adapter = new BackblazeAdapter($client, $config['bucketName']);
            return new Filesystem($adapter);
        });
    }
    public function register()
    {
    }
}
