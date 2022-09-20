# PHP | Build a Complete API
## Learn How to Create APIs in PHP
Udemy Course created by [Mustafa Alawi](https://www.udemy.com/course/create-apis-in-php/#instructor-1)  
Udemy Course [Link](https://www.udemy.com/course/create-apis-in-php/)  
Udemy Course Last updated 7/2021  
Udemy Course Ratings 4.8


## Docker-Compose
I recreated the run-time environment to Docker-Compose
So you'll find the docker files within the git.
Beware you need Docker & Docker-Compose up and running to use this git.

## PDO Version
The original uses Msqli and I like PDO so I started converting the course to PDO.

## Author
I'm the ["denOldTimer"](https://github.com/denOldTimer) from [ScropioCoding.com](https://scorpiocoding.com) and I'm a self-taught full-stack developer.  
I started this course to learn more about API without the complexities of say Laravel or Symphony.  
Also I'm in the middle of creating my new personal website and I want to do it with my small PHP-API back-end and ReactJs front-end, which is my next challenge.   
If any questions just let me know via github.


## HOW TO USE

1. The rules of docker-compose

2. localhost -> runs the index.php

3. localhost:81 -> runs phpmyadmin 
      server => db
      user => root
      passw => r00tadmin

      Import sql scripts from the mysql folder

4. Run the varia of tests



## RESPONSE CODES
200 (ok)
201 (created)
204 (no content)
301 (moved permanently)
400 (bad request)
401 (unauthorized)
404 (not found)
500 (internal server error)


## DOCUMENTATION

1. Get All Movies
---
/movie_read_all.php
Request-type: GET
Expected Response format -> json_encode

2. Get Movie by Id
---
/movie_read_by_id.php?id=5
Request-type: GET
Expected Response format -> json_encode

3. Get Movie by Title
---
/movie_read_by_tile.php?title=Joker
Request-type: GET
Expected Response format -> json_encode

4. Create Movie By Title
---
/movie_create_by_title.php
Request-type: POST
Required-parameters: title

5. Update Movie By Id
---
/movie_update_by_id.php
Request-type: POST
Required-parameters: id,title

6. Delete Movie By Id
---
/movie_delete_by_id.php
Request-type: POST
Required-parameters: id

