load data LOCAL infile 'data/movies-2014.csv'
INTO TABLE moviesTable2014
FIELDS TERMINATED BY ','
optionally enclosed by '"'
Ignore 1 lines
(title, released, distributer, genre, rating, gross, tickets, imdb_id)
