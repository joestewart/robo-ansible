<?php
namespace JoeStewart\Robo\Task\Ansible\AnsibleGalaxy;

/**
 * Ansible Galaxy Search
 *
 * ```php
 * <?php
 * // simple execution
 * $this->taskAnsibleGalaxySearch()->run();
 *
 * // with custom path
 * $this->taskAnsibleGalaxySearch('path/to/my/ansible-galaxy')
 *      ->run();
 * ?>
 * ```
 */
class Search extends Base
{
    protected $action = 'search';

    /**
     * adds `galaxy-tags` option to ansible-galaxy
     *
     * @return $this
     */
    public function galaxyTags($galaxy_tags = '')
    {
        $this->option('--galaxy-tags=' . $galaxy_tags);

        return $this;
    }

    /**
     * adds `platform` option to ansible-galaxy
     *
     * @return $this
     */
    public function platform($platform = '')
    {
        $this->option('--platform=' . $platform);

        return $this;
    }

     /**
     * adds `authors` option to ansible-galaxy
     *
     * @return $this
     */
    public function author($author = '')
    {
        $this->option('--author=' . $author);

        return $this;
    }

    public function run()
    {
        $this->printTaskInfo('ansible-galaxy ' . $this->action . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}
