<?php

class AnsibleTest extends \PHPUnit_Framework_TestCase
{
    use \JoeStewart\Robo\Task\Ansible\loadTasks;

    public function testAnsibleBecomeOption()
    {
        $command = $this->taskAnsible('/usr/local/bin/ansible')
            ->askBecomePass()
            ->become()
            ->becomeUser('BECOME_USER')
            ->becomeMethod('BECOME_METHOD')
            ->getCommand();
        $expected = '/usr/local/bin/ansible  --ask-become-pass --become --become-user=BECOME_USER --become-method=BECOME_METHOD';
        $this->assertEquals($expected, $command);
    }

    public function testAnsibleHelpOption()
    {
        $command = $this->taskAnsible('/usr/local/bin/ansible')
            ->help()
            ->getCommand();
        $expected = '/usr/local/bin/ansible  --help';
        $this->assertEquals($expected, $command);
    }

    public function testAnsibleInventoryFileOption()
    {
        $command = $this->taskAnsible('/usr/local/bin/ansible')
            ->inventoryFile('INVENTORY')
            ->getCommand();
        $expected = '/usr/local/bin/ansible  --inventory-file=INVENTORY';
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