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
class GalaxyList extends Base
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
     * adds `help` option to ansible
     *
     * @return $this
     */
    public function rolesFile($roles_file = '')
    {
        $this->option('--roles-file=' . $roles_file);

        return $this;
    }

    public function run()
    {
        $this->printTaskInfo('ansible-galaxy install' . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}
