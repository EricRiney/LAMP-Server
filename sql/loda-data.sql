load data infile '~/Downloads/movies-2014.csv'
INTO TABLE movies2014
FIELDS TERMINATED BY ','
optionally enclosed by '"'
(title, released, distributer, genre, rating, gross, tickets, imdb_id)

