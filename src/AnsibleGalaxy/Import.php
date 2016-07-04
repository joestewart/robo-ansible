<?php
namespace JoeStewart\Robo\Task\Ansible\AnsibleGalaxy;

/**
 * Ansible Galaxy Import
 *
 * ```php
 * <?php
 * // simple execution
 * $this->taskAnsibleGalaxyImport()->run();
 *
 * // with custom path
 * $this->taskAnsibleGalaxyImport('path/to/my/ansible-galaxy')
 *      ->run();
 * ?>
 * ```
 */
class Import extends Base
{
    protected $action = 'import';

    /**
     * adds `--branch` option to ansible-galaxy
     *
     * @return $this
     */
    public function branch($branch = '')
    {
        $this->option('--branch=' . $branch);

        return $this;
    }

    /**
     * adds `no-wait` option to ansible-galaxy
     *
     * @return $this
     */
    public function noWait()
    {
        $this->option('--no-wait');

        return $this;
    }

    /**
     * adds `status` option to ansible-galaxy
     *
     * @return $this
     */
    public function status()
    {
        $this->option('--status');

        return $this;
    }

    public function run()
    {
        $this->printTaskInfo('ansible-galaxy ' . $this->action . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}
