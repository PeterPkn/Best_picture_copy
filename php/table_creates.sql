/*
CREATE USER 'bestpicture'@'localhost' IDENTIFIED VIA mysql_native_password USING '***';
CREATE DATABASE IF NOT EXISTS `bestpicture`;
GRANT ALL PRIVILEGES ON `bestpicture`.* TO 'bestpicture'@'localhost';
*/

create database if not exists bestpicture;

use bestpicture;

drop table if exists comment;
drop table if exists entry_rating;
drop table if exists contest_entry;
drop table if exists contest;
drop table if exists photo;
drop table if exists user;

create table user (
                      user_id int primary key auto_increment,
                      email text,
                      password_hash text,
                      vorname text,
                      nachname text,
                      profilepicture_id int default null,
                      description text,
                      is_admin boolean default false
);

create table photo (
                       photo_id int primary key auto_increment,
                       user_id int,
                       path text,
                       title text,
                       description text,
                       approved_by_admins boolean default false,
                       date timestamp default current_timestamp(),
                       foreign key (user_id) references user(user_id) on delete set null
);

ALTER TABLE user
    ADD CONSTRAINT fk_profilepic foreign key (profilepicture_id) references photo(photo_id) on delete set null;

create table contest (
                         contest_id int primary key auto_increment,
                         start timestamp default current_timestamp(),
                         end timestamp null,
                         name text default null,
                         winner_entry_id int default null
);

create table contest_entry (
                               entry_id int primary key auto_increment,
                               photo_id int,
                               contest_id int,
                               foreign key (contest_id) references contest(contest_id) on delete set null,
                               foreign key (photo_id) references photo(photo_id) on delete set null
);

ALTER TABLE contest
    ADD CONSTRAINT fk_winner_entry foreign key (winner_entry_id) references contest_entry(entry_id) on delete set null;

create table entry_rating (
                              entryrating_id int primary key auto_increment,
                              photo_id int,
                              user_rated int,
                              foreign key (photo_id) references photo(photo_id) on delete set null,
                              foreign key (user_rated) references user(user_id) on delete set null
);

create table comment (
                         comment_id int primary key auto_increment,
                         photo_id int,
                         user_id int,
                         text text,
                         foreign key (photo_id) references photo(photo_id) on delete set null,
                         foreign key (user_id) references user(user_id) on delete set null
);