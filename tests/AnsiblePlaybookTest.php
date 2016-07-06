<?php

class AnsiblePlaybookTest extends \PHPUnit_Framework_TestCase
{
    use \JoeStewart\Robo\Task\Ansible\AnsiblePlaybook\loadTasks;

    public function testAnsibleBecomeOption()
    {
        $command = $this->taskAnsiblePlaybook('/usr/local/bin/ansible-playbook')
            ->become()
            ->becomeUser('BECOME_USER')
            ->becomeMethod('BECOME_METHOD')
            ->getCommand();
        $expected = '/usr/local/bin/ansible-playbook  --become --become-user=BECOME_USER --become-method=BECOME_METHOD';
        $this->assertEquals($expected, $command);
    }

    public function testAnsiblePlaybookHelpOption()
    {
        $command = $this->taskAnsiblePlaybook('/usr/local/bin/ansible-playbook')
            ->help()
            ->getCommand();
        $expected = '/usr/local/bin/ansible-playbook  --help';
        $this->assertEquals($expected, $command);
    }

    public function testAnsiblePlaybookInventoryFileOption()
    {
        $command = $this->taskAnsiblePlaybook('/usr/local/bin/ansible-playbook')
            ->inventoryFile('INVENTORY')
            ->getCommand();
        $expected = '/usr/local/bin/ansible-playbook  --inventory-file=INVENTORY';
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