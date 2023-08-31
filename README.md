# IoT_http_host
Host for IoT_ESP8266 project

## control.php
### GET request returns string of settings for ESP ID /control.php?chipid=123456
## data.php
### GET request inserts to output table : /data.php?chipid=123456&cmd=analogReadA0&data=10 

#### TODO
index.php
dashboard to return all ESP IDs, settings, and most recent inserts

command.sh 
interval loop to read database and respond to output, updating control.php commands, sending message or updating statuses on index.php
