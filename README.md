## hello-world
Composer test package

###### To install the package from our dev.euregio.group repository, create a folder
and a composer.json such as:

```
{
    "name": "lorenza/blog",
    "repositories": [
        {
            "type": "vcs",
            "url": "https://lorenza.romano@dev.euregio.group/test/composer.git"
        }
    ],
    "require": {
        "lorenza/hello-world": "dev-master"
    }
}
```

```
composer install
```

###### To install the package from github, create a folder and a composer.json file
such as:

```
{
    "name": "lorenza/blog",
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/lorenza/hello-world"
        }
    ],
    "require": {
        "lorenza/hello-world": "dev-master"
    }
}
```

```
composer install
```


###### To install the package from a directory, create a folder and a composer.json
file such as:

```
{
    "repositories": [
        {
            "type": "path",
            "url": "../hello-world"
        }
    ],
    "require": {
         "lorenza/hello-world": "dev-master"
    }
}
```

```
composer install
```

phpunit tests (defined in phpunit.xml)
vendor/bin/phpunit

###### To install a package from a zip file.
Generate the zip file with 

```
git archive -o hello-world-zip

