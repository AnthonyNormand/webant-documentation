---
title: 'Apache2'
taxonomy:
    category:
        - blog
    tag:
	- serveur
	- PHP
routable: true
visible: true
summary:
    enabled: '1'
    format: short
    delimiter: '==='
---

Apache 2 est un serveur HTTP. 

### 1. Commandes utiles

```apacheconf
#Activer un module nommé xxxx (les modules sont disponibles dans /etc/apache2/mods-available)
a2enmod xxxx
#Désactive un module
a2dismod xxxx
#Active un site nommé xxxx (les sites disponibles sont dans /etc/apache2/sites-available)
a2ensite xxxx
#Désactive un site
a2dissite xxxx
```

