<?php

class AnsibleGalaxyTest extends \PHPUnit_Framework_TestCase
{
    use \JoeStewart\Robo\Task\Ansible\AnsibleGalaxy\loadTasks;

    public function testAnsibleGalaxyHelpOption()
    {
        $command = $this->taskAnsibleGalaxy('/usr/local/bin/ansible-galaxy')
            ->help()
            ->getCommand();
        $expected = '/usr/local/bin/ansible-galaxy  --help';
        $this->assertEquals($expected, $command);
    }

    public function testAnsibleGalaxyVersionOption()
    {
        $command = $this->taskAnsibleGalaxy('/usr/local/bin/ansible-galaxy')
            ->version()
            ->getCommand();
        $expected = '/usr/local/bin/ansible-galaxy  --version';
        $this->assertEquals($expected, $command);
    }

}