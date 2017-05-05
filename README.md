# test_mongodb
test - mongodb 3.2 with php 5.6

----
----

## 32 bit issue
if you are facing 32bit issue

create folder : 
- c:\mongodb\data\db 
- c:\mongodb\logs\

then run this as administrator : 

- mongod --remove
- mongod --logpath c:\mongodb\logs\mongo.log --dbpath c:\mongodb\data\db --directoryperdb --install
- mongod --storageEngine=mmapv1 --dbpath c:\mongodb\data\db

more : 
- [cannot-start-mongodb-as-a-service](http://stackoverflow.com/questions/4661670/cannot-start-mongodb-as-a-service/4663101#4663101).
- [mongodb-cannot-start-server-the-default-storage-engine-wiredtiger-is-not-avai](http://stackoverflow.com/questions/34243731/mongodb-cannot-start-server-the-default-storage-engine-wiredtiger-is-not-avai/34258439#34258439).

----
----

## this mongodb : 

# Current Stable Release (3.2) (mongodb-win32-i386-v3.2-latest) (32bit)
	05/03/2017 17:24:50 (MM/DD/YYYY)
	142112534 kb
	tested on 05/04/2017
	- Windows 10 - 32 bit OS

# official :
- 32bit - https://www.mongodb.org/dl/win32/i386
- 64bit - https://www.mongodb.org/dl/win32/

# mongodb php driver : 
(check phpinfo for version)
- https://s3.amazonaws.com/drivers.mongodb.org/php/index.html
- https://pecl.php.net/package/mongodb
* put in : 
- C:\xampp\php\ext	
* edit php.ini : 
- extension=php_mongo-1.6.8-5.6-vc11.dll

# current viewer : 
- phpmoadmin/index

----

# ref : 
- [cara-install-mongodb-di-windows](http://www.candra.web.id/cara-install-mongodb-di-windows/)
- [cara-install-mongodb-os-windows](https://belajarphp.net/cara-install-mongodb-os-windows/)
- [konfigurasi-php-agar-support-mongodb](http://www.candra.web.id/konfigurasi-php-agar-support-mongodb/)
- [cannot-start-mongodb-as-a-service](http://stackoverflow.com/questions/4661670/cannot-start-mongodb-as-a-service/4663101#4663101)
- [mongodb-cannot-start-server-the-default-storage-engine-wiredtiger-is-not-avai](http://stackoverflow.com/questions/34243731/mongodb-cannot-start-server-the-default-storage-engine-wiredtiger-is-not-avai/34258439#34258439)

5/5/2017
#KingGeneral