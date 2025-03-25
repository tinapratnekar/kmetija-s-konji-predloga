# NAVODILA ZA UPORABO PREDLOGE DOCKER
ZA delovanje sledečega boste potrebovali nameščeno zadnjo različico Docker Desktop, ki jo najdete na sledeči povezavi:
- [Windows 10 ali 11](https://desktop.docker.com/win/main/amd64/Docker%20Desktop%20Installer.exe?utm_source=docker&utm_medium=webreferral&utm_campaign=dd-smartbutton&utm_location=module)
- [MacOS - Apple Silicon čip](https://desktop.docker.com/mac/main/arm64/Docker.dmg?utm_source=docker&utm_medium=webreferral&utm_campaign=dd-smartbutton&utm_location=module)
- [MacOS - Intel čip](https://desktop.docker.com/mac/main/amd64/Docker.dmg?utm_source=docker&utm_medium=webreferral&utm_campaign=dd-smartbutton&utm_location=module)
- [Linux](https://docs.docker.com/desktop/setup/install/linux/)
>  Linux omogoča namestitev preko konzole, slednja navodila so za Ubuntu sistem:
>
> sudo apt-get update
> sudo apt install docker
>
>Edino bodite pozorni, da vsak Docker ukaz pričnete s **sudo**, saj deluje samo z ukazi na *root-u*. Vašega uporabnika lahko dodate kot člana skupine Docker, kar je razloženo na [Dockerdocs](https://docs.docker.com/engine/install/linux-postinstall/).

## DOCKER COMPOSE
Datoteka *docker-compose.yml* ima definirane parametre za strežniško arhitekturo, PHP okolje in MySQL. Različice so večinoma najnovejše.

### ZAGON
Z vzpostavljenim Github Desktop *povilicajte* (fork) projektno mapo in definirajte željeno mesto.
**POZOR!** Ko je projektno mesto enkrat definirano, tiste mape več ***NE PREMIKAJTE!***