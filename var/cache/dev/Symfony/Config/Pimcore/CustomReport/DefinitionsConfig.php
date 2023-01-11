<?php

namespace Symfony\Config\Pimcore\CustomReport;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DefinitionsConfig 
{
    private $id;
    private $name;
    private $niceName;
    private $sql;
    private $group;
    private $groupIconClass;
    private $iconClass;
    private $menuShortcut;
    private $reportClass;
    private $chartType;
    private $pieColumn;
    private $pieLabelColumn;
    private $xAxis;
    private $yAxis;
    private $modificationDate;
    private $creationDate;
    private $shareGlobally;
    private $sharedUserNames;
    private $sharedRoleNames;
    private $dataSourceConfig;
    private $columnConfiguration;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function id($value): self
    {
        $this->_usedProperties['id'] = true;
        $this->id = $value;

        return $this;
    }

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
    public function niceName($value): self
    {
        $this->_usedProperties['niceName'] = true;
        $this->niceName = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sql($value): self
    {
        $this->_usedProperties['sql'] = true;
        $this->sql = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function group($value): self
    {
        $this->_usedProperties['group'] = true;
        $this->group = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function groupIconClass($value): self
    {
        $this->_usedProperties['groupIconClass'] = true;
        $this->groupIconClass = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function iconClass($value): self
    {
        $this->_usedProperties['iconClass'] = true;
        $this->iconClass = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function menuShortcut($value): self
    {
        $this->_usedProperties['menuShortcut'] = true;
        $this->menuShortcut = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function reportClass($value): self
    {
        $this->_usedProperties['reportClass'] = true;
        $this->reportClass = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function chartType($value): self
    {
        $this->_usedProperties['chartType'] = true;
        $this->chartType = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pieColumn($value): self
    {
        $this->_usedProperties['pieColumn'] = true;
        $this->pieColumn = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pieLabelColumn($value): self
    {
        $this->_usedProperties['pieLabelColumn'] = true;
        $this->pieLabelColumn = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function xAxis($value): self
    {
        $this->_usedProperties['xAxis'] = true;
        $this->xAxis = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function yAxis($value): self
    {
        $this->_usedProperties['yAxis'] = true;
        $this->yAxis = $value;

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
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function shareGlobally($value): self
    {
        $this->_usedProperties['shareGlobally'] = true;
        $this->shareGlobally = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sharedUserNames($value): self
    {
        $this->_usedProperties['sharedUserNames'] = true;
        $this->sharedUserNames = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sharedRoleNames($value): self
    {
        $this->_usedProperties['sharedRoleNames'] = true;
        $this->sharedRoleNames = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function dataSourceConfig($value): self
    {
        $this->_usedProperties['dataSourceConfig'] = true;
        $this->dataSourceConfig = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function columnConfiguration($value): self
    {
        $this->_usedProperties['columnConfiguration'] = true;
        $this->columnConfiguration = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('id', $value)) {
            $this->_usedProperties['id'] = true;
            $this->id = $value['id'];
            unset($value['id']);
        }

        if (array_key_exists('name', $value)) {
            $this->_usedProperties['name'] = true;
            $this->name = $value['name'];
            unset($value['name']);
        }

        if (array_key_exists('niceName', $value)) {
            $this->_usedProperties['niceName'] = true;
            $this->niceName = $value['niceName'];
            unset($value['niceName']);
        }

        if (array_key_exists('sql', $value)) {
            $this->_usedProperties['sql'] = true;
            $this->sql = $value['sql'];
            unset($value['sql']);
        }

        if (array_key_exists('group', $value)) {
            $this->_usedProperties['group'] = true;
            $this->group = $value['group'];
            unset($value['group']);
        }

        if (array_key_exists('groupIconClass', $value)) {
            $this->_usedProperties['groupIconClass'] = true;
            $this->groupIconClass = $value['groupIconClass'];
            unset($value['groupIconClass']);
        }

        if (array_key_exists('iconClass', $value)) {
            $this->_usedProperties['iconClass'] = true;
            $this->iconClass = $value['iconClass'];
            unset($value['iconClass']);
        }

        if (array_key_exists('menuShortcut', $value)) {
            $this->_usedProperties['menuShortcut'] = true;
            $this->menuShortcut = $value['menuShortcut'];
            unset($value['menuShortcut']);
        }

        if (array_key_exists('reportClass', $value)) {
            $this->_usedProperties['reportClass'] = true;
            $this->reportClass = $value['reportClass'];
            unset($value['reportClass']);
        }

        if (array_key_exists('chartType', $value)) {
            $this->_usedProperties['chartType'] = true;
            $this->chartType = $value['chartType'];
            unset($value['chartType']);
        }

        if (array_key_exists('pieColumn', $value)) {
            $this->_usedProperties['pieColumn'] = true;
            $this->pieColumn = $value['pieColumn'];
            unset($value['pieColumn']);
        }

        if (array_key_exists('pieLabelColumn', $value)) {
            $this->_usedProperties['pieLabelColumn'] = true;
            $this->pieLabelColumn = $value['pieLabelColumn'];
            unset($value['pieLabelColumn']);
        }

        if (array_key_exists('xAxis', $value)) {
            $this->_usedProperties['xAxis'] = true;
            $this->xAxis = $value['xAxis'];
            unset($value['xAxis']);
        }

        if (array_key_exists('yAxis', $value)) {
            $this->_usedProperties['yAxis'] = true;
            $this->yAxis = $value['yAxis'];
            unset($value['yAxis']);
        }

        if (array_key_exists('modificationDate', $value)) {
            $this->_usedProperties['modificationDate'] = true;
            $this->modificationDate = $value['modificationDate'];
            unset($value['modificationDate']);
        }

        if (array_key_exists('creationDate', $value)) {
            $this->_usedProperties['creationDate'] = true;
            $this->creationDate = $value['creationDate'];
            unset($value['creationDate']);
        }

        if (array_key_exists('shareGlobally', $value)) {
            $this->_usedProperties['shareGlobally'] = true;
            $this->shareGlobally = $value['shareGlobally'];
            unset($value['shareGlobally']);
        }

        if (array_key_exists('sharedUserNames', $value)) {
            $this->_usedProperties['sharedUserNames'] = true;
            $this->sharedUserNames = $value['sharedUserNames'];
            unset($value['sharedUserNames']);
        }

        if (array_key_exists('sharedRoleNames', $value)) {
            $this->_usedProperties['sharedRoleNames'] = true;
            $this->sharedRoleNames = $value['sharedRoleNames'];
            unset($value['sharedRoleNames']);
        }

        if (array_key_exists('dataSourceConfig', $value)) {
            $this->_usedProperties['dataSourceConfig'] = true;
            $this->dataSourceConfig = $value['dataSourceConfig'];
            unset($value['dataSourceConfig']);
        }

        if (array_key_exists('columnConfiguration', $value)) {
            $this->_usedProperties['columnConfiguration'] = true;
            $this->columnConfiguration = $value['columnConfiguration'];
            unset($value['columnConfiguration']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['id'])) {
            $output['id'] = $this->id;
        }
        if (isset($this->_usedProperties['name'])) {
            $output['name'] = $this->name;
        }
        if (isset($this->_usedProperties['niceName'])) {
            $output['niceName'] = $this->niceName;
        }
        if (isset($this->_usedProperties['sql'])) {
            $output['sql'] = $this->sql;
        }
        if (isset($this->_usedProperties['group'])) {
            $output['group'] = $this->group;
        }
        if (isset($this->_usedProperties['groupIconClass'])) {
            $output['groupIconClass'] = $this->groupIconClass;
        }
        if (isset($this->_usedProperties['iconClass'])) {
            $output['iconClass'] = $this->iconClass;
        }
        if (isset($this->_usedProperties['menuShortcut'])) {
            $output['menuShortcut'] = $this->menuShortcut;
        }
        if (isset($this->_usedProperties['reportClass'])) {
            $output['reportClass'] = $this->reportClass;
        }
        if (isset($this->_usedProperties['chartType'])) {
            $output['chartType'] = $this->chartType;
        }
        if (isset($this->_usedProperties['pieColumn'])) {
            $output['pieColumn'] = $this->pieColumn;
        }
        if (isset($this->_usedProperties['pieLabelColumn'])) {
            $output['pieLabelColumn'] = $this->pieLabelColumn;
        }
        if (isset($this->_usedProperties['xAxis'])) {
            $output['xAxis'] = $this->xAxis;
        }
        if (isset($this->_usedProperties['yAxis'])) {
            $output['yAxis'] = $this->yAxis;
        }
        if (isset($this->_usedProperties['modificationDate'])) {
            $output['modificationDate'] = $this->modificationDate;
        }
        if (isset($this->_usedProperties['creationDate'])) {
            $output['creationDate'] = $this->creationDate;
        }
        if (isset($this->_usedProperties['shareGlobally'])) {
            $output['shareGlobally'] = $this->shareGlobally;
        }
        if (isset($this->_usedProperties['sharedUserNames'])) {
            $output['sharedUserNames'] = $this->sharedUserNames;
        }
        if (isset($this->_usedProperties['sharedRoleNames'])) {
            $output['sharedRoleNames'] = $this->sharedRoleNames;
        }
        if (isset($this->_usedProperties['dataSourceConfig'])) {
            $output['dataSourceConfig'] = $this->dataSourceConfig;
        }
        if (isset($this->_usedProperties['columnConfiguration'])) {
            $output['columnConfiguration'] = $this->columnConfiguration;
        }

        return $output;
    }

}
