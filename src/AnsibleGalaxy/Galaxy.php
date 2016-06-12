<?php
namespace JoeStewart\Robo\Task\Ansible\AnsibleGalaxy;

/**
 * Ansible Galaxy
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
class Galaxy extends Base
{
    protected $action = '';

    public function run()
    {
        $this->printTaskInfo('ansible-galaxy' . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}