database name : task3db
table 1 : create table userslist ( 
           username varchar(50) not null ,
           password varchar(50) not null,
           primary key (username) ) ;
table 2 :  create table snippetlist ( 
           snippetno int not null auto_increment ,
           snippet varchar(10000) not null ,
           primary key (snippetno) ,
           foreign key userslist(username) ) ;           
