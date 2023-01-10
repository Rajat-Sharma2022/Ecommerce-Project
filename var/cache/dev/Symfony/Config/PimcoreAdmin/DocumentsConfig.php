<?php

namespace Symfony\Config\PimcoreAdmin;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Documents'.\DIRECTORY_SEPARATOR.'NotesEventsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DocumentsConfig 
{
    private $notesEvents;
    private $_usedProperties = [];

    public function notesEvents(array $value = []): \Symfony\Config\PimcoreAdmin\Documents\NotesEventsConfig
    {
        if (null === $this->notesEvents) {
            $this->_usedProperties['notesEvents'] = true;
            $this->notesEvents = new \Symfony\Config\PimcoreAdmin\Documents\NotesEventsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "notesEvents()" has already been initialized. You cannot pass values the second time you call notesEvents().');
        }

        return $this->notesEvents;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('notes_events', $value)) {
            $this->_usedProperties['notesEvents'] = true;
            $this->notesEvents = new \Symfony\Config\PimcoreAdmin\Documents\NotesEventsConfig($value['notes_events']);
            unset($value['notes_events']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['notesEvents'])) {
            $output['notes_events'] = $this->notesEvents->toArray();
        }

        return $output;
    }

}
