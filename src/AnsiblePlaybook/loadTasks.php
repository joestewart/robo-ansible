<?php
namespace JoeStewart\Robo\Task\Ansible\AnsiblePlaybook;

use Robo\Container\SimpleServiceProvider;

trait loadTasks 
{

    /**
     * @param null $pathToAnsiblePlaybook
     * @return Ansible
     */
    protected function taskAnsiblePlaybook($pathToAnsiblePlaybook = null) {
        return $this->task(Playbook::class, $pathToAnsiblePlaybook);
    }

}
