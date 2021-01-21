# Game-Catalog

This so far is my respoonse to the assignemnt. 
I was able to make a few hundred thousand records of gameplay, and was only able to 
create atleast upto 1000 gameplays per day after the first year of the first set of games
(those with version beginning from 2010) due to the fact that in trying to achieve the 1500 games per day benchmark,
my laptop almost crashed, and I was also trying to make the data as realistic as possible, creating a few hundredd of 
gameplays per day at the initial launch of the game catalog.(since the number of gamers will only increase with time).


As for deployement, I was able to deploy the application on a subdomain service within my disposal. 
The links to the APIs are as follows.

1. For a list of all the games.
https://projects.erlimited.com.ng/APIs/gamelist.php

2. To return a the players, their games and gamplays.
https://projects.erlimited.com.ng/APIs/player-data1.php

3. For a list of all games played per day and their players.
https://projects.erlimited.com.ng/APIs/gameplay1.php

4. For a list of all games played within a particular date range.
https://projects.erlimited.com.ng/APIs/gameplay2.php

5. For a list of the TOP 100 gamers per month.
https://projects.erlimited.com.ng/APIs/player-data2.php

NOTE: For some reason, my hosting service is having some challenge rendering my JSON data 
      as the "gameplays" table I created was too large as some of the stored data was lost
      on upload. Still some some JSON data for other demanding APIs were able to render
      meaningful amount of JSON data.
      (This is evident for those APIs rendering a heavy amount of data.)
