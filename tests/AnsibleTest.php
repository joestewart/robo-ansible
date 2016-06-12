<?php

class AnsibleTest extends \PHPUnit_Framework_TestCase
{
    use \JoeStewart\Robo\Task\Ansible\loadTasks;

    public function testAnsibleHelpOption()
    {
        $command = $this->taskAnsible('/usr/local/bin/ansible')
            ->help()
            ->getCommand();
        $expected = '/usr/local/bin/ansible  --help';
        $this->assertEquals($expected, $command);
    }

    public function testAnsibleVersionOption()
    {
        $command = $this->taskAnsible('/usr/local/bin/ansible')
            ->version()
            ->getCommand();
        $expected = '/usr/local/bin/ansible  --version';
        $this->assertEquals($expected, $command);
    }

}