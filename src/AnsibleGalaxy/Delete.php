<?php
namespace JoeStewart\Robo\Task\Ansible\AnsibleGalaxy;

/**
 * Ansible Galaxy Delete
 *
 * ```php
 * <?php
 * // simple execution
 * $this->taskAnsibleGalaxy()->run();
 *
 * // with custom path
 * $this->taskAnsibleGalaxy('path/to/my/ansible-galaxy')
 *      ->run();
 * ?>
 * ```
 */
class Delete extends Base
{
    protected $action = 'delete';

    public function run()
    {
        $this->printTaskInfo('ansible-galaxy ' . $this->action . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}
