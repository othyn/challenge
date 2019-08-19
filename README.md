# Code Challenge
This is the repo for the specified code challenge. Not including keywords as to not resolve GitHub/Google search. This is a standard readme that I have created for all of my projects, in which I update with a new base if I update the style whilst creating a new one, such as this!

## Table of contents
* [Code challenge](#codechallenge)
* [Table of contents](#table-of-contents)
* [Setup](#setup)
  * [Prerequisites](#prerequisites)
  * [Installation](#installation)
* [Development](#development)

## Setup
The project runs using a per project installation of Homestead. [Instructions on installation and setup](https://laravel.com/docs/5.8/homestead), and more specifically the [per-project installation](https://laravel.com/docs/5.8/homestead#per-project-installation) are on Laravel's website, although I'll cover the step-by-step process below for getting this up and running for this project.

### Prerequisites
These are the underlying requirements of the system in order to develop for the project, assuming you're on macOS. Linux installation steps align almost directly, with most packages either being preconfigured or easily available through your inbuilt distro's package manager such as apt or yum. Windows installion is a little different, but most steps are replaced with package auto-installers instead.

0. Install [brew](https://brew.sh), which is a delicious pacakge manager for macOS! Helps you for a myriad of things, not just this, an amazing tool.

1. Install a hypervisor, I recommended [VirtualBox](https://www.virtualbox.org/wiki/Downloads) in this instance and will walk through assuming so. The virtualbox app should then be present in your applications directory.

2. Install [Vagrant](https://www.vagrantup.com/downloads.html), check this is installed by running `$ vagrant -v` in your console window. This should print out the version number for the installed version of Vagrant, something like `$ vagrant x.y.z`.

3. Install PHP7. At the time of writing this, PHP requires manually updating on macOS to the latest version of PHP7. The easiest way to do this is via [php-osx.liip](https://php-osx.liip.ch/#install), not forgetting to also update your `PATH`! Check this is installed by running `$ php -v` in your console, this should print out the version number for the installed version of PHP in the same manner Vagrant did.

4. Install [Composer](https://getcomposer.org/) via brew `$ brew update` then `$ brew tap homebrew/homebrew-php` finally `$ brew install composer`. Check this is installed by running `$ composer -V` in your console, this should print out the version number for the installed version of Composer in the same manner Vagrant and PHP did.

5. Install [Node & NPM](https://nodejs.org/en/download/), via brew `$ brew update` then `$ brew install node`. Check this is installed by running `$ node -v` & `$ npm -v` in your console, this should print out the version number for the installed version of Node & NPM in the same manner Vagrant, PHP and Composer did

6. Install [Yarn](https://yarnpkg.com/en/), via brew `$ brew install yarn --without-node`. Check this is installed by running `$ yarn -v` in your console, this should print out the version number for the installed version of Yarn in the same manner Vagrant, PHP, Composer, Node & NPM did.

Consistency is nice.

### Installation
These are the requirements for the project specifically, installing project dependencies via composer & yarn, plus setting up Homestead for use with Vagrant.

You can also use the installation script in the root of the project directory:

```bash
$ cd /project/clone/dir && ./install.sh
```

You may need to make the script executable, the flag has been written to git, but incase it hasn't flagged the file, run the following and then try the above command again:

```bash
$ chmod +x /project/clone/dir/install.sh
```

... or the steps below can be followed:

0. Clone the project somewhere on your machine to work out of. I recommend somewhere easily accessible, `~/git/challenge`. `$ cd` into the project, wherever you cloned it, as all of the below will need to be executed from within it.

1. Run `$ composer install` to install the required project dependencies, this may take a while...

2. Run `$ yarn install` to install the required project dependencies, this again may take a while...

3. Run `$ php vendor/bin/homestead make` which will get a Homestead config file generated, filled with the contents of the example file, but it will work out the absolute project directory for you, which is nice!

4. Check that you have a key pair setup for Homestead, this defaults to `id_rsa`. To check this, `$ ls -la ~/.ssh` and see if the keys are present. If not `$ ssh-keygen -t rsa` will generate you the key pair - or you can modify the `homestead.yaml` config to use a different key pair.

5. You'll need to modify your hosts file to map `challenge.test` to the IP address specified in your `homestead.yaml` config, I recommend [GasMask](https://github.com/2ndalpha/gasmask) as an easy to use tool on macOS to quick edit and apply host file changes.

6. Now to create yourself a local env file, `$ cp .env.example .env`. You'll then need to run `$ php artisan key:generate` otherwise you'll just be staring at Laravel's default error screen!

Done!

## Development

Run `$ vagrant up`. The first time the box is used, it will download the source vagrant box which may take some time. After it's finished its boot and provision, you can navigate to `challenge.test` in your browser.

[Laravel Mix](https://laravel.com/docs/5.8/mix) powers client side asset development, run `$ yarn dev` to compile assets one off without minification or production rules, or run a watcher with `$ yarn watch` - although this doesn't always pickup sass changes.
