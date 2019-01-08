<?php

namespace App\Factories;

use App\Factories\Contracts\FactoryInterface;

class ControllerFactory implements FactoryInterface
{
    /**
     * @var array $controllers
     */
    private $controllers = [];

    /**
     * @var ControllerFactory Object
     */
    private static $instance;

    /**
     * {@inheritdoc}
     */
    public function create(string $name, $argument = null)
    {
        $className = ucfirst($name) . 'Controller';

        if ($this->isExist($className)) {
            return $this->controllers[$className];
        }

        $controller = 'App\\Controllers\\'.$className;

        if (class_exists($controller)) {
            $classObject = new $controller($argument);
            $this->addInstance($className, $classObject);

            return $classObject;
        }
    }

    /**
     * @param string $className
     * @return bool
     */
    private function isExist(string $className): bool
    {
        return isset($this->controllers[$className]);
    }

    /**
     * @param string $className
     * @param $classObject
     * @return mixed
     */
    private function addInstance(string $className, $classObject)
    {
        return $this->controllers[$className] = $classObject;
    }

    /**
     * @return ControllerFactory
     */
    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}