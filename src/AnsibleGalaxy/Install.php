<?php
namespace JoeStewart\Robo\Task\Ansible\AnsibleGalaxy;

/**
 * Ansible Galaxy Install
 *
 * ```php
 * <?php
 * // simple execution
 * $this->taskAnsibleGalaxyInstall()->run();
 *
 * // with custom path
 * $this->taskAnsibleGalaxyInstall('path/to/my/ansible-galaxy')
 *      ->run();
 * ?>
 * ```
 */
class Install extends Base
{
    protected $action = 'install';

    /**
     * adds `force` option to ansible-galaxy
     *
     * @return $this
     */
    public function force()
    {
        $this->option('--force');

        return $this;
    }

    /**
     * adds `--ignore-errors` option to ansible-galaxy
     *
     * @return $this
     */
    public function ignoreErrors()
    {
        $this->option('--ignore-errors');

        return $this;
    }

    /**
     * adds `--no-deps` option to ansible-galaxy
     *
     * @return $this
     */
    public function noDeps()
    {
        $this->option('--no-deps');

        return $this;
    }

    /**
     * adds `role-file` option to ansible
     *
     * @return $this
     */
    public function roleFile($role_file = '')
    {
        $this->option('--role-file=' . $role_file);

        return $this;
    }

    public function run()
    {
        $this->printTaskInfo('ansible-galaxy ' . $this->action . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}
