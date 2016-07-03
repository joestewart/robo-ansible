<?php
namespace JoeStewart\Robo\Task\Ansible\AnsiblePlaybook;

use Robo\Task\BaseTask;
use Robo\Exception\TaskException;

abstract class Base extends BaseTask
{
    use \Robo\Common\ExecOneCommand;

    protected $opts = [];
    protected $action = '';

    public function __construct($pathToAnsiblePlaybook = null)
    {
        if ($pathToAnsiblePlaybook) {
            $this->command = $pathToAnsiblePlaybook;
        } elseif (is_executable('/usr/bin/ansible-playbook')) {
            $this->command = '/usr/bin/ansible-playbook';
        } elseif (is_executable('/usr/local/bin/ansible-playbook')) {
            $this->command = '/usr/local/bin/ansible-playbook';
        } else {
            throw new TaskException(__CLASS__, "Executable not found.");
        }
    }

    /**
     * adds `help` option to ansible
     *
     * @return $this
     */
    public function help()
    {
        $this->option('--help');

        return $this;
    }

    /**
     * adds `version` option to ansible-playbook
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

