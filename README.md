# Flight Skeleton
This project is a POC to demonstrate the viability of installing the [Flight php framework](http://flightphp.com/) alongside an existing set of tools without interfering with those tools.

In this example, the `/admin` and `/tool1` folders represent existing web content. `/tool1` and `/admin/tool3` contain static HTML content, while `admin/tool2` contains Flight-controlled content.

The plan is that each individual Flight-controlled folder will only need to contain two files: `.htaccess` (potentially identical for each folder) and `index.php`, which will bootstrap the Flight app and define the routes.

All other content used by the Flight instance resides in the `/flightapps` folder, including controllers and views. Ideally this content should reside in a folder outside the webroot, but when introducing Flight into a pre-existing environment, this may not be feasible or even possible.

# Installation
The minimum directory structure needed to drive this POC is as follows:

```
path/to/install
├── flightapps
|   ├── Controllers
|   ├── Views
|   └── bootstrap.php
├── vendor
|   ├── composer
|   ├── mikecao
|   └── autoload.php
├── composer.json
├── composer.lock
├── LICENSE
└── README.md
```

Additionally, the following demo files are installed and can be removed:

```
path/to/install
├── admin
|   ├── tool2
|   |   └── index.html
|   └── tool3
|       ├── .htaccess
|       └── index.php
├── flightapps
|   ├── Controllers
|   |   └── Tool2
|   |       └── BaseController.php
|   └── Views
|       └── template.php
└── tool1
    └── index.html
```

To install, clone this repo into `path/to/install` and run `composer install`.

For each new Flight-controlled folder, you will need at least two files: `.htaccess` and `index.php`. These files can be copied from the example `/admin/tool2` folder and modified as needed. (**Note:** the `index.php` file will need to be modified to ensure that it is correctly referencing the `/flightapps/bootstrap.php` path relative to where the `index.php` file is located.) Under this scheme, individual Flight-controlled folders can have unlimited independent routing within the folder, but they will share a single repository for controllers and views, allowing them to interact with each other and share common resources.

# License
This project is licensed under the [MIT License](http://www.opensource.org/licenses/mit-license.php).