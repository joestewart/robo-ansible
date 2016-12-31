<?php
namespace JoeStewart\Robo\Task\Ansible\AnsiblePlaybook;

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
