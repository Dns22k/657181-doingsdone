
CREATE DATABASE IF NOT EXISTS bd_dela;
USE bd_dela;
--
CREATE TABLE IF NOT EXISTS Projects (
 id INT AUTO_INCREMENT,
 name_project varchar(128),
 user_id INT,
 PRIMARY KEY (id)
 )DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS Tasks (
 id INT AUTO_INCREMENT,
 date_create DATETIME, 
 date_done DATETIME,
 date_alarm DATETIME,
 name_task varchar(128),
 file_path varchar(128),
 project_id INT,
 user_id INT,
  PRIMARY KEY (id)
)DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS Users (
 id INT AUTO_INCREMENT,
 date_reg DATETIME,
 email varchar(64),
 name varchar(64),
 passwd varchar(64),
 contacts char(255),
 PRIMARY KEY (id)
)DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
CREATE INDEX user_id_project on Projects(user_id);
CREATE INDEX project_id_tasks on Tasks(project_id);
CREATE INDEX user_id_tasks on Tasks(user_id);
CREATE INDEX users_name_users on Users(name);
CREATE INDEX users_email_users on Users(email);


