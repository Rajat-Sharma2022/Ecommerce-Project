<?php

namespace Symfony\Config\Pimcore\Staticroutes;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DefinitionsConfig 
{
    private $name;
    private $pattern;
    private $reverse;
    private $controller;
    private $variables;
    private $defaults;
    private $siteId;
    private $methods;
    private $priority;
    private $creationDate;
    private $modificationDate;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function name($value): self
    {
        $this->_usedProperties['name'] = true;
        $this->name = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pattern($value): self
    {
        $this->_usedProperties['pattern'] = true;
        $this->pattern = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function reverse($value): self
    {
        $this->_usedProperties['reverse'] = true;
        $this->reverse = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function controller($value): self
    {
        $this->_usedProperties['controller'] = true;
        $this->controller = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function variables($value): self
    {
        $this->_usedProperties['variables'] = true;
        $this->variables = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaults($value): self
    {
        $this->_usedProperties['defaults'] = true;
        $this->defaults = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<int|ParamConfigurator> $value
     * @return $this
     */
    public function siteId($value): self
    {
        $this->_usedProperties['siteId'] = true;
        $this->siteId = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function methods($value): self
    {
        $this->_usedProperties['methods'] = true;
        $this->methods = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function priority($value): self
    {
        $this->_usedProperties['priority'] = true;
        $this->priority = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function creationDate($value): self
    {
        $this->_usedProperties['creationDate'] = true;
        $this->creationDate = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function modificationDate($value): self
    {
        $this->_usedProperties['modificationDate'] = true;
        $this->modificationDate = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('name', $value)) {
            $this->_usedProperties['name'] = true;
            $this->name = $value['name'];
            unset($value['name']);
        }

        if (array_key_exists('pattern', $value)) {
            $this->_usedProperties['pattern'] = true;
            $this->pattern = $value['pattern'];
            unset($value['pattern']);
        }

        if (array_key_exists('reverse', $value)) {
            $this->_usedProperties['reverse'] = true;
            $this->reverse = $value['reverse'];
            unset($value['reverse']);
        }

        if (array_key_exists('controller', $value)) {
            $this->_usedProperties['controller'] = true;
            $this->controller = $value['controller'];
            unset($value['controller']);
        }

        if (array_key_exists('variables', $value)) {
            $this->_usedProperties['variables'] = true;
            $this->variables = $value['variables'];
            unset($value['variables']);
        }

        if (array_key_exists('defaults', $value)) {
            $this->_usedProperties['defaults'] = true;
            $this->defaults = $value['defaults'];
            unset($value['defaults']);
        }

        if (array_key_exists('siteId', $value)) {
            $this->_usedProperties['siteId'] = true;
            $this->siteId = $value['siteId'];
            unset($value['siteId']);
        }

        if (array_key_exists('methods', $value)) {
            $this->_usedProperties['methods'] = true;
            $this->methods = $value['methods'];
            unset($value['methods']);
        }

        if (array_key_exists('priority', $value)) {
            $this->_usedProperties['priority'] = true;
            $this->priority = $value['priority'];
            unset($value['priority']);
        }

        if (array_key_exists('creationDate', $value)) {
            $this->_usedProperties['creationDate'] = true;
            $this->creationDate = $value['creationDate'];
            unset($value['creationDate']);
        }

        if (array_key_exists('modificationDate', $value)) {
            $this->_usedProperties['modificationDate'] = true;
            $this->modificationDate = $value['modificationDate'];
            unset($value['modificationDate']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['name'])) {
            $output['name'] = $this->name;
        }
        if (isset($this->_usedProperties['pattern'])) {
            $output['pattern'] = $this->pattern;
        }
        if (isset($this->_usedProperties['reverse'])) {
            $output['reverse'] = $this->reverse;
        }
        if (isset($this->_usedProperties['controller'])) {
            $output['controller'] = $this->controller;
        }
        if (isset($this->_usedProperties['variables'])) {
            $output['variables'] = $this->variables;
        }
        if (isset($this->_usedProperties['defaults'])) {
            $output['defaults'] = $this->defaults;
        }
        if (isset($this->_usedProperties['siteId'])) {
            $output['siteId'] = $this->siteId;
        }
        if (isset($this->_usedProperties['methods'])) {
            $output['methods'] = $this->methods;
        }
        if (isset($this->_usedProperties['priority'])) {
            $output['priority'] = $this->priority;
        }
        if (isset($this->_usedProperties['creationDate'])) {
            $output['creationDate'] = $this->creationDate;
        }
        if (isset($this->_usedProperties['modificationDate'])) {
            $output['modificationDate'] = $this->modificationDate;
        }

        return $output;
    }

}
