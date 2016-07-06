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

    /**
     * adds `ask-become-pass` option to ansible
     *
     * @return $this
     */
    public function askBecomePass()
    {
        $this->option('--ask-become-pass');

        return $this;
    }

    /**
     * adds `become` option to ansible
     *
     * @return $this
     */
    public function become()
    {
        $this->option('--become');

        return $this;
    }

    /**
     * adds `become-user` option to ansible
     *
     * @return $this
     */
    public function becomeUser($become_user = '')
    {
        $this->option('--become-user=' . $become_user);

        return $this;
    }

    /**
     * adds `become-method` option to ansible
     *
     * @return $this
     */
    public function becomeMethod($become_method = '')
    {
        $this->option('--become-method=' . $become_method);

        return $this;
    }

    /**
     * adds `inventory-file` option to ansible
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
        $this->printTaskInfo('ansible' . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}
