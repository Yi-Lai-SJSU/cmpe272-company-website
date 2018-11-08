# cmpe272-company-website

mysql> show tables;
+---------------+
| Tables_in_php |
+---------------+
| user          |
+---------------+
1 row in set (0.00 sec)

mysql> desc user;
+----------+-------------+------+-----+---------+----------------+
| Field    | Type        | Null | Key | Default | Extra          |
+----------+-------------+------+-----+---------+----------------+
| id       | int(10)     | NO   | PRI | NULL    | auto_increment |
| username | varchar(30) | YES  |     | NULL    |                |
| password | varchar(40) | YES  |     | NULL    |                |
+----------+-------------+------+-----+---------+----------------+
3 rows in set (0.00 sec)

mysql> select * from user;
+----+----------+----------+
| id | username | password |
+----+----------+----------+
|  1 | yilai    | 12345678 |
+----+----------+----------+
1 row in set (0.00 sec)

-----------------------------------------------------------------------------------------------------------------------------------------
When a new customer registered, her/his info will record in the DB and then be used when he/she login in. 
mysql> select * from user;
+----+----------+----------+
| id | username | password |
+----+----------+----------+
|  1 | yilai    | 12345678 |
|  2 | xiaoxiao | 2345678  |
+----+----------+----------+
2 rows in set (0.00 sec)

mysql> 
