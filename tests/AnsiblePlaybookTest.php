<?php

class AnsiblePlaybookTest extends \PHPUnit_Framework_TestCase
{
    use \JoeStewart\Robo\Task\Ansible\AnsiblePlaybook\loadTasks;

    public function testAnsiblePlaybookHelpOption()
    {
        $command = $this->taskAnsiblePlaybook('/usr/local/bin/ansible-playbook')
            ->help()
            ->getCommand();
        $expected = '/usr/local/bin/ansible-playbook  --help';
        $this->assertEquals($expected, $command);
    }

    public function testAnsiblePlaybookVersionOption()
    {
        $command = $this->taskAnsiblePlaybook('/usr/local/bin/ansible-playbook')
            ->version()
            ->getCommand();
        $expected = '/usr/local/bin/ansible-playbook  --version';
        $this->assertEquals($expected, $command);
    }

}