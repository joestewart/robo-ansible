<?php
namespace JoeStewart\Robo\Task\Ansible;

/**
 * Ansible Task
 *
 * ```php
 * <?php
 * // simple execution
 * $this->taskAnsible()->run();
 *
 * // with custom path
 * $this->taskAnsible('path/to/my/ansible')
 *      ->run();
 * ?>
 * ```
 */
class Ansible extends Base
{
    protected $action = '';

    public function run()
    {
        $this->printTaskInfo('ansible' . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}
