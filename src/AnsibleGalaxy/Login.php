<?php
namespace JoeStewart\Robo\Task\Ansible\AnsibleGalaxy;

/**
 * Ansible Galaxy Login
 *
 * ```php
 * <?php
 * // simple execution
 * $this->taskAnsibleGalaxyLogin()->run();
 *
 * // with custom path
 * $this->taskAnsibleGalaxyLogin('path/to/my/ansible-galaxy')
 *      ->run();
 * ?>
 * ```
 */
class Login extends Base
{
    protected $action = 'login';

    public function run()
    {
        $this->printTaskInfo('ansible-galaxy ' . $this->action . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}
