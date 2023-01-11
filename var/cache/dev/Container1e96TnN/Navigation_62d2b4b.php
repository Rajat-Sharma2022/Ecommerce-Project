<?php

namespace Container1e96TnN;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Twig/Extension/Templating/Navigation.php';

class Navigation_62d2b4b extends \Pimcore\Twig\Extension\Templating\Navigation implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Twig\Extension\Templating\Navigation|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd4c4e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer45cba = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties19e4c = [
        
    ];

    public function build(array $params) : \Pimcore\Navigation\Container
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'build', array('params' => $params), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->build($params);
    }

    public function getRenderer(string $alias) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'getRenderer', array('alias' => $alias), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->getRenderer($alias);
    }

    public function render(\Pimcore\Navigation\Container $container, string $rendererName = 'menu', string $renderMethod = 'render', ... $rendererArguments)
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'render', array('container' => $container, 'rendererName' => $rendererName, 'renderMethod' => $renderMethod, 'rendererArguments' => $rendererArguments), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->render($container, $rendererName, $renderMethod, ...$rendererArguments);
    }

    public function __call($method, array $arguments = []) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->__call($method, $arguments);
    }

    public function setCharset(string $charset)
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'setCharset', array('charset' => $charset), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->setCharset($charset);
    }

    public function getCharset()
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'getCharset', array(), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return $this->valueHolderd4c4e->getCharset();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        unset($instance->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $instance, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($instance);

        $instance->initializer45cba = $initializer;

        return $instance;
    }

    public function __construct(\Pimcore\Navigation\Builder $builder, \Psr\Container\ContainerInterface $rendererLocator)
    {
        static $reflection;

        if (! $this->valueHolderd4c4e) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');
            $this->valueHolderd4c4e = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($this);

        }

        $this->valueHolderd4c4e->__construct($builder, $rendererLocator);
    }

    public function & __get($name)
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, '__get', ['name' => $name], $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        if (isset(self::$publicProperties19e4c[$name])) {
            return $this->valueHolderd4c4e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4c4e;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd4c4e;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4c4e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd4c4e;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, '__isset', array('name' => $name), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4c4e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd4c4e;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, '__unset', array('name' => $name), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4c4e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd4c4e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, '__clone', array(), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        $this->valueHolderd4c4e = clone $this->valueHolderd4c4e;
    }

    public function __sleep()
    {
        $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, '__sleep', array(), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;

        return array('valueHolderd4c4e');
    }

    public function __wakeup()
    {
        unset($this->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer45cba = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer45cba;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer45cba && ($this->initializer45cba->__invoke($valueHolderd4c4e, $this, 'initializeProxy', array(), $this->initializer45cba) || 1) && $this->valueHolderd4c4e = $valueHolderd4c4e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd4c4e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd4c4e;
    }
}

if (!\class_exists('Navigation_62d2b4b', false)) {
    \class_alias(__NAMESPACE__.'\\Navigation_62d2b4b', 'Navigation_62d2b4b', false);
}
