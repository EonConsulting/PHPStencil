<?php
/**
 * Created by PhpStorm.
 * User: vamoose
 * Date: 2016/11/28
 * Time: 9:31 AM
 */

namespace EONConsulting\PHPStencil\src\Factories\WebService;


use EONConsulting\PHPStencil\src\Factories\AdapterFactory;
use EONConsulting\PHPStencil\src\Factories\Factory;

/**
 * Class WebServiceFactory
 * @package EONConsulting\PHPStencil\src\Factories\WebService
 */
class WebServiceFactory implements Factory {

    protected $adapter;

    /**
     * WebServiceFactory constructor.
     * @param AdapterFactory $adapter
     */
    public function __construct(AdapterFactory $adapter) {
        $this->adapter = $adapter;
    }

    /**
     * Return a new WebService object with the correct adapter
     * @param $config
     * @return WebService
     */
    public function make($config) {
        return new WebService($this->adapter->make($config));
    }

}