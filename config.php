<?php
		//connect to the server
		$connect = mysqli_connect("localhost","root","","futsal_db") or die ("Unable to connect to MySQL Sever.");
		
		//create the database if it does not exists & login ito it
		$dbstart = "futsal_db;";
		$connect->query($dbstart);
		mysqli_select_db($connect , "futsal_db");
			/*	create table if it does not exists
		*/
		$que = "futsal_db `register` ( `id` INT(10) NOT NULL AUTO_INCREMENT , 
														`fname` VARCHAR(50) NOT NULL , 
														`lname` VARCHAR(50) NOT NULL , 
														`gender` ENUM('male','female','other') NOT NULL , 
														`address` VARCHAR(50) NOT NULL , 
														`email` VARCHAR(50) NOT NULL , 
														`contact` VARCHAR(50) NOT NULL , 
														`password` VARCHAR(50) NOT NULL , 
														PRIMARY KEY (`id`)) ENGINE = InnoDB;";
		$connect->query($que);
		
		$que = "futsal_db `booking` ( 	`id` INT(10) NOT NULL AUTO_INCREMENT , 
														`user` VARCHAR(10) NOT NULL , 
														`bookday` DATE NOT NULL , 
														`shift` VARCHAR(10) NOT NULL , 
														`contact` VARCHAR(15), 
														`email` VARCHAR(30),
														`timecheck` INT(30), 
														`confirm_key` INT(5), 
														`vno` INT(20),
														`vimgloc` VARCHAR(50),
														PRIMARY KEY (`id`)) ENGINE = InnoDB;";
		$connect->query($que);

		$que = "futsal_db `team_reg`(	 `sn` INT(5) NOT NULL AUTO_INCREMENT,
														 `team_name` VARCHAR(100) NOT NULL ,
														 PRIMARY KEY (`sn`)) ENGINE = InnoDB;";
		$connect->query($que);

		/*$que = "INSERT INTO register  (`id`,`fname`,`lname`,`gender`,`address`,`email`,`contact`,`password`)
							VALUES   (NULL,'admin','admin','male','bkt','admin','1234567890','admin')";
		$connect->query($que); */

?>