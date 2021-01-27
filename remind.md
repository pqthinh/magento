### tech
docker
mysql | mariadb (10.4 | 8.)
composer
nginx
php 7.4
magento 2.4

### command create admin
`sudo bin/magento admin:user:create --admin-user=admin --admin-password=admin@123 --admin-email=18021231@vnu.edu.vn --admin-firstname=Pham --admin-lastname=Quang`

### create sample data
`sudo bin/magento sampledata:deploy`
after
`bin/magento setup:upgrade`

### referent

1:  https://github.com/markshust/docker-magento
2:  https://github.com/magento/magento2-sample-data
3:
    + https://devdocs.magento.com/guides/v2.4/install-gde/install/sample-data-after-composer.html

    + https://devdocs.magento.com/guides/v2.4/install-gde/install/sample-data-after-clone.html


deploy data:
https://devdocs.magento.com/guides/v2.4/install-gde/prereq/connect-auth.html

4: install docker, composer, magento2

### product

`https://magento2.test/`

admin
`https://magento2.test/admin`

### run

``` bash
sudo bin/setup magento2.test
open https://magento2.test/```