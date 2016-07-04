<?php
namespace JoeStewart\Robo\Task\Ansible\AnsibleGalaxy;

/**
 * Ansible Galaxy Info
 *
 * ```php
 * <?php
 * // simple execution
 * $this->taskAnsibleGalaxyInfo()->run();
 *
 * // with custom path
 * $this->taskAnsibleGalaxyInfo('path/to/my/ansible-galaxy')
 *      ->run();
 * ?>
 * ```
 */
class Info extends Base
{
    protected $action = 'info';

    public function run()
    {
        $this->printTaskInfo('ansible-galaxy ' . $this->action . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}
