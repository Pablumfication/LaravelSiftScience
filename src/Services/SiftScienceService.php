<?php

namespace Pablumfication\LaravelSiftScience\Services;

class SiftScienceService
{

    /**
     * Get auth parameters from config, fail if any are missing.
     * Instantiate API client and set auth token.
     *
     * @throws Exception
     */
    public function __construct()
    {
        $this->api_key = config('laravel-sift-science.api_key');
        $this->account_id = config('laravel-sift-science.account_id');
        $this->timeout = config('laravel-sift-science.timeout');
        $this->version = config('laravel-sift-science.version');

        if (!$this->api_key || !$this->account_id) {
            throw new \InvalidArgumentException(
                'Please set SIFT_SCIENCE_API_KEY and SIFT_SCIENCE_ACCOUNT_ID environment variables.'
            );
        }

        $this->siftclient = new \SiftClient([
            'api_key' => $this->api_key,
            'account_id' => $this->account_id,
        ]);
    }

    /**
     * Pass any method calls onto $this->siftclient
     *
     * @return mixed
     */
    public function __call($method, $args)
    {
        if (is_callable([$this->siftclient, $method])) {
            return call_user_func_array([$this->siftclient, $method], $args);
        } else {
            throw new \BadMethodCallException("Method $method does not exist");
        }
    }
}
