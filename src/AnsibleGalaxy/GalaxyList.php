<?php
namespace JoeStewart\Robo\Task\Ansible\AnsibleGalaxy;

/**
 * Ansible Galaxy List
 *
 * ```php
 * <?php
 * // simple execution
 * $this->taskAnsibleGalaxyList()->run();
 *
 * // with custom path
 * $this->taskAnsibleGalaxyList('path/to/my/ansible')
 *      ->run();
 * ?>
 * ```
 */
class GalaxyList extends Base
{
    protected $action = 'list';

    public function run()
    {
        $this->printTaskInfo('ansible-galaxy list' . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}