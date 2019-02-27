
# unibz.dev on VM with php 5.6 / Ubuntu 16.04

This repo is a development environment VM to code the unibz's Silverstripe CMS. On Silverstripe Platform we run PHP 7, so this box should be updated when possible.

## Installation

Before installing, you need [VirtualBox](https://www.virtualbox.org/) and [Vagrant](http://vagrantup.com) installed.

Clone repo **recursively, including submodules**, then run

    vagrant up

If vagrant is able to provision your machine, you will be greeted by an ASCII art.

Edit your hosts file

    sudo vim /etc/hosts

Append the following line:

    30.0.0.33 unibz.test db.unibz.test

Get a full DB+Assets snapshot from [Silverstripe Platform](https://platform.silverstripe.com/naut/project/unibz/snapshots) and save it into `./www/`.

Once vagrant finished provisioning your machine, get a shell into it

    vagrant ssh

Inside the VM, cd to /var/www/www.unibz.it and run

    composer install

During installation you might be prompted to insert a token for Github to avoid capping API requests limits. If so, follow the on-screen instructions.

Install [sspak](https://github.com/silverstripe/sspak#manually) into the VM.

Load the snapshot using sspak

    sspak load /var/www/unibz*.sspak /var/www/www.unibz.it

Enjoy: [http://unibz.test](http://unibz.test)

## DB Management

[Adminer](http://db.unibz.test) is included into the VM under `/var/www/html`. If you are not able to reach it on http://db.unibz.test, you might need to enable an additional virtual host (db.unibz.it) inside the VM in the apache2 conf under /etc/apache2/sites-enabled.

## Advanced configuration

See /puphpet/config.yaml for configuration. If you edit anything run ```vagrant provision``` to provision the machine with new changes.

## Coding

Follow instructions in the submodule doc.