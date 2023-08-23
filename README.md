# Training Electronic-Games-Club-Drupal Website



<img alt="Drupal Logo" src="https://www.drupal.org/files/Wordmark_blue_RGB.png" height="60px">

Drupal is an open source content management platform supporting a variety of
websites ranging from personal weblogs to large community-driven websites. For
more information, visit the Drupal website, [Drupal.org][Drupal.org], and join
the [Drupal community][Drupal community].

## Contributing

Drupal is developed on [Drupal.org][Drupal.org], the home of the international
Drupal community since 2001!

[Drupal.org][Drupal.org] hosts Drupal's [GitLab repository][GitLab repository],
its [issue queue][issue queue], and its [documentation][documentation]. Before
you start working on code, be sure to search the [issue queue][issue queue] and
create an issue if your aren't able to find an existing issue.

Every issue on Drupal.org automatically creates a new community-accessible fork
that you can contribute to. Learn more about the code contribution process on
the [Issue forks & merge requests page][issue forks].

## Usage

You can quickly extend Drupal's core feature set by installing any of its
[thousands of free and open source modules][modules]. With Drupal and its
module ecosystem, you can often build most or all of what your project needs
before writing a single line of code.

## Changelog

Drupal keeps detailed [change records][changelog]. You can search Drupal's
changes for a record of every notable breaking change and new feature since
2011.

## Drupal requires:
- This project Drupal 9.5.9
- A web server with PHP support, for example:
  - Apache 2.4.54.2  (http://httpd.apache.org/).
- PHP 8.1.13 (or greater) (http://php.net/).
  
 database:
  - MySQL 8.0.31 (or greater) (http://www.mysql.com/).
  - MariaDB 10.10.2  (https://mariadb.org/).

For more detailed information about Drupal requirements, including a list of
PHP extensions and configurations that are required, see "System requirements"
(https://www.drupal.org/requirements) in the Drupal.org online documentation.

For detailed information on how to configure a test server environment using a
variety of operating systems and web servers, see "Local server setup"
(https://www.drupal.org/node/157602) in the Drupal.org online documentation.

Note that all directories mentioned in this document are always relative to the
directory of your Drupal installation, and commands are meant to be run from
this directory (except for the initial commands that create that directory).

## Create MySQL Database

 In the following examples, 'username' is an example MySQL user
which has the CREATE and GRANT privileges. Use the appropriate user name for
your system.

First, you must create a new database for your Drupal site (here, 'databasename'
is the name of the new database):

  mysqladmin -u username -p create databasename

MySQL will prompt for the 'username' database password and then create the
initial database files. Next you must log in and set the access database rights:

  mysql -u username -p

Again, you will be asked for the 'username' database password. At the MySQL
prompt, enter the following command:

  GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, INDEX, ALTER,
  CREATE TEMPORARY TABLES ON databasename.*
  TO 'username'@'localhost' IDENTIFIED BY 'password';

where:

 'databasename' is the name of your database
 'username' is the username of your MySQL account
 'localhost' is the web server host where Drupal is installed
 'password' is the password required for that username

If successful, MySQL will reply with:

  Query OK, 0 rows affected

If the InnoDB storage engine is available, it will be used for all database
tables. InnoDB provides features over MyISAM such as transaction support,
row-level locks, and consistent non-locking reads.



## Get Started

git clone (url)

cd Training

git fetch && git checkout 

create database <DB_NAME>

user: <DB_USER>
password: <DB_PASSWD>

composer install

cp ../default/settings.php ./

create file settings.local.php

copy DB settings from settings.php to settings.local.php



## Security

For a list of security announcements, see the [Security advisories
page][Security advisories] 

For information about the Drupal security process, or to find out how to report
a potential security issue to the Drupal security team, see the [Security team
page][security team].

## Need a helping hand?

Visit the [Support page][support] or browse [over a thousand Drupal
providers][service providers] offering design, strategy, development, and
hosting services.

## Legal matters

Learn about the [Drupal trademark and logo policy here][trademark].

[Drupal.org]: https://www.drupal.org
[Drupal community]: https://www.drupal.org/community
[GitLab repository]: https://git.drupalcode.org/project/drupal
[issue queue]: https://www.drupal.org/project/issues/drupal
[issue forks]: https://www.drupal.org/drupalorg/docs/gitlab-integration/issue-forks-merge-requests
[documentation]: https://www.drupal.org/documentation
[changelog]: https://www.drupal.org/list-changes/drupal
[modules]: https://www.drupal.org/project/project_module
[security advisories]: https://www.drupal.org/security
[security RSS]: https://www.drupal.org/security/rss.xml
[security team]: https://www.drupal.org/drupal-security-team
[service providers]: https://www.drupal.org/drupal-services
[support]: https://www.drupal.org/support
[trademark]: https://www.drupal.com/trademark
