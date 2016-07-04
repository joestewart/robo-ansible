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

    public function testAnsibleGalaxyIgnoreCertsOption()
    {
        $command = $this->taskAnsibleGalaxy('/usr/local/bin/ansible-galaxy')
            ->ignoreCerts()
            ->getCommand();
        $expected = '/usr/local/bin/ansible-galaxy  --ignore-certs';
        $this->assertEquals($expected, $command);
    }

    public function testAnsibleGalaxyRolesPathOption()
    {
        $command = $this->taskAnsibleGalaxy('/usr/local/bin/ansible-galaxy')
            ->rolesPath('ROLES_PATH')
            ->getCommand();
        $expected = '/usr/local/bin/ansible-galaxy  --roles-path=ROLES_PATH';
        $this->assertEquals($expected, $command);
    }

    public function testAnsibleGalaxyServerOption()
    {
        $command = $this->taskAnsibleGalaxy('/usr/local/bin/ansible-galaxy')
            ->server('API_SERVER')
            ->getCommand();
        $expected = '/usr/local/bin/ansible-galaxy  --server=API_SERVER';
        $this->assertEquals($expected, $command);
    }

    public function testAnsibleGalaxyVerboseOption()
    {
        $command = $this->taskAnsibleGalaxy('/usr/local/bin/ansible-galaxy')
            ->verbose('vvvv')
            ->getCommand();
        $expected = '/usr/local/bin/ansible-galaxy  -vvvv';
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

    public function testAnsibleGalaxyDeleteAction()
    {
        $command = $this->taskAnsibleGalaxyDelete('/usr/local/bin/ansible-galaxy')
            ->arg('github_user github_repo')
            ->ignoreCerts()
            ->server('API_SERVER')
            ->getCommand();
        $expected = '/usr/local/bin/ansible-galaxy delete github_user github_repo --ignore-certs --server=API_SERVER';
        $this->assertEquals($expected, $command);
    }

    public function testAnsibleGalaxyImportAction()
    {
        $command = $this->taskAnsibleGalaxyImport('/usr/local/bin/ansible-galaxy')
            ->arg('github_user github_repo')
            ->branch('REFERENCE')
            ->noWait()
            ->status()
            ->getCommand();
        $expected = '/usr/local/bin/ansible-galaxy import github_user github_repo --branch=REFERENCE --no-wait --status';
        $this->assertEquals($expected, $command);
    }

    public function testAnsibleGalaxyInfoAction()
    {
        $command = $this->taskAnsibleGalaxyInfo('/usr/local/bin/ansible-galaxy')
            ->arg('role_name')
            ->getCommand();
        $expected = '/usr/local/bin/ansible-galaxy info role_name';
        $this->assertEquals($expected, $command);
    }

    public function testAnsibleGalaxyInitAction()
    {
        $command = $this->taskAnsibleGalaxyInit('/usr/local/bin/ansible-galaxy')
            ->arg('testowner.testname')
            ->force()
            ->initPath('INIT_PATH')
            ->offline()
            ->getCommand();
        $expected = '/usr/local/bin/ansible-galaxy init testowner.testname --force --init-path=INIT_PATH --offline';
        $this->assertEquals($expected, $command);
    }

    public function testAnsibleGalaxyInstallAction()
    {
        $command = $this->taskAnsibleGalaxyInstall('/usr/local/bin/ansible-galaxy')
            ->arg('testowner.testname')
            ->getCommand();
        $expected = '/usr/local/bin/ansible-galaxy install testowner.testname';
        $this->assertEquals($expected, $command);
    }

    public function testAnsibleGalaxyListAction()
    {
        $command = $this->taskAnsibleGalaxyList('/usr/local/bin/ansible-galaxy')
            ->arg('testowner.testname')
            ->getCommand();
        $expected = '/usr/local/bin/ansible-galaxy list testowner.testname';
        $this->assertEquals($expected, $command);
    }
 
    public function testAnsibleGalaxyLoginAction()
    {
        $command = $this->taskAnsibleGalaxyLogin('/usr/local/bin/ansible-galaxy')
            ->getCommand();
        $expected = '/usr/local/bin/ansible-galaxy login';
        $this->assertEquals($expected, $command);
    }

    public function testAnsibleGalaxyRemoveAction()
    {
        $command = $this->taskAnsibleGalaxyRemove('/usr/local/bin/ansible-galaxy')
            ->arg('testowner.testname')
            ->getCommand();
        $expected = '/usr/local/bin/ansible-galaxy remove testowner.testname';
        $this->assertEquals($expected, $command);
    }

    public function testAnsibleGalaxySearchAction()
    {
        $command = $this->taskAnsibleGalaxySearch('/usr/local/bin/ansible-galaxy')
            ->arg('testowner.testname')
            ->galaxyTags('testtag')
            ->platform('testplatform')
            ->author('testauthor')
            ->getCommand();
        $expected = '/usr/local/bin/ansible-galaxy search testowner.testname --galaxy-tags=testtag --platform=testplatform --author=testauthor';
        $this->assertEquals($expected, $command);
    }

    public function testAnsibleGalaxySetupAction()
    {
        $command = $this->taskAnsibleGalaxySetup('/usr/local/bin/ansible-galaxy')
            ->arg('source github_user github_repo secret')
            ->getCommand();
        $expected = '/usr/local/bin/ansible-galaxy setup source github_user github_repo secret';
        $this->assertEquals($expected, $command);
    }

}