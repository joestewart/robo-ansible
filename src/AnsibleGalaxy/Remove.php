<?php
namespace JoeStewart\Robo\Task\Ansible\AnsibleGalaxy;

/**
 * Ansible Galaxy Remove
 *
 * ```php
 * <?php
 * // simple execution
 * $this->taskAnsibleGalaxyRemove()->run();
 *
 * // with custom path
 * $this->taskAnsibleGalaxyRemove('path/to/my/ansible-galaxy')
 *      ->run();
 * ?>
 * ```
 */
class Remove extends Base
{
    protected $action = 'remove';

    public function run()
    {
        $this->printTaskInfo('ansible-galaxy ' . $this->action . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}
