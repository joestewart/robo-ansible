<?php
namespace JoeStewart\Robo\Task\Ansible\AnsibleGalaxy;

trait loadTasks 
{

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxyVersion
     */
    protected function taskAnsibleGalaxy($pathToAnsibleGalaxy = null) {
        return $this->task(Galaxy::class, $pathToAnsibleGalaxy);
    }

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxyDelete
     */
    protected function taskAnsibleGalaxyDelete($pathToAnsibleGalaxy = null) {
        return $this->task(Delete::class, $pathToAnsibleGalaxy);
    }

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxyImport
     */
    protected function taskAnsibleGalaxyImport($pathToAnsibleGalaxy = null) {
        return $this->task(Import::class, $pathToAnsibleGalaxy);
    }

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxyInfo
     */
    protected function taskAnsibleGalaxyInfo($pathToAnsibleGalaxy = null) {
        return $this->task(Info::class, $pathToAnsibleGalaxy);
    }

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxyInit
     */
    protected function taskAnsibleGalaxyInit($pathToAnsibleGalaxy = null) {
        return $this->task(Init::class, $pathToAnsibleGalaxy);
    }

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxyList
     */
    protected function taskAnsibleGalaxyInstall($pathToAnsibleGalaxy = null) {
        return $this->task(Install::class, $pathToAnsibleGalaxy);
    }

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxyList
     */
    protected function taskAnsibleGalaxyList($pathToAnsibleGalaxy = null) {
        return $this->task(ListRoles::class, $pathToAnsibleGalaxy);
    }

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxyLogin
     */
    protected function taskAnsibleGalaxyLogin($pathToAnsibleGalaxy = null) {
        return $this->task(Login::class, $pathToAnsibleGalaxy);
    }

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxyRemove
     */
    protected function taskAnsibleGalaxyRemove($pathToAnsibleGalaxy = null) {
        return $this->task(Remove::class, $pathToAnsibleGalaxy);
    }

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxySearch
     */
    protected function taskAnsibleGalaxySearch($pathToAnsibleGalaxy = null) {
        return $this->task(Search::class, $pathToAnsibleGalaxy);
    }

    /**
     * @param null $pathToAnsible
     * @return AnsibleGalaxySearch
     */
    protected function taskAnsibleGalaxySetup($pathToAnsibleGalaxy = null) {
        return $this->task(Setup::class, $pathToAnsibleGalaxy);
    }

}
