<?php
namespace JoeStewart\Robo\Task\Ansible\AnsiblePlaybook;

/**
 * Ansible Playbook Task
 *
 * ```php
 * <?php
 * // simple execution
 * $this->taskAnsiblePlaybook()->run();
 *
 * // with custom path
 * $this->taskAnsiblePlaybook('path/to/my/ansible-playbook')
 *      ->run();
 * ?>
 * ```
 */
class Playbook extends Base
{
    protected $action = '';

    public function run()
    {
        $this->printTaskInfo('ansible-playbook' . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}