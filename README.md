# robo-ansible
Ansbile tasks for Robo Task Runner

[![Build Status](https://travis-ci.org/joestewart/robo-ansible.svg?branch=master)](https://travis-ci.org/joestewart/robo-ansible)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/9dcbc05a-c554-47c0-afeb-a106e75c409e/mini.png)](https://insight.sensiolabs.com/projects/9dcbc05a-c554-47c0-afeb-a106e75c409e)

This package provides Robo tasks for the following ansible commands:
                          
    ansible

    ansiblegalaxy
       delete
       help 
       import
       info 
       init
       install
       list
       login
       remove
       search
       setup
  
    ansibleplaybook

##Installation

```
composer require jstewart/robo-ansible
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

