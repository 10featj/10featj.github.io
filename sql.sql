CREATE DATABASE jobsite 
CREATE TABLE USERS
(
user_id INT(6) AUtO_INCREMENT,
title varchar(5) NOT NULL,
FirstName varchar(50) NOT NULL,
LastName varchar(50) NOT NULL,
Email varchar(100) NOT NULL,
Password varchar(50) NOT NULL,
CurrentPosition varchar(100),
placeofeducation varchar(100),
ES_Result varchar(20),
Course_Subject varchar(50),
Course_lvl varchar(50),
Pref_section varchar(100),
Pref_location varchar(100),
Time_till_grad varchar(50),
linkedin_url varchar(255),
portfolio_url varchar(255),
Alegible_to_work_in_uk varchar(1),
terms_Codition varchar(1) NOT NULL,
signup_date varchar(50) NOT NULL,
account_progress varchar(3),
PRIMARY KEY (user_id)
)
ALTER TABLE users
ADD account_progress varchar(3);
ALTER TABLE users
ADD portfolio_url varchar(255);

insert into users (title,FirstName,LastName,Email,Password,signup_date) VALUES ('$title','$fn','$ln','$e','blah','blah')