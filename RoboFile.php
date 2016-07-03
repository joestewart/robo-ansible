<?php

class RoboFile extends \Robo\Tasks
{

    use \JoeStewart\Robo\Task\Ansible\loadTasks;
    use \JoeStewart\Robo\Task\Ansible\AnsibleGalaxy\loadTasks;
    use \JoeStewart\Robo\Task\Ansible\AnsiblePlaybook\loadTasks;
    use \JoeStewart\Robo\Task\Ansible\Command\Ansible;
 
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
}
