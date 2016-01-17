
drop table if exists movies2014;

create table movies2014 (
	ID int NOT NULL AUTO_INCREMENT,
    title varchar(128),
    released varchar(128),
    distributer varchar(128),
    genre varchar(128),
    rating varchar(64),
    gross varchar(128),
    tickets varchar(128),
    imdb_id varchar(128),
    notes text,
    
    primary key(ID)
);
