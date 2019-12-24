<?php

namespace Bunny\Storage;

use BunnyPHP\Storage;
use Qiniu\Auth;
use Qiniu\Config;
use Qiniu\Storage\BucketManager;
use Qiniu\Storage\UploadManager;

class QiniuStorage implements Storage
{
    protected $client;
    protected $auth;
    protected $accessKey;
    protected $secretKey;
    protected $bucket;
    protected $url;

    public function __construct($config)
    {
        $this->accessKey = $config['key'];
        $this->secretKey = $config['secret'];
        $this->bucket = $config['bucket'];
        $this->url = $config['url'];
        $this->auth = new Auth($this->accessKey, $this->secretKey);
    }

    public function read($filename)
    {
        $url = $this->url . $filename;
        $params = ['http' => ['method' => 'GET', 'header' => ['User-Agent: BunnyPHP']]];
        $ctx = stream_context_create($params);
        $fp = @fopen($url, 'rb', false, $ctx);
        if (!$fp) return false;
        $response = @stream_get_contents($fp);
        if ($response === false) return false;
        return $response;
    }

    public function write($filename, $content)
    {
        $token = $this->auth->uploadToken($this->bucket);
        $uploadMgr = new UploadManager();
        list($ret, $err) = $uploadMgr->put($token, $filename, $content);
        return ($err !== null) ? false : $this->url . $filename;
    }

    public function upload($filename, $path)
    {
        $token = $this->auth->uploadToken($this->bucket);
        $uploadMgr = new UploadManager();
        list($ret, $err) = $uploadMgr->putFile($token, $filename, $path);
        return ($err !== null) ? false : $this->url . $filename;
    }

    public function remove($filename)
    {
        $config = new Config();
        $bucketMgr = new BucketManager($this->auth, $config);
        $bucketMgr->delete($this->bucket, $filename);
        return true;
    }
}