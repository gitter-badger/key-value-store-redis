<?php namespace AdammBalogh\KeyValueStore\Adapter\RedisAdapter;

trait ClientTrait
{
    /**
     * @return \Predis\Client
     */
    public function getClient()
    {
        return $this->client;
    }
}
