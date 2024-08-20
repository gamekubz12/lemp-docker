# LEMP stack on Docker Container
### I have configurate LEMP Stack Container by define Virtual Host in 2 Networks.
    1. Network 1 "webproxy"     for Reverse Proxy Container
    2. Network 2 "web_network"  for LEMP Stack Container

![alt text](./lemp-architect.png)

### In this diagram Nginx Web Server is Intermediary between Reverse Proxy and PHP Container,<br> Then I have configurate phpMyAdmin in this stack for easy to access Database.
