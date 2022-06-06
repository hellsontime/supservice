CREATE DATABASE IF NOT EXISTS db_supservice;

GRANT ALL PRIVILEGES ON db_supservice.* TO 'supservice-admin'@'%' IDENTIFIED BY 'password';
