# IoT_http_host
Host for IoT_ESP8266 project

## index.php
* Return all ESP IDs, settings, and most recent inserts

## control.php
* Return ESP8266 settings with GET /control.php?chipid=123456

## data.php
* Insert chipid, cmd, and data to output table with GET /data.php?chipid=123456&cmd=analogReadA0&data=10 

#### TODO
* command.sh interval loop to read database, process data to inform action, respond to output: update ESP8266 settings, update status on index.php, send notification
