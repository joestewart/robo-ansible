<?php

namespace JoeStewart\Robo\Task\Ansible\Command;

trait Ansible
{

     /**
     * Ansible task.
     *
     * @see  https://github.com/joestewart/robo-ansible/blob/master/src/Task/Ansible/Status.php
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansible($arg = '')
    {
        $result = $this->taskAnsible()->arg($arg)->run();
        return $result;
    }

    /**
     * Ansible Help task.
     *
     * @see  https://github.com/joestewart/robo-ansible/blob/master/src/Task/Ansible/Status.php
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansibleHelp()
    {
        $result = $this->taskAnsible()->help()->run();
        return $result;
    }

    /**
     * Ansible Version task.
     *
     * @see  https://github.com/joestewart/robo-ansible/blob/master/src/Task/Ansible/Status.php
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansibleVersion()
    {
        $result = $this->taskAnsible()->version()->run();
        return $result;
    }

    /**
     * Ansible Galaxy Delete task.
     *
     * @see  https://github.com/joestewart/robo-ansible/blob/master/src/Task/Ansible/AnsibleGalaxy/Delete.php
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxyDelete($arg = '')
    {
        $result = $this->taskAnsibleGalaxyDelete()->arg($arg)->run();
        return $result;
    }

    /**
     * Ansible Galaxy Help task.
     *
     * @see  https://github.com/joestewart/robo-ansible/blob/master/src/Task/Ansible/AnsibleGalaxy/List.php
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxyHelp($arg = '')
    {
        $result = $this->taskAnsibleGalaxy()->arg($arg)->help()->run();
        return $result;
    }

    /**
     * Ansible Galaxy Import task.
     *
     * @see  https://github.com/joestewart/robo-ansible/blob/master/src/Task/Ansible/AnsibleGalaxy/Import.php
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxyImport($arg = '')
    {
        $result = $this->taskAnsibleGalaxyImport()->arg($arg)->run();
        return $result;
    }

    /**
     * Ansible Galaxy Info task.
     *
     * @see  https://github.com/joestewart/robo-ansible/blob/master/src/Task/Ansible/AnsibleGalaxy/Info.php
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxyInfo($arg = '')
    {
        $result = $this->taskAnsibleGalaxyInfo()->arg($arg)->run();
        return $result;
    }

    /**
     * Ansible Galaxy Init task.
     *
     * @see  https://github.com/joestewart/robo-ansible/blob/master/src/Task/Ansible/AnsibleGalaxy/Init.php
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxyInit($arg = '')
    {
        $result = $this->taskAnsibleGalaxyInit()->arg($arg)->run();
        return $result;
    } 

    /**
     * Ansible Galaxy Install task.
     *
     * @see  https://github.com/joestewart/robo-ansible/blob/master/src/Task/Ansible/AnsibleGalaxy/Install.php
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxyInstall($arg = '')
    {
        $result = $this->taskAnsibleGalaxyInstall()->arg($arg)->run();
        return $result;
    }
 
    /**
     * Ansible Galaxy List task.
     *
     * @see  https://github.com/joestewart/robo-ansible/blob/master/src/Task/Ansible/AnsibleGalaxy/List.php
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxyList($arg = '')
    {
        $result = $this->taskAnsibleGalaxyList()->arg($arg)->run();
        return $result;
    }
    
    /**
     * Ansible Galaxy List task.
     *
     * @see  https://github.com/joestewart/robo-ansible/blob/master/src/Task/Ansible/AnsibleGalaxy/List.php
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxyLogin($arg = '')
    {
        $result = $this->taskAnsibleGalaxyLogin()->arg($arg)->run();
        return $result;
    }

    /**
     * Ansible Galaxy Remove task.
     *
     * @see  https://github.com/joestewart/robo-ansible/blob/master/src/Task/Ansible/AnsibleGalaxy/Remove.php
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxyRemove($arg = '')
    {
        $result = $this->taskAnsibleGalaxyRemove()->arg($arg)->run();
        return $result;
    }

    /**
     * Ansible Galaxy Search task.
     *
     * @see  https://github.com/joestewart/robo-ansible/blob/master/src/Task/Ansible/AnsibleGalaxy/Search.php
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxySearch($arg = '')
    {
        $result = $this->taskAnsibleGalaxySearch()->arg($arg)->run();
        return $result;
    }

    /**
     * Ansible Galaxy Setup task.
     *
     * @see  https://github.com/joestewart/robo-ansible/blob/master/src/Task/Ansible/AnsibleGalaxy/Setup.php
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxySetup($arg = '')
    {
        $result = $this->taskAnsibleGalaxySetup()->arg($arg)->run();
        return $result;
    }

    /**
     * Ansible Galaxy Version task.
     *
     * @see  https://github.com/joestewart/robo-ansible/blob/master/src/Task/Ansible/AnsibleGalaxy/List.php
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansiblegalaxyVersion()
    {
        $result = $this->taskAnsibleGalaxy()->version()->run();
        return $result;
    }

    /**
     * Ansible Playbook task.
     *
     * @see  https://github.com/joestewart/robo-ansible/blob/master/src/Task/Ansible/Status.php
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansibleplaybook($arg = '')
    {
        $result = $this->taskAnsiblePlaybook()->arg($arg)->run();
        return $result;
    }

    /**
     * Ansible Playbook Help task.
     *
     * @see  https://github.com/joestewart/robo-ansible/blob/master/src/Task/Ansible/Status.php
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansibleplaybookHelp()
    {
        $result = $this->taskAnsiblePlaybook()->help()->run();
        return $result;
    }

    /**
     * Ansible Playbook Version task.
     *
     * @see  https://github.com/joestewart/robo-ansible/blob/master/src/Task/Ansible/Status.php
     * @link https://packagist.org/packages/joestewart/robo-ansible
     *
     * @return object Result
     */
    public function ansibleplaybookVersion()
    {
        $result = $this->taskAnsiblePlaybook()->version()->run();
        return $result;
    }

}
