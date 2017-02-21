<?php

use League\Container\ContainerAwareInterface;
use League\Container\ContainerAwareTrait;
use Symfony\Component\Console\Output\NullOutput;
use Robo\TaskAccessor;
use Robo\Robo;

class AnsibleTest extends \PHPUnit\Framework\TestCase implements ContainerAwareInterface
{
    use \JoeStewart\Robo\Task\Ansible\loadTasks;
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

    public function testAnsiblePassOptions()
    {
        $command = $this->taskAnsible('/usr/local/bin/ansible')
            ->askPass()
            ->askVaultPass()
            ->newVaultPasswordFile('NEW_VAULT_PASSWORD_FILE')
            ->vaultPasswordFile('VAULT_PASSWORD_FILE')
            ->getCommand();
        $expected = '/usr/local/bin/ansible  --ask-pass --ask-vault-pass --new-vault-password-file=NEW_VAULT_PASSWORD_FILE --vault-password-file=VAULT_PASSWORD_FILE';
        $this->assertEquals($expected, $command);
    }

    public function testAnsibleSshOptions()
    {
        $command = $this->taskAnsible('/usr/local/bin/ansible')
            ->scpExtraArgs('SCP_EXTRA_ARGS')
            ->sftpExtraArgs('SFTP_EXTRA_ARGS')
            ->sshCommonArgs('SSH_COMMON_ARGS')
            ->sshExtraArgs('SSH_EXTRA_ARGS')
            ->getCommand();
        $expected = '/usr/local/bin/ansible  --scp-extra-arg=SCP_EXTRA_ARGS --sftp-extra-arg=SFTP_EXTRA_ARGS --ssh-common-arg=SSH_COMMON_ARGS --ssh-extra-arg=SSH_EXTRA_ARGS';
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