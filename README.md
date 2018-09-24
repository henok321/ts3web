# ts3web

Dockerize Psychokiller's Webinterface 

## Run docker 
```
docker run -d -p 8080:80 henok321/ts3bot
```

## Environment variables 

| Name | Default value | Description |
| ---- | ------------- | ----------- |
| ALIAS | Local TeamSpeak Server | Server alias |
| HOST | ts3 | IP or hostname |
| POST | 10011 | server query port |
| LANG | en | default language |

### Example
```
docker run -d -p 8080:80 -e LANG=de -e HOST=localhost henok321/ts3bot
```

## docker-compose

```
version: '3.1'

services:
  ts3:
    image: teamspeak:latest
    volumes:
      - ./data:/var/ts3server
    ports:
      - 10011:10011
      - 30033:30033
      - 9987:9987/udp
    restart: always
    environment:
      TS3SERVER_LICENSE: accept
  web:
    image: henok321/ts3web:latest
    restart: always
    environment:
        - LANG : de
    ports:
      - 8080:80 
```

