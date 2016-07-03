# robo-ansible
Ansbile tasks for Robo Task Runner

[![Build Status](https://travis-ci.org/joestewart/robo-ansible.svg?branch=master)](https://travis-ci.org/joestewart/robo-ansible)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/800f42d0-51b1-4f51-b6f6-e66ea8af488a/mini.png)](https://insight.sensiolabs.com/projects/800f42d0-51b1-4f51-b6f6-e66ea8af488a)

This package provides Robo tasks for the following ansible commands:
                          
 ansible
  ansible:help                   Ansible Help task.
  ansible:version                Ansible Version task.

 ansiblegalaxy
  ansiblegalaxy:help             Ansible Galaxy Help task.
  ansiblegalaxy:list             Ansible Galaxy List task.
  ansiblegalaxy:version          Ansible Galaxy Version task.

 ansibleplaybook
  ansibleplaybook:help           Ansible Playbook Help task.
  ansibleplaybook:version        Ansible Playbook Version task.



##Installation

```
composer require joestewart/robo-ansible
```
     
##Usage

```
<?php

class RoboFile extends \Robo\Tasks
{

    use \JoeStewart\Robo\Task\Ansible\loadTasks;
    
    ...
    
?>
```

##Example


```    
    public function ansible($arg = '')
    {
        $result = $this->taskAnsible()->arg($arg)->run();
        return $result;
    }
```

## Predefined Commands

```
<?php

class RoboFile extends \Robo\Tasks
{

    use \JoeStewart\Robo\Task\Ansible\loadTasks;
    use \JoeStewart\Robo\Task\Ansible\AnsibleGalaxy\loadTasks;
    use \JoeStewart\Robo\Task\Ansible\AnsiblePlaybook\loadTasks;
    use \JoeStewart\Robo\Task\Ansible\Command\Ansible;
    
    ...
    
?>
```

Now list the avaliable commands using
```
./vendor/bin/robo list
```

##Credit

Thanks to Robo.li, greg-1-anderson and boedah for example robo code.

