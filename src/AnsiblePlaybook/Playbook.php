<?php
namespace JoeStewart\Robo\Task\Ansible\AnsiblePlaybook;

/**
 * Ansible Playbook Task
 *
 * ```php
 * <?php
 * // simple execution
 * $this->taskAnsiblePlaybook()->run();
 *
 * // with custom path
 * $this->taskAnsiblePlaybook('path/to/my/ansible-playbook')
 *      ->run();
 * ?>
 * ```
 */
class Playbook extends Base
{
    protected $action = '';

    /**
     * adds `ask-pass` option to ansible-playbook
     *
     * @return $this
     */
    public function askPass()
    {
        $this->option('--ask-pass');

        return $this;
    }

    /**
     * adds `ask-become-pass` option to ansible-playbook
     *
     * @return $this
     */
    public function askBecomePass()
    {
        $this->option('--ask-become-pass');

        return $this;
    }

    /**
     * adds `ask-vault-pass` option to ansible-playbook
     *
     * @return $this
     */
    public function askVaultPass()
    {
        $this->option('--ask-vault-pass');

        return $this;
    }

    /**
     * adds `become` option to ansible-playbook
     *
     * @return $this
     */
    public function become()
    {
        $this->option('--become');

        return $this;
    }

    /**
     * adds `become-user` option to ansible-playbook
     *
     * @return $this
     */
    public function becomeUser($become_user = '')
    {
        $this->option('--become-user=' . $become_user);

        return $this;
    }

    /**
     * adds `become-method` option to ansible-playbook
     *
     * @return $this
     */
    public function becomeMethod($become_method = '')
    {
        $this->option('--become-method=' . $become_method);

        return $this;
    }

    /**
     * adds `inventory-file` option to ansible-playbook
     *
     * @return $this
     */
    public function inventoryFile($inventory_file = '')
    {
        $this->option('--inventory-file=' . $inventory_file);

        return $this;
    }

    /**
     * adds `new-vault-password-file` option to ansible-playbook
     *
     * @return $this
     */
    public function newVaultPasswordFile($new_vault_password_file)
    {
        $this->option('--new-vault-password-file=' . $new_vault_password_file);

        return $this;
    }

    /**
     * adds `scp-extra-arg` option to ansible
     *
     * @return $this
     */
    public function scpExtraArgs($scp_extra_arg)
    {
        $this->option('--scp-extra-arg=' . $scp_extra_arg);

        return $this;
    }

    /**
     * adds `sftp-extra-arg` option to ansible
     *
     * @return $this
     */
    public function sftpExtraArgs($sftp_extra_arg)
    {
        $this->option('--sftp-extra-arg=' . $sftp_extra_arg);

        return $this;
    }

    /**
     * adds `ssh-common-arg` option to ansible-playbook
     *
     * @return $this
     */
    public function sshCommonArgs($ssh_common_arg)
    {
        $this->option('--ssh-common-arg=' . $ssh_common_arg);

        return $this;
    }

    /**
     * adds `ssh-common-arg` option to ansible-playbook
     *
     * @return $this
     */
    public function sshExtraArgs($ssh_extra_arg)
    {
        $this->option('--ssh-extra-arg=' . $ssh_extra_arg);

        return $this;
    }

    /**
     * adds `vault-password-file` option to ansible-playbook
     *
     * @return $this
     */
    public function vaultPasswordFile($vault_password_file)
    {
        $this->option('--vault-password-file=' . $vault_password_file);

        return $this;
    }

    public function run()
    {
        $this->printTaskInfo('ansible-playbook' . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}
