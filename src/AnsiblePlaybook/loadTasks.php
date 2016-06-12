<?php
namespace JoeStewart\Robo\Task\Ansible\AnsiblePlaybook;

use Robo\Container\SimpleServiceProvider;

trait loadTasks 
{

    /**
     * Return services.
     */
    public static function getAnsiblePlaybookServices()
    {
        return new SimpleServiceProvider(
            [
                'taskAnsiblePlaybook' => Playbook::class,
            ]
        );
    }

    /**
     * @param null $pathToAnsiblePlaybook
     * @return Ansible
     */
    protected function taskAnsiblePlaybook($pathToAnsiblePlaybook = null) {
        return new Playbook($pathToAnsiblePlaybook);
    }

} 