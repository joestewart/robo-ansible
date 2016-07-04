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
     * adds `--init-path` option to ansible-galaxy
     *
     * @return $this
     */
    public function initPath($init_path)
    {
        $this->option('--init-path=' . $init_path);

        return $this;
    }

    /**
     * adds `offline` option to ansible-galaxy
     *
     * @return $this
     */
    public function offline()
    {
        $this->option('--offline');

        return $this;
    }

    public function run()
    {
        $this->printTaskInfo('ansible-galaxy ' . $this->action . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}
