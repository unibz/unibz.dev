
# unibz.dev on VM with php 5.6 / Ubuntu 14.04

## Installation

### Requirements

You will need [VirtualBox >= 5.0.10](https://www.virtualbox.org/) and [Vagrant >= 1.8.1](http://vagrantup.com) running in order to use. Currently the machine is set to use 2048M of RAM. You can change this settings either on the config or with virtualbox.

Clone repo and run

    vagrant up

### Edit your hosts file

    sudo nano /etc/hosts

Append following line:

    30.0.0.33       unibz.dev m.unibz.dev

Once vagrant has finished provisioning your machine, you should be able to open [http://unibz.dev](http://unibz.dev) and see a directory listing.

## Tools

### Email testing

You can catch emails running http://30.0.0.33:8025/ before testing.

### DB Management

[Adminer (phpmyadmin replacement)](http://30.0.0.33/adminer/)

***Connect via Navicat / Sequel pro***

Connect using SSH tunnel, username vagrant and SSH key generated at puphpet/files/dot/ssh/id_rsa. Password for key is also vagrant. This key is generated after your initial $ vagrant up!

## Advanced configuration

See /puphpet/config.yaml for configuration. If you edit anything run ```vagrant provision``` to provision the machine with this changes.
