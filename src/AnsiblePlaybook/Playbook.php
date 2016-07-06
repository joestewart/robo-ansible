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

    /**
     * adds `become` option to ansible-playbook
     *
     * @return $this
     */
    public function become()
    {
        $this->option('--become');

        return $this;
    }

    /**
     * adds `become-user` option to ansible-playbook
     *
     * @return $this
     */
    public function becomeUser($become_user = '')
    {
        $this->option('--become-user=' . $become_user);

        return $this;
    }

    /**
     * adds `become-method` option to ansible-playbook
     *
     * @return $this
     */
    public function becomeMethod($become_method = '')
    {
        $this->option('--become-method=' . $become_method);

        return $this;
    }

    /**
     * adds `inventory-file` option to ansible-playbook
     *
     * @return $this
     */
    public function inventoryFile($inventory_file = '')
    {
        $this->option('--inventory-file=' . $inventory_file);

        return $this;
    }

    public function run()
    {
        $this->printTaskInfo('ansible-playbook' . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}
