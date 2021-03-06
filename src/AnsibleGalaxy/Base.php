<?php
namespace JoeStewart\Robo\Task\Ansible\AnsibleGalaxy;

use Robo\Task\BaseTask;
use Robo\Exception\TaskException;
use Robo\Contract\CommandInterface;

abstract class Base extends BaseTask implements CommandInterface
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
     * adds `ignore-certs` option to ansible-galaxy
     *
     * @return $this
     */
    public function ignoreCerts()
    {
        $this->option('--ignore-certs');

        return $this;
    }

    /**
     * adds `roles-path` option to ansible
     *
     * @return $this
     */
    public function rolesPath($roles_path = '')
    {
        $this->option('--roles-path=' . $roles_path);

        return $this;
    }

    /**
     * adds `server` option to ansible-galaxy
     *
     * @return $this
     */
    public function server($server)
    {
        $this->option('--server=' . $server);

        return $this;
    }

    /**
     * adds `verbose` option to ansible-galaxy
     *
     * @return $this
     */
    public function verbose($verbosity = 'v')
    {
        $this->option('-' . $verbosity);

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
