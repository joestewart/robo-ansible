<?php
namespace JoeStewart\Robo\Task\Ansible;

use Robo\Task\BaseTask;
use Robo\Exception\TaskException;
use Robo\Contract\CommandInterface;

abstract class Base extends BaseTask implements CommandInterface
{
    use \Robo\Common\ExecOneCommand;

    protected $opts = [];
    protected $action = '';

    public function __construct($pathToAnsible = null)
    {
        if ($pathToAnsible) {
            $this->command = $pathToAnsible;
        } elseif (is_executable('/usr/bin/ansible')) {
            $this->command = '/usr/bin/ansible';
        } elseif (is_executable('/usr/local/bin/ansible')) {
            $this->command = '/usr/local/bin/ansible';
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
