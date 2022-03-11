create database login;

use login;

CREATE TABLE `login`.`login` (
  `usuario` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NULL,
  PRIMARY KEY (`usuario`));
  
  insert into login values('Fernando','fer123');
  
  select * from login;