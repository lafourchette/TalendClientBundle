TalendClientBundle
==============================

## Installation
Add LaFourchetteTalendClientBundle to your composer.json, then update

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
            new LaFourchette\TalendBundle\LaFourchetteTalendClientBundle(),
            // ...
        );
    }
```

Update your configuration

```yml
# app/config/parameters.yml
parameters:
    # Talend Client API
    la_fourchette_talend_client.base_url: "http://talend-url:8080/org.talend.administrator/metaServlet"
    la_fourchette_talend_client.login: "lab@lafourchette.com"
    la_fourchette_talend_client.password: "lafourchette"
```

## Usage

```php
$client = $container('la_fourchette_talend_client');

// List all the tasks
$client->listTasks();

// run the task with a task id
$client->runTask(17);
```

## License

This bundle is under the MIT license.