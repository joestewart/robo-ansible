<?php
namespace JoeStewart\Robo\Task\Ansible\AnsibleGalaxy;

use Robo\Container\SimpleServiceProvider;

trait loadTasks 
{

    /**
     * Return services.
     */
    public static function getAnsibleGalaxyServices()
    {
        return new SimpleServiceProvider(
            [
                'taskAnsibleGalaxy' => Galaxy::class,
                'taskAnsibleGalaxyInstall' => GalaxyInstall::class,
                'taskAnsibleGalaxyList' => GalaxyList::class,
            ]
        );
    }

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxyVersion
     */
    protected function taskAnsibleGalaxy($pathToAnsibleGalaxy = null) {
        return new Galaxy($pathToAnsibleGalaxy);
    }

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxyList
     */
    protected function taskAnsibleGalaxyInstall($pathToAnsibleGalaxy = null) {
        return new GalaxyInstall($pathToAnsibleGalaxy);
    }

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxyList
     */
    protected function taskAnsibleGalaxyList($pathToAnsibleGalaxy = null) {
        return new GalaxyList($pathToAnsibleGalaxy);
    }

} 