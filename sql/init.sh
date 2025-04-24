#/bin/sh

mysql --host=0.0.0.0 --port=3306 --user=root --password=password test_db < ./create.sql
mysql --host=0.0.0.0 --port=3306 --user=root --password=password test_db < ./load.sql
