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
create table saved_jobs(
S_ID int NOT NULL AUTO_INCREMENT,
email varchar(150),
saved_job varchar(3),
PRIMARY KEY (S_ID)
);
create table posts(
P_ID int NOT NULL AUTO_INCREMENT,
post_type varchar(50),
job_title varchar(255),
salary varchar(5),
hours varchar(20),
details varchar(10000),
recruiters varchar(255),
time_date_start varchar(50),
time_date_end varchar(50),
location varchar(200),
PRIMARY key (P_ID)
);

company




insert into posts (post_type,job_title,salary,hours,details,recruiters,time_date_start,time_date_end,location) VALUES ('part_time','software dev','20000','Full-time','dets','recruiters three','23-23-32','23323','Manchester')
insert into users (title,FirstName,LastName,Email,Password,signup_date) VALUES ('$title','$fn','$ln','$e','blah','blah')