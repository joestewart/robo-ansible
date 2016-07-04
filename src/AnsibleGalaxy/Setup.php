<?php
namespace JoeStewart\Robo\Task\Ansible\AnsibleGalaxy;

/**
 * Ansible Galaxy Setup
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
class Setup extends Base
{
    protected $action = 'setup';

    public function run()
    {
        $this->printTaskInfo('ansible-galaxy ' . $this->action . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}
