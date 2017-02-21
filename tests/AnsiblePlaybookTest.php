<?php

use League\Container\ContainerAwareInterface;
use League\Container\ContainerAwareTrait;
use Symfony\Component\Console\Output\NullOutput;
use Robo\TaskAccessor;
use Robo\Robo;

class AnsiblePlaybookTest extends \PHPUnit\Framework\TestCase implements ContainerAwareInterface
{
    use \JoeStewart\Robo\Task\Ansible\AnsiblePlaybook\loadTasks;
    use TaskAccessor;
    use ContainerAwareTrait;

    // Set up the Robo container so that we can create tasks in our tests.
    function setup()
    {
        $container = Robo::createDefaultContainer(null, new NullOutput());
        $this->setContainer($container);
    }
    // Scaffold the collection builder
    public function collectionBuilder()
    {
        $emptyRobofile = new \Robo\Tasks;
        return $this->getContainer()->get('collectionBuilder', [$emptyRobofile]);
    }
    
    public function testAnsibleBecomeOption()
    {
        $command = $this->taskAnsiblePlaybook('/usr/local/bin/ansible-playbook')
            ->askBecomePass()
            ->become()
            ->becomeUser('BECOME_USER')
            ->becomeMethod('BECOME_METHOD')
            ->getCommand();
        $expected = '/usr/local/bin/ansible-playbook  --ask-become-pass --become --become-user=BECOME_USER --become-method=BECOME_METHOD';
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

    public function testAnsiblePlaybookPassOptions()
    {
        $command = $this->taskAnsiblePlaybook('/usr/local/bin/ansible-playbook')
            ->askPass()
            ->askVaultPass()
            ->newVaultPasswordFile('NEW_VAULT_PASSWORD_FILE')
            ->vaultPasswordFile('VAULT_PASSWORD_FILE')
            ->getCommand();
        $expected = '/usr/local/bin/ansible-playbook  --ask-pass --ask-vault-pass --new-vault-password-file=NEW_VAULT_PASSWORD_FILE --vault-password-file=VAULT_PASSWORD_FILE';
        $this->assertEquals($expected, $command);
    }

    public function testAnsiblePlaybookSshOptions()
    {
        $command = $this->taskAnsiblePlaybook('/usr/local/bin/ansible-playbook')
            ->scpExtraArgs('SCP_EXTRA_ARGS')
            ->sftpExtraArgs('SFTP_EXTRA_ARGS')
            ->sshCommonArgs('SSH_COMMON_ARGS')
            ->sshExtraArgs('SSH_EXTRA_ARGS')
            ->getCommand();
        $expected = '/usr/local/bin/ansible-playbook  --scp-extra-arg=SCP_EXTRA_ARGS --sftp-extra-arg=SFTP_EXTRA_ARGS --ssh-common-arg=SSH_COMMON_ARGS --ssh-extra-arg=SSH_EXTRA_ARGS';
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