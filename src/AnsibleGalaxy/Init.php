<?php
namespace JoeStewart\Robo\Task\Ansible\AnsibleGalaxy;

/**
 * Ansible Galaxy Init
 *
 * ```php
 * <?php
 * // simple execution
 * $this->taskAnsibleGalaxyInit()->run();
 *
 * // with custom path
 * $this->taskAnsibleGalaxyInit('path/to/my/ansible-galaxy')
 *      ->run();
 * ?>
 * ```
 */
class Init extends Base
{
    protected $action = 'init';

    public function run()
    {
        $this->printTaskInfo('ansible-galaxy ' . $this->action . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}
