---
title: 'CINNAMON'
taxonomy:
    category:
        - blog
    tag:
	- linux
	- oss
	- mint
routable: true
visible: true
summary:
    enabled: '1'
    format: short
    delimiter: '==='
---

Cinnamon est un environnement de bureau de l'OS Linux Mint. Il est également disponible pour Ubuntu

C'est un fork de GNOME

===

### 1. Ajouter plusieurs bureaux

Pour ajouter des bureaux aux deux initialement prévus, appuyez sur les touches suivantes

```shell
ALT + CTRL + UP
```

Cliquez ensuite sur le bouton "+".



### 2. Monter un disque dur automatiquement au démarrage

+ Pour cela, ouvrir le fichier */etc/mtab* avec un éditeur de texte 
+ Monter le disque en double-cliquant dessus via l'interface graphique
+ Recopier la ligne qui vient d'être ajouter dans le précédent fichier.
+ Ouvrir le fichier */etc/fstab* avec les droits d'écriture.
+ Recopier la ligne et sauvegardé le fichier.
+ It' done :-)

### 3. Commandes utiles

```shell
# Gestion des services rapidement sans passer par /etc/init.d
sudo service #nom_du_service #action 
```