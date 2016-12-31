<?php

namespace JoeStewart\Robo\Task\Ansible\Command;

trait Ansible
{

     /**
     * Ansible task.
     *
     * 
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansible($arg = '')
    {
        $result = $this->taskAnsible()->arg($arg)->run();
    }

    /**
     * Ansible Help task.
     *
     * 
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansibleHelp()
    {
        $result = $this->taskAnsible()->help()->run();
    }

    /**
     * Ansible Version task.
     *
     * 
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansibleVersion()
    {
        $result = $this->taskAnsible()->version()->run();
    }

    /**
     * Ansible Galaxy Delete task.
     *
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxyDelete($arg = '')
    {
        $result = $this->taskAnsibleGalaxyDelete()->arg($arg)->run();
    }

    /**
     * Ansible Galaxy Help task.
     *
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxyHelp($arg = '')
    {
        $result = $this->taskAnsibleGalaxy()->arg($arg)->help()->run();
    }

    /**
     * Ansible Galaxy Import task.
     *
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxyImport($arg = '')
    {
        $result = $this->taskAnsibleGalaxyImport()->arg($arg)->run();
    }

    /**
     * Ansible Galaxy Info task.
     *
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxyInfo($arg = '')
    {
        $result = $this->taskAnsibleGalaxyInfo()->arg($arg)->run();
    }

    /**
     * Ansible Galaxy Init task.
     *
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxyInit($arg = '')
    {
        $result = $this->taskAnsibleGalaxyInit()->arg($arg)->run();
    } 

    /**
     * Ansible Galaxy Install task.
     *
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxyInstall($arg = '')
    {
        $result = $this->taskAnsibleGalaxyInstall()->arg($arg)->run();
    }
 
    /**
     * Ansible Galaxy List task.
     *
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxyList($arg = '')
    {
        $result = $this->taskAnsibleGalaxyList()->arg($arg)->run();
    }
    
    /**
     * Ansible Galaxy List task.
     *
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxyLogin($arg = '')
    {
        $result = $this->taskAnsibleGalaxyLogin()->arg($arg)->run();
    }

    /**
     * Ansible Galaxy Remove task.
     *
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxyRemove($arg = '')
    {
        $result = $this->taskAnsibleGalaxyRemove()->arg($arg)->run();
    }

    /**
     * Ansible Galaxy Search task.
     *
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxySearch($arg = '')
    {
        $result = $this->taskAnsibleGalaxySearch()->arg($arg)->run();
    }

    /**
     * Ansible Galaxy Setup task.
     *
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxySetup($arg = '')
    {
        $result = $this->taskAnsibleGalaxySetup()->arg($arg)->run();
    }

    /**
     * Ansible Galaxy Version task.
     *
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxyVersion()
    {
        $result = $this->taskAnsibleGalaxy()->version()->run();
    }

    /**
     * Ansible Playbook task.
     *
     * 
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansibleplaybook($arg = '')
    {
        $result = $this->taskAnsiblePlaybook()->arg($arg)->run();
    }

    /**
     * Ansible Playbook Help task.
     *
     * 
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansibleplaybookHelp()
    {
        $result = $this->taskAnsiblePlaybook()->help()->run();
    }

    /**
     * Ansible Playbook Version task.
     *
     * 
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansibleplaybookVersion()
    {
        $result = $this->taskAnsiblePlaybook()->version()->run();
    }

}
