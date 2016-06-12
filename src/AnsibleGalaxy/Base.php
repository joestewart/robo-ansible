<?php
namespace JoeStewart\Robo\Task\Ansible\AnsibleGalaxy;

use Robo\Task\BaseTask;
use Robo\Exception\TaskException;

abstract class Base extends BaseTask
{
    use \Robo\Common\ExecOneCommand;

    protected $opts = [];
    protected $action = '';

    public function __construct($pathToAnsibleGalaxy = null)
    {
        if ($pathToAnsibleGalaxy) {
            $this->command = $pathToAnsibleGalaxy;
        } elseif (is_executable('/usr/bin/ansible-galaxy')) {
            $this->command = '/usr/bin/ansible-galaxy';
        } elseif (is_executable('/usr/local/bin/ansible-galaxy')) {
            $this->command = '/usr/local/bin/ansible-galaxy';
        } else {
            throw new TaskException(__CLASS__, "Executable not found.");
        }
    }

    /**
     * adds `help` option to ansible-galaxy
     *
     * @return $this
     */
    public function help()
    {
        $this->option('--help');

        return $this;
    }

    /**
     * adds `roles-path` option to ansible
     *
     * @return $this
     */
    public function roles_path($roles_path = '')
    {
        $this->option('--roles-path=' . $roles_path);

        return $this;
    }

    /**
     * adds `version` option to ansible-galaxy
     *
     * @return $this
     */
    public function version()
    {
        $this->option('--version');

        return $this;
    }

    public function getCommand()
    {
        return "{$this->command} {$this->action}{$this->arguments}";
    }
}
