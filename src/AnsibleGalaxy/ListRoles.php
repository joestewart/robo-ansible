<?php
namespace JoeStewart\Robo\Task\Ansible\AnsibleGalaxy;

/**
 * Ansible Galaxy List
 *
 * ```php
 * <?php
 * // simple execution
 * $this->taskAnsibleListRoles()->run();
 *
 * // with custom path
 * $this->taskAnsibleListRoles('path/to/my/ansible')
 *      ->run();
 * ?>
 * ```
 */
class ListRoles extends Base
{
    protected $action = 'list';

    public function run()
    {
        $this->printTaskInfo('ansible-galaxy list' . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}
