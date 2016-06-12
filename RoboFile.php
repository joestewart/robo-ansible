<?php

# require_once 'vendor/autoload.php';

class RoboFile extends \Robo\Tasks
{

    use \JoeStewart\Robo\Task\Ansible\loadTasks;
    use \JoeStewart\Robo\Task\Ansible\AnsibleGalaxy\loadTasks;
    use \JoeStewart\Robo\Task\Ansible\AnsiblePlaybook\loadTasks;
 
    public function test()
    {
        $this->stopOnFail(true);
        $this->taskPHPUnit()
            ->option('disallow-test-output')
            ->option('report-useless-tests')
            ->option('strict-coverage')
            ->option('-v')
            ->option('-d error_reporting=-1')
            ->arg('tests')
            ->run();
    }

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