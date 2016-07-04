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

    public function run()
    {
        $this->printTaskInfo('ansible-galaxy ' . $this->action . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}
