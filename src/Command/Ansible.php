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
        $this->taskAnsible()->arg($arg)->run();
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
        $this->taskAnsible()->help()->run();
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
        $this->taskAnsible()->version()->run();
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
        $this->taskAnsibleGalaxyDelete()->arg($arg)->run();
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
        $this->taskAnsibleGalaxy()->arg($arg)->help()->run();
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
        $this->taskAnsibleGalaxyImport()->arg($arg)->run();
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
        $this->taskAnsibleGalaxyInfo()->arg($arg)->run();
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
        $this->taskAnsibleGalaxyInit()->arg($arg)->run();
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
        $this->taskAnsibleGalaxyInstall()->arg($arg)->run();
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
        $this->taskAnsibleGalaxyList()->arg($arg)->run();
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
        $this->taskAnsibleGalaxyLogin()->arg($arg)->run();
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
        $this->taskAnsibleGalaxyRemove()->arg($arg)->run();
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
        $this->taskAnsibleGalaxySearch()->arg($arg)->run();
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
        $this->taskAnsibleGalaxySetup()->arg($arg)->run();
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
        $this->taskAnsibleGalaxy()->version()->run();
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
        $this->taskAnsiblePlaybook()->arg($arg)->run();
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
        $this->taskAnsiblePlaybook()->help()->run();
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
        $this->taskAnsiblePlaybook()->version()->run();
    }

}
