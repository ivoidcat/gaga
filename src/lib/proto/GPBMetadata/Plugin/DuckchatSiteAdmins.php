<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plugin/duckchat_site_admins.proto

namespace GPBMetadata\Plugin;

class DuckchatSiteAdmins
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Core\User::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acc010a21706c7567696e2f6475636b636861745f736974655f61646d69" .
            "6e732e70726f746f1206706c7567696e221b0a194475636b436861745369" .
            "746541646d696e7352657175657374224d0a1a4475636b43686174536974" .
            "6541646d696e73526573706f6e7365122f0a0e7075626c696350726f6669" .
            "6c657318012003280b32172e636f72652e5075626c69635573657250726f" .
            "66696c65422b0a15636f6d2e7a616c792e70726f746f2e706c7567696eca" .
            "02115a616c795c50726f746f5c506c7567696e620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

