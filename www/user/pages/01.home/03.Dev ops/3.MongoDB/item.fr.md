---
title: 'MongoDB'
taxonomy:
    category:
        - blog
    tag:
	- Database
	- NoSQL
routable: true
visible: true
---

MongoDB est une base de données Open-source. Base de données dites *NoSQL* , elle utilise le format JSON pour définir les schémas SQL dans des fichiers.

===

### 1. Installation 

Pour l'installation, selon la version cela évolue. Se reporter à cette URL : [MongoDB](https://docs.mongodb.com/manual/tutorial/install-mongodb-on-ubuntu/)



### 2. Action  Mongo

Pour la gestion du service, les commandes habituelles :

```shell
sudo service mongod start/stop/restart
```

###3. Modifier la configuration

La configuration de MongoDB est centralisée dans le fichier /etc/mongod.conf

###4 . A documenter proprement

Le shell est accessible via la commande

```shell
mongodb
```

Sinon l'utilisation d'une GUI comme *MongoDB-Compass*.

