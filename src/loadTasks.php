<?php
namespace JoeStewart\Robo\Task\Ansible;

use Robo\Container\SimpleServiceProvider;

trait loadTasks 
{

    /**
     * Return services.
     */
    public static function getAnsibleServices()
    {
        return new SimpleServiceProvider(
            [
                'taskAnsibleAnsible' => Ansible::class,
                'taskAnsibleVersion' => Version::class,
            ]
        );
    }

    /**
     * @param null $pathToAnsible
     * @return Ansible
     */
    protected function taskAnsible($pathToAnsible = null) {
        return new Ansible($pathToAnsible);
    }
    
}
