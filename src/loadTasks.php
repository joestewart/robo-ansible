<?php
namespace JoeStewart\Robo\Task\Ansible;

use Robo\Container\SimpleServiceProvider;

trait loadTasks 
{

    /**
     * @param null $pathToAnsible
     * @return Ansible
     */
    protected function taskAnsible($pathToAnsible = null) {
        return $this->task(Ansible::class, $pathToAnsible);
    }
    
}
