<?php

namespace Container8Xx9eCx;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Twig/Extension/Templating/Navigation.php';

class Navigation_62d2b4b extends \Pimcore\Twig\Extension\Templating\Navigation implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Twig\Extension\Templating\Navigation|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbf6f5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer92185 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties988c6 = [
        
    ];

    public function build(array $params) : \Pimcore\Navigation\Container
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'build', array('params' => $params), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->build($params);
    }

    public function getRenderer(string $alias) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'getRenderer', array('alias' => $alias), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->getRenderer($alias);
    }

    public function render(\Pimcore\Navigation\Container $container, string $rendererName = 'menu', string $renderMethod = 'render', ... $rendererArguments)
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'render', array('container' => $container, 'rendererName' => $rendererName, 'renderMethod' => $renderMethod, 'rendererArguments' => $rendererArguments), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->render($container, $rendererName, $renderMethod, ...$rendererArguments);
    }

    public function __call($method, array $arguments = []) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->__call($method, $arguments);
    }

    public function setCharset(string $charset)
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'setCharset', array('charset' => $charset), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->setCharset($charset);
    }

    public function getCharset()
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'getCharset', array(), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return $this->valueHolderbf6f5->getCharset();
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

        $instance->initializer92185 = $initializer;

        return $instance;
    }

    public function __construct(\Pimcore\Navigation\Builder $builder, \Psr\Container\ContainerInterface $rendererLocator)
    {
        static $reflection;

        if (! $this->valueHolderbf6f5) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');
            $this->valueHolderbf6f5 = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($this);

        }

        $this->valueHolderbf6f5->__construct($builder, $rendererLocator);
    }

    public function & __get($name)
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, '__get', ['name' => $name], $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        if (isset(self::$publicProperties988c6[$name])) {
            return $this->valueHolderbf6f5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf6f5;

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

        $targetObject = $this->valueHolderbf6f5;
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
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf6f5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbf6f5;
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
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, '__isset', array('name' => $name), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf6f5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbf6f5;
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
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, '__unset', array('name' => $name), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf6f5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbf6f5;
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
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, '__clone', array(), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        $this->valueHolderbf6f5 = clone $this->valueHolderbf6f5;
    }

    public function __sleep()
    {
        $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, '__sleep', array(), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;

        return array('valueHolderbf6f5');
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
        $this->initializer92185 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer92185;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer92185 && ($this->initializer92185->__invoke($valueHolderbf6f5, $this, 'initializeProxy', array(), $this->initializer92185) || 1) && $this->valueHolderbf6f5 = $valueHolderbf6f5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbf6f5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbf6f5;
    }
}

if (!\class_exists('Navigation_62d2b4b', false)) {
    \class_alias(__NAMESPACE__.'\\Navigation_62d2b4b', 'Navigation_62d2b4b', false);
}
