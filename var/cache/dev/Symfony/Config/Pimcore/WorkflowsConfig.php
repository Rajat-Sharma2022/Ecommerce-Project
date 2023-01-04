<?php

namespace Symfony\Config\Pimcore;

require_once __DIR__.\DIRECTORY_SEPARATOR.'WorkflowsConfig'.\DIRECTORY_SEPARATOR.'CustomExtensionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'WorkflowsConfig'.\DIRECTORY_SEPARATOR.'AuditTrailConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'WorkflowsConfig'.\DIRECTORY_SEPARATOR.'MarkingStoreConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'WorkflowsConfig'.\DIRECTORY_SEPARATOR.'SupportStrategyConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'WorkflowsConfig'.\DIRECTORY_SEPARATOR.'PlacesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'WorkflowsConfig'.\DIRECTORY_SEPARATOR.'TransitionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'WorkflowsConfig'.\DIRECTORY_SEPARATOR.'GlobalActionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class WorkflowsConfig 
{
    private $placeholders;
    private $customExtensions;
    private $enabled;
    private $priority;
    private $label;
    private $auditTrail;
    private $type;
    private $markingStore;
    private $supports;
    private $supportStrategy;
    private $initialMarkings;
    private $places;
    private $transitions;
    private $globalActions;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function placeholders($value): self
    {
        $this->_usedProperties['placeholders'] = true;
        $this->placeholders = $value;

        return $this;
    }

    public function customExtensions(array $value = []): \Symfony\Config\Pimcore\WorkflowsConfig\CustomExtensionsConfig
    {
        if (null === $this->customExtensions) {
            $this->_usedProperties['customExtensions'] = true;
            $this->customExtensions = new \Symfony\Config\Pimcore\WorkflowsConfig\CustomExtensionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "customExtensions()" has already been initialized. You cannot pass values the second time you call customExtensions().');
        }

        return $this->customExtensions;
    }

    /**
     * Can be used to enable or disable the workflow.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * When multiple custom view or permission settings from different places in different workflows are valid, the workflow with the highest priority will be used.
     * @default 0
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
     * Will be used in the backend interface as nice name for the workflow. If not set the technical workflow name will be used as label too.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function label($value): self
    {
        $this->_usedProperties['label'] = true;
        $this->label = $value;

        return $this;
    }

    /**
     * @return \Symfony\Config\Pimcore\WorkflowsConfig\AuditTrailConfig|$this
     */
    public function auditTrail($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['auditTrail'] = true;
            $this->auditTrail = $value;

            return $this;
        }

        if (!$this->auditTrail instanceof \Symfony\Config\Pimcore\WorkflowsConfig\AuditTrailConfig) {
            $this->_usedProperties['auditTrail'] = true;
            $this->auditTrail = new \Symfony\Config\Pimcore\WorkflowsConfig\AuditTrailConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "auditTrail()" has already been initialized. You cannot pass values the second time you call auditTrail().');
        }

        return $this->auditTrail;
    }

    /**
     * A workflow with type "workflow" can handle multiple places at one time whereas a state_machine provides a finite state_machine (only one place at one time). Take a look at the Symfony docs for more details.
     * @default null
     * @param ParamConfigurator|'workflow'|'state_machine' $value
     * @return $this
     */
    public function type($value): self
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;

        return $this;
    }

    public function markingStore(array $value = []): \Symfony\Config\Pimcore\WorkflowsConfig\MarkingStoreConfig
    {
        if (null === $this->markingStore) {
            $this->_usedProperties['markingStore'] = true;
            $this->markingStore = new \Symfony\Config\Pimcore\WorkflowsConfig\MarkingStoreConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "markingStore()" has already been initialized. You cannot pass values the second time you call markingStore().');
        }

        return $this->markingStore;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function supports($value): self
    {
        $this->_usedProperties['supports'] = true;
        $this->supports = $value;

        return $this;
    }

    public function supportStrategy(array $value = []): \Symfony\Config\Pimcore\WorkflowsConfig\SupportStrategyConfig
    {
        if (null === $this->supportStrategy) {
            $this->_usedProperties['supportStrategy'] = true;
            $this->supportStrategy = new \Symfony\Config\Pimcore\WorkflowsConfig\SupportStrategyConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "supportStrategy()" has already been initialized. You cannot pass values the second time you call supportStrategy().');
        }

        return $this->supportStrategy;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function initialMarkings($value): self
    {
        $this->_usedProperties['initialMarkings'] = true;
        $this->initialMarkings = $value;

        return $this;
    }

    /**
     * @return \Symfony\Config\Pimcore\WorkflowsConfig\PlacesConfig|$this
     */
    public function places($value = [])
    {
        $this->_usedProperties['places'] = true;
        if (!\is_array($value)) {
            $this->places[] = $value;

            return $this;
        }

        return $this->places[] = new \Symfony\Config\Pimcore\WorkflowsConfig\PlacesConfig($value);
    }

    /**
     * @return \Symfony\Config\Pimcore\WorkflowsConfig\TransitionsConfig|$this
     */
    public function transitions($value = [])
    {
        $this->_usedProperties['transitions'] = true;
        if (!\is_array($value)) {
            $this->transitions[] = $value;

            return $this;
        }

        return $this->transitions[] = new \Symfony\Config\Pimcore\WorkflowsConfig\TransitionsConfig($value);
    }

    public function globalActions(array $value = []): \Symfony\Config\Pimcore\WorkflowsConfig\GlobalActionsConfig
    {
        $this->_usedProperties['globalActions'] = true;

        return $this->globalActions[] = new \Symfony\Config\Pimcore\WorkflowsConfig\GlobalActionsConfig($value);
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('placeholders', $value)) {
            $this->_usedProperties['placeholders'] = true;
            $this->placeholders = $value['placeholders'];
            unset($value['placeholders']);
        }

        if (array_key_exists('custom_extensions', $value)) {
            $this->_usedProperties['customExtensions'] = true;
            $this->customExtensions = new \Symfony\Config\Pimcore\WorkflowsConfig\CustomExtensionsConfig($value['custom_extensions']);
            unset($value['custom_extensions']);
        }

        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('priority', $value)) {
            $this->_usedProperties['priority'] = true;
            $this->priority = $value['priority'];
            unset($value['priority']);
        }

        if (array_key_exists('label', $value)) {
            $this->_usedProperties['label'] = true;
            $this->label = $value['label'];
            unset($value['label']);
        }

        if (array_key_exists('audit_trail', $value)) {
            $this->_usedProperties['auditTrail'] = true;
            $this->auditTrail = \is_array($value['audit_trail']) ? new \Symfony\Config\Pimcore\WorkflowsConfig\AuditTrailConfig($value['audit_trail']) : $value['audit_trail'];
            unset($value['audit_trail']);
        }

        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }

        if (array_key_exists('marking_store', $value)) {
            $this->_usedProperties['markingStore'] = true;
            $this->markingStore = new \Symfony\Config\Pimcore\WorkflowsConfig\MarkingStoreConfig($value['marking_store']);
            unset($value['marking_store']);
        }

        if (array_key_exists('supports', $value)) {
            $this->_usedProperties['supports'] = true;
            $this->supports = $value['supports'];
            unset($value['supports']);
        }

        if (array_key_exists('support_strategy', $value)) {
            $this->_usedProperties['supportStrategy'] = true;
            $this->supportStrategy = new \Symfony\Config\Pimcore\WorkflowsConfig\SupportStrategyConfig($value['support_strategy']);
            unset($value['support_strategy']);
        }

        if (array_key_exists('initial_markings', $value)) {
            $this->_usedProperties['initialMarkings'] = true;
            $this->initialMarkings = $value['initial_markings'];
            unset($value['initial_markings']);
        }

        if (array_key_exists('places', $value)) {
            $this->_usedProperties['places'] = true;
            $this->places = array_map(function ($v) { return \is_array($v) ? new \Symfony\Config\Pimcore\WorkflowsConfig\PlacesConfig($v) : $v; }, $value['places']);
            unset($value['places']);
        }

        if (array_key_exists('transitions', $value)) {
            $this->_usedProperties['transitions'] = true;
            $this->transitions = array_map(function ($v) { return \is_array($v) ? new \Symfony\Config\Pimcore\WorkflowsConfig\TransitionsConfig($v) : $v; }, $value['transitions']);
            unset($value['transitions']);
        }

        if (array_key_exists('globalActions', $value)) {
            $this->_usedProperties['globalActions'] = true;
            $this->globalActions = array_map(function ($v) { return new \Symfony\Config\Pimcore\WorkflowsConfig\GlobalActionsConfig($v); }, $value['globalActions']);
            unset($value['globalActions']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['placeholders'])) {
            $output['placeholders'] = $this->placeholders;
        }
        if (isset($this->_usedProperties['customExtensions'])) {
            $output['custom_extensions'] = $this->customExtensions->toArray();
        }
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['priority'])) {
            $output['priority'] = $this->priority;
        }
        if (isset($this->_usedProperties['label'])) {
            $output['label'] = $this->label;
        }
        if (isset($this->_usedProperties['auditTrail'])) {
            $output['audit_trail'] = $this->auditTrail instanceof \Symfony\Config\Pimcore\WorkflowsConfig\AuditTrailConfig ? $this->auditTrail->toArray() : $this->auditTrail;
        }
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['markingStore'])) {
            $output['marking_store'] = $this->markingStore->toArray();
        }
        if (isset($this->_usedProperties['supports'])) {
            $output['supports'] = $this->supports;
        }
        if (isset($this->_usedProperties['supportStrategy'])) {
            $output['support_strategy'] = $this->supportStrategy->toArray();
        }
        if (isset($this->_usedProperties['initialMarkings'])) {
            $output['initial_markings'] = $this->initialMarkings;
        }
        if (isset($this->_usedProperties['places'])) {
            $output['places'] = array_map(function ($v) { return $v instanceof \Symfony\Config\Pimcore\WorkflowsConfig\PlacesConfig ? $v->toArray() : $v; }, $this->places);
        }
        if (isset($this->_usedProperties['transitions'])) {
            $output['transitions'] = array_map(function ($v) { return $v instanceof \Symfony\Config\Pimcore\WorkflowsConfig\TransitionsConfig ? $v->toArray() : $v; }, $this->transitions);
        }
        if (isset($this->_usedProperties['globalActions'])) {
            $output['globalActions'] = array_map(function ($v) { return $v->toArray(); }, $this->globalActions);
        }

        return $output;
    }

}
