<?php

namespace ContainerL64nyQw;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Twig/Extension/SubrequestExtension.php';

class SubrequestExtension_ac4dffd extends \Pimcore\Twig\Extension\SubrequestExtension implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Twig\Extension\SubrequestExtension|null wrapped object, if the proxy is initialized
     */
    private $valueHolder85591 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer09bfc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties37535 = [
        
    ];

    public function getFunctions() : array
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'getFunctions', array(), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return $this->valueHolder85591->getFunctions();
    }

    public function getTokenParsers()
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'getTokenParsers', array(), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return $this->valueHolder85591->getTokenParsers();
    }

    public function getNodeVisitors()
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'getNodeVisitors', array(), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return $this->valueHolder85591->getNodeVisitors();
    }

    public function getFilters()
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'getFilters', array(), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return $this->valueHolder85591->getFilters();
    }

    public function getTests()
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'getTests', array(), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return $this->valueHolder85591->getTests();
    }

    public function getOperators()
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'getOperators', array(), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return $this->valueHolder85591->getOperators();
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

        unset($instance->incHelper);

        $instance->initializer09bfc = $initializer;

        return $instance;
    }

    public function __construct(\Pimcore\Twig\Extension\Templating\Inc $incHelper)
    {
        static $reflection;

        if (! $this->valueHolder85591) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');
            $this->valueHolder85591 = $reflection->newInstanceWithoutConstructor();
        unset($this->incHelper);

        }

        $this->valueHolder85591->__construct($incHelper);
    }

    public function & __get($name)
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, '__get', ['name' => $name], $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        if (isset(self::$publicProperties37535[$name])) {
            return $this->valueHolder85591->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85591;

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

        $targetObject = $this->valueHolder85591;
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
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85591;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder85591;
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
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, '__isset', array('name' => $name), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85591;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder85591;
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
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, '__unset', array('name' => $name), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85591;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder85591;
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
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, '__clone', array(), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        $this->valueHolder85591 = clone $this->valueHolder85591;
    }

    public function __sleep()
    {
        $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, '__sleep', array(), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;

        return array('valueHolder85591');
    }

    public function __wakeup()
    {
        unset($this->incHelper);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer09bfc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer09bfc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer09bfc && ($this->initializer09bfc->__invoke($valueHolder85591, $this, 'initializeProxy', array(), $this->initializer09bfc) || 1) && $this->valueHolder85591 = $valueHolder85591;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder85591;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder85591;
    }
}

if (!\class_exists('SubrequestExtension_ac4dffd', false)) {
    \class_alias(__NAMESPACE__.'\\SubrequestExtension_ac4dffd', 'SubrequestExtension_ac4dffd', false);
}
