TalendClientBundle
==============================
[![Build Status](https://travis-ci.org/lafourchette/TalendClientBundle.svg?branch=master)](https://travis-ci.org/lafourchette/TalendClientBundle) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/lafourchette/TalendClientBundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/lafourchette/TalendClientBundle/?branch=master) [![Code Coverage](https://scrutinizer-ci.com/g/lafourchette/TalendClientBundle/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/lafourchette/TalendClientBundle/?branch=master)

## Installation
Add TalendClientBundle to your composer.json, then update

```json
{
    ...
    "require": {
        "lafourchette/talend-client-bundle": "*"
    },
    ...
}
```
Add LaFourchetteTalendClientBundle to your application kernel

```php
    // app/AppKernel.php
    public function registerBundles()
    {
        return array(
            // ...
            new TalendClientBundle(),
            // ...
        );
    }
```

Update your configuration

```yml
# app/config/parameters.yml
parameters:
    # Talend Client API
    talend_client.base_url: "http://talend-url:8080/org.talend.administrator/metaServlet"
    talend_client.login: "lab@lafourchette.com"
    talend_client.password: "lafourchette"
```

## Usage

```php
$client = $container('talend_client');

// List all the tasks
$client->listTasks();

// run the task with a task id
$client->runTask(17);
```

## License

This bundle is under the MIT license.
