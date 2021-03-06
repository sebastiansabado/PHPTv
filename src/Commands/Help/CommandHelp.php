<?php 

namespace PHPTv\Commands\Help;

use PHPTv\BaseCommand;
use PHPTv\Exception;

class CommandHelp extends BaseCommand
{
    public $keyMapping = 
    [
        [
            'command' => 'raw_forward',
            'description' => 'Send raw commands via IRCC.',
        ],
        [
            'command' => 'toggle_power',
            'description' => 'Toggle the TV on / off.',
        ],
        [
            'command' => 'volume',
            'description' => 'Volume control',
        ],
    ];

    /** 
     * Show the user the current key mapping as a help
     * This is not automatically generated so you will have to update this method when
     * changes to the mapping are made.
     * 
     * @return void
     */
    public function execute(array $args = [])
    {   
        $this->cli->table($this->keyMapping);
    }
}