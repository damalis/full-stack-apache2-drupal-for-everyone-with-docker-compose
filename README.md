# [full stack apache2 Drupal for everyone with docker compose](https://github.com/damalis/full-stack-apache2-drupal-for-everyone-with-docker-compose)

If You want to build a website with Drupal at short time;

#### Full stack Apache2 Drupal:
<p align="left"> <a href="https://drupal.org/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/docker-library/docs/e405066455691ca2429eb8094777f12d2dad8f91/drupal/logo.svg?sanitize=true" alt="Drupal" height="40" width="40"/> </a>&nbsp;&nbsp;&nbsp; 
<a href="https://docs.docker.com/compose/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/docker/compose/v2/logo.png" alt="docker compose" width="40" height="40" width="40"/> </a>&nbsp;&nbsp;&nbsp; 
<a href="https://mariadb.org/" target="_blank" rel="noreferrer"> <img src="https://avatars.githubusercontent.com/u/5877084?s=200&v=4" alt="mariadb" height="50" width="50"/> </a>&nbsp;&nbsp;&nbsp; 
<a href="https://dev.mysql.com/" target="_blank" rel="noreferrer"> <img src="https://avatars.githubusercontent.com/u/2452804?s=200&v=4" alt="mysql" height="50" width="50"/> </a>&nbsp;&nbsp;&nbsp; 
<a href="https://www.apache.org" target="_blank" rel="noreferrer"> <img src="https://avatars.githubusercontent.com/u/47359?s=200&v=4" alt="apache2" height="40" width="40"/> </a>&nbsp;&nbsp;&nbsp; 
<a href="https://www.php.net" target="_blank" rel="noreferrer"> <img src="https://avatars.githubusercontent.com/u/25158?s=200&v=4" alt="php" height="40" width="40"/> </a>&nbsp;&nbsp;&nbsp; 
<a href="https://redis.io" target="_blank" rel="noreferrer"> <img src="https://avatars.githubusercontent.com/u/1529926?s=200&v=4" alt="redis" height="40" width="40"/> </a>&nbsp;&nbsp;&nbsp; 
<a href="https://www.varnish-software.com/" target="_blank" rel="noreferrer"> <img src="https://avatars.githubusercontent.com/u/577014?s=200&v=4" alt="varnish" height="40" width="40"/> </a>&nbsp;&nbsp;&nbsp; 
<a href="#" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/bash/bash.png" alt="Bash" height="50" width="50" /> </a>&nbsp;&nbsp;&nbsp; 
<a href="https://www.phpmyadmin.net/" target="_blank" rel="noreferrer"> <img src="https://avatars.githubusercontent.com/u/1351977?s=200&v=4" alt="phpmyadmin" height="40" width="40"/> </a>&nbsp;&nbsp;&nbsp; 
<a href="https://certbot.eff.org/" target="_blank" rel="noreferrer"> <img src="https://avatars.githubusercontent.com/u/17889013?s=200&v=4" alt="certbot" height="40" width="40"/> </a>&nbsp;&nbsp;&nbsp; 
<a href="https://letsencrypt.org/" target="_blank" rel="noreferrer"> <img src="https://avatars.githubusercontent.com/u/9289019?s=200&v=4" alt="letsencrypt" height="40" width="40"/> </a>&nbsp;&nbsp;&nbs
<a href="https://www.portainer.io/?hsLang=en" target="_blank" rel="noreferrer"> <img src="https://avatars.githubusercontent.com/u/22225832?s=200&v=4" alt="portainer" height="40" width="40"/> </a>&nbsp;&nbsp;&nbsp; 
<a href="https://www.offen.dev/" target="_blank" rel="noreferrer"> <img src="https://avatars.githubusercontent.com/u/47735043?s=200&v=4" alt="backup" height="35" width="35"/> </a> </p>

Plus, manage docker containers with Portainer.

#### Supported CPU architectures:
<p align="left"> arm64/aarch64, x86-64 </p>

#### Supported Linux Package Manage Systems:
<p align="left"> apk, dnf, yum, apt/apt-get, zypper </p>
 
#### Supported Linux Operation Systems:
<p align="left"> <a href="https://alpinelinux.org/" target="_blank" rel="noreferrer"> <img src="https://avatars.githubusercontent.com/u/7600810?s=200&v=4" alt="alpine linux" height="40" width="40"/> </a>&nbsp;&nbsp;&nbsp; 
<a href="https://fedoraproject.org/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/github/explore/e6b1e7f0fb8d0bf920bd719c7289243138bdc1b4/topics/fedora/fedora.png" alt="fedora" height="40" width="40"/> </a>&nbsp;&nbsp;&nbsp; 
<a href="https://www.centos.org/" target="_blank" rel="noreferrer"> <img src="https://avatars.githubusercontent.com/u/79192?s=200&v=4" alt="centos" height="40" width="40"/> </a>&nbsp;&nbsp;&nbsp; 
<a href="https://www.debian.org/" target="_blank" rel="noreferrer"> <img src="https://avatars.githubusercontent.com/u/1854028?s=200&v=4" alt="debian" height="40" width="40"/> </a>&nbsp;&nbsp;&nbsp; 
<a href="https://ubuntu.com/" target="_blank" rel="noreferrer"> <img src="https://avatars.githubusercontent.com/u/4604537?s=200&v=4" alt="ubuntu" height="40" width="40"/> </a>&nbsp;&nbsp;&nbsp; 
<a href="https://www.raspberrypi.com/" target="_blank" rel="noreferrer"> <img src="https://avatars.githubusercontent.com/u/1294177?s=200&v=4" alt="ubuntu" height="40" width="40"/> </a>&nbsp;&nbsp;&nbsp; 
<a href="https://www.redhat.com/en/technologies/linux-platforms/enterprise-linux" target="_blank" rel="noreferrer"> <img src="https://avatars.githubusercontent.com/u/33972111?s=200&v=4" alt="redhat on s390x (IBM Z)" height="40" width="40"/> </a>&nbsp;&nbsp;&nbsp; 
<a href="https://www.suse.com/products/server/" target="_blank" rel="noreferrer"> <img src="https://avatars.githubusercontent.com/u/623819?s=200&v=4" alt="opensuse on s390x (IBM Z)" height="40" width="40"/> </a> </p>

##### Note: Fedora 37, 39 and alpine linux x86-64 compatible, could not try sles IBM Z s390x, rhel IBM Z s390x and raspberrypi.

#### With this project you can quickly run the following:

- [Drupal](https://hub.docker.com/_/drupal) - [php-fpm](https://hub.docker.com/_/php)
- [webserver (apache2/httpd)](https://hub.docker.com/_/httpd)
- [certbot (letsencrypt)](https://hub.docker.com/r/certbot/certbot)
- [phpMyAdmin](https://hub.docker.com/r/phpmyadmin/phpmyadmin/)
- [databaseMariadb](https://hub.docker.com/_/mariadb) [databaseMysql](https://hub.docker.com/_/mysql)
- [redis](https://hub.docker.com/_/redis)
- [varnish](https://hub.docker.com/_/varnish)
- [backup](https://hub.docker.com/r/offen/docker-volume-backup)

#### For certbot (letsencrypt) certificate:

- [Set DNS configuration of your domain name](https://support.google.com/a/answer/48090?hl=en)

#### IPv4/IPv6 Firewall
Create rules to open ports to the internet, or to a specific IPv4 address or range.

- http: 80
- https: 443
- portainer: 9001
- phpmyadmin: 9090

#### Contents:

- [Auto Configuration and Installation](#automatic)
- [Requirements](#requirements)
- [Manual Configuration and Installation](#manual)
- [Portainer Installation](#portainer)
- [Usage](#usage)
	- [Website](#website)
	- [Webserver](#webserver)
	- [Database](#database)
	- [Redis](#redis)
	- [Varnish](#varnish)
	- [phpMyAdmin](#phpmyadmin)
	- [backup](#backup)

## Automatic

### Exec install shell script for auto installation and configuration

download with

```
git clone https://github.com/damalis/full-stack-apache2-drupal-for-everyone-with-docker-compose.git
```

Open a terminal and `cd` to the folder in which `docker-compose.yml` is saved and run:

```
cd full-stack-apache2-drupal-for-everyone-with-docker-compose
chmod +x install.sh
./install.sh
```

## Requirements

Make sure you have the latest versions of **Docker** and **Docker Compose** installed on your machine.

- [How install docker](https://docs.docker.com/engine/install/)
- [How install docker compose](https://docs.docker.com/compose/install/)

Clone this repository or copy the files from this repository into a new folder.

Make sure to [add your user to the `docker` group](https://docs.docker.com/install/linux/linux-postinstall/#manage-docker-as-a-non-root-user).

## Manual

### Configuration

download with

```
git clone https://github.com/damalis/full-stack-apache2-drupal-for-everyone-with-docker-compose.git
```

Open a terminal and `cd` to the folder in which `docker-compose.yml` is saved and run:

```
cd full-stack-apache2-drupal-for-everyone-with-docker-compose
```

Copy the example environment into `.env`

```
cp env.example .env
```

Edit the `.env` file to change values of ```LOCAL_TIMEZONE```, ```DOMAIN_NAME```, ```DIRECTORY_PATH```, ```LETSENCRYPT_EMAIL```, ```DB_USER```, ```DB_PASSWORD```, ```DB_NAME```, ```MYSQL_ROOT_PASSWORD```, ```DATABASE_IMAGE_NAME```, ```DATABASE_CONT_NAME```, ```DATABASE_PACKAGE_MANAGER```, ```DATABASE_AUTHENTICATION_PLUGIN```, ```DATABASE_ADMIN_COMMANDLINE```, ```PMA_CONTROLUSER```, ```PMA_CONTROLPASS```, ```PMA_HTPASSWD_USERNAME```, ```PMA_HTPASSWD_PASSWORD``` and ```VARNISH_VERSION```.

LOCAL_TIMEZONE=[to see local timezones](https://docs.diladele.com/docker/timezones.html)

DIRECTORY_PATH=```pwd``` at command line\
DATABASE_IMAGE_NAME=```mariadb``` or ```mysql```\
DATABASE_CONT_NAME=```mariadb```, ```mysql``` or ```custom name```\
DATABASE_PACKAGE_MANAGER=```apt-get update && apt-get install -y gettext-base``` for mariadb, ```microdnf install -y gettext``` for mysql\
DATABASE_AUTHENTICATION_PLUGIN=```mysql_native_password``` for mariadb, ```caching_sha2_password``` for mysql\
DATABASE_ADMIN_COMMANDLINE=```mariadb-admin``` for mariadb, ```mysqladmin``` for mysql\
VARNISH_VERSION=```latest``` for centos version 9+ and fedora, ```stable``` for the others

and

```
cp ./phpmyadmin/apache2/sites-available/default-ssl.sample.conf ./phpmyadmin/apache2/sites-available/default-ssl.conf
```
change example.com to your domain name in ```./phpmyadmin/apache2/sites-available/default-ssl.conf``` file.

```
cp ./database/phpmyadmin/sql/create_tables.sql.template.example ./database/phpmyadmin/sql/create_tables.sql.template
```
change pma_controluser, db_authentication_plugin and db_authentication_password in ```./database/phpmyadmin/sql/create_tables.sql.template``` file.

### Installation

Firstly: will create external volume

```
docker volume create --driver local --opt type=none --opt device=${PWD}/certbot --opt o=bind certbot-etc
```

```
docker compose up -d
```

then reloading for webserver ssl configuration

```
docker container restart webserver
```

The containers are now built and running. You should be able to access the Drupal installation with the configured IP in the browser address. `https://example.com`.

For convenience you may add a new entry into your hosts file.

## Portainer

```
docker compose -f portainer-docker-compose.yml -p portainer up -d 
```

manage docker with [Portainer](https://www.portainer.io/) is the definitive container management tool for Docker, Docker Swarm with it's highly intuitive GUI and API. 

You can also visit `https://example.com:9001` to access portainer after starting the containers.

## Usage

#### You could manage docker containers without command line with portainer.

### Show both running and stopped containers

The docker ps command only shows running containers by default. To see all containers, use the -a (or --all) flag:

```
docker ps -a
```

### Starting containers

You can start the containers with the `up` command in daemon mode (by adding `-d` as an argument) or by using the `start` command:

```
docker compose start
```

### Stopping containers

```
docker compose stop
```

### Removing containers

To stop and remove all the containers use the `down` command:

```
docker compose down
```

to remove portainer and the other containers:

```
docker rm -f $(docker ps -a -q)
```

Use `-v` if you need to remove the database volume which is used to persist the database:

```
docker compose down -v
```

to remove external certbot-etc and portainer and the other volumes:

```
docker volume rm $(docker volume ls -q)
```

Delete all images, containers, volumes, and networks that are not associated with a container (dangling):

```
docker system prune
```

To additionally remove any stopped containers and all unused images (not just dangling ones), add the -a flag to the command:

```
docker system prune -a
```

to remove portainer and the other images:

```
docker rmi $(docker image ls -q)
```

### Project from existing source

Copy all files into a new directory:

You can now use the `up` command:

```
docker compose up -d
```

### Docker run reference

[https://docs.docker.com/engine/reference/run/](https://docs.docker.com/engine/reference/run/)

### Website

You should see the "Drupal installation" page in your browser. If not, please check if your PHP installation satisfies Drupal's requirements.

```
https://example.com
```

add or remove code in the ./php-fpm/php/conf.d/security.ini file for custom php.ini configurations

[https://www.php.net/manual/en/configuration.file.php](https://www.php.net/manual/en/configuration.file.php)

You should make changes custom host configurations ```./php-fpm/php-fpm.d/z-www.conf``` then must restart service, FPM uses php.ini syntax for its configuration file - php-fpm.conf, and pool configuration files.

[https://www.php.net/manual/en/install.fpm.configuration.php](https://www.php.net/manual/en/install.fpm.configuration.php)

```
docker container restart drupal
```

add and/or remove drupal site folders and files with any ftp client program in ```./drupal``` folder.
<br />You can also visit `https://example.com` to access website after starting the containers.

#### Webserver

add or remove code in the ```./webserver/extra/httpd-ssl.conf``` file for custom apache2/httpd configurations

[https://httpd.apache.org/docs/2.4/](https://httpd.apache.org/docs/2.4/)

#### Database

ADVANCED OPTIONS -> Host: database

[https://mariadb.com/kb/en/configuring-mariadb-with-option-files/](https://mariadb.com/kb/en/configuring-mariadb-with-option-files/)

[https://dev.mysql.com/doc/refman/8.3/en/](https://dev.mysql.com/doc/refman/8.3/en/)

#### Redis

at page https://example.com/admin/modules, filter: redis and check then install.

if there isn't these lines, Edit Drupal settings file: ```./drupal/sites/default/settings.php``` and add these lines at the bottom of the file:

```
$settings['redis.connection']['interface'] = 'PhpRedis';
// Host ip address.
$settings['redis.connection']['host'] = 'redis';
$settings['cache']['default'] = 'cache.backend.redis';
// Redis port.
$settings['redis.connection']['port'] = '6379';
$settings['redis.connection']['base'] = 12;
// Password of redis updated in php.ini file.
// $settings['redis.connection']['password'] = "password";
$settings['cache']['bins']['bootstrap'] = 'cache.backend.chainedfast';
$settings['cache']['bins']['discovery'] = 'cache.backend.chainedfast';
$settings['cache']['bins']['config'] = 'cache.backend.chainedfast';
```

Create ```./drupal/sites/default/files/services.yml``` inisde default folder and add the below code in it.

```
services:
	# Cache tag checksum backend. Used by redis and most other cache backend
	# to deal with cache tag invalidations.
	cache_tags.invalidator.checksum:
		class: Drupal\redis\Cache\RedisCacheTagsChecksum
		arguments: ['@redis.factory']
		tags:
			- { name: cache_tags_invalidator }

	# Replaces the default lock backend with a redis implementation.
	lock:
		class: Drupal\Core\Lock\LockBackendInterface
	factory: ['@redis.lock.factory', get]

	# Replaces the default persistent lock backend with a redis implementation.
	lock.persistent:
		class: Drupal\Core\Lock\LockBackendInterface
		factory: ['@redis.lock.factory', get]
		arguments: [true]

	# Replaces the default flood backend with a redis implementation.
	flood:
	class: Drupal\Core\Flood\FloodInterface
	factory: ['@redis.flood.factory', get]
```

#### Varnish

at page https://example.com/admin/modules, filter: purge and check then install.

Varnish Server Hostname: varnish

Varnish Server Port: 8080

Scheme: http

[This link is to complete configure Varnish](https://www.varnish-software.com/developers/tutorials/configuring-varnish-drupal/#4-configure-caching-and-purging-in-drupal)

All necessary changes to sites/default and sites/default/settings.php have been made, so you should remove write permissions to them now in order to avoid security risks.

```
chmod 655 ./drupal/sites/default/settings.php
```

### phpMyAdmin

You can add your own custom config.inc.php settings (such as Configuration Storage setup) by creating a file named config.user.inc.php with the various user defined settings in it, and then linking it into the container using:

```
./phpmyadmin/config.user.inc.php
```

You can also visit `https://example.com:9090` to access phpMyAdmin after starting the containers.

The first authorize screen(htpasswd;username or password) and phpmyadmin login screen the username and the password is the same as supplied in the `.env` file.

### backup

This will back up the all files and folders in database/dump sql and html volumes, once per day, and write it to ./backups with a filename like backup-2023-01-01T10-18-00.tar.gz

#### can run on a custom cron schedule

```BACKUP_CRON_EXPRESSION: '20 01 * * *'``` the UTC timezone.
