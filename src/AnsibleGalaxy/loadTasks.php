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
                'taskAnsibleGalaxyDelete' => Delete::class,
                'taskAnsibleGalaxyImport' => Import::class,
                'taskAnsibleGalaxyInit' => Init::class,
                'taskAnsibleGalaxyInstall' => Install::class,
                'taskAnsibleGalaxyList' => ListRoles::class,
                'taskAnsibleGalaxyLogin' => Login::class,
                'taskAnsibleGalaxyRemove' => Remove::class,
                'taskAnsibleGalaxySearch' => Search::class,
                'taskAnsibleGalaxySetup' => Setup::class,
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
     * @return AnsibleGalaxyDelete
     */
    protected function taskAnsibleGalaxyDelete($pathToAnsibleGalaxy = null) {
        return new Delete($pathToAnsibleGalaxy);
    }

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxyImport
     */
    protected function taskAnsibleGalaxyImport($pathToAnsibleGalaxy = null) {
        return new Import($pathToAnsibleGalaxy);
    }

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxyInfo
     */
    protected function taskAnsibleGalaxyInfo($pathToAnsibleGalaxy = null) {
        return new Info($pathToAnsibleGalaxy);
    }

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxyInit
     */
    protected function taskAnsibleGalaxyInit($pathToAnsibleGalaxy = null) {
        return new Init($pathToAnsibleGalaxy);
    }

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxyList
     */
    protected function taskAnsibleGalaxyInstall($pathToAnsibleGalaxy = null) {
        return new Install($pathToAnsibleGalaxy);
    }

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxyList
     */
    protected function taskAnsibleGalaxyList($pathToAnsibleGalaxy = null) {
        return new ListRoles($pathToAnsibleGalaxy);
    }

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxyLogin
     */
    protected function taskAnsibleGalaxyLogin($pathToAnsibleGalaxy = null) {
        return new Login($pathToAnsibleGalaxy);
    }

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxyRemove
     */
    protected function taskAnsibleGalaxyRemove($pathToAnsibleGalaxy = null) {
        return new Remove($pathToAnsibleGalaxy);
    }

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxySearch
     */
    protected function taskAnsibleGalaxySearch($pathToAnsibleGalaxy = null) {
        return new Search($pathToAnsibleGalaxy);
    }

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxySearch
     */
    protected function taskAnsibleGalaxySetup($pathToAnsibleGalaxy = null) {
        return new Setup($pathToAnsibleGalaxy);
    }

}
