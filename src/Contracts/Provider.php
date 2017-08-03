<?php namespace App\Containers\Models\Contracts;

/**
 * Interface Provider
 *
 * @package App\Containers\Models\Contracts
 */
interface Provider
{
    /**
     * @param null $params
     *
     * @return mixed
     */
    public function resolve($params = null);
}