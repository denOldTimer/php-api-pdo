CREATE TABLE movies(
  id int NOT NULL AUTO_INCREMENT,
  title varchar(255) NOT NULL,
  storyline text,
  lang varchar(100),
  genre varchar(255),
  release_date varchar(100),
  box_office float,
  runtime varchar(100),
  stars float(4,2),
  PRIMARY KEY (id)
);