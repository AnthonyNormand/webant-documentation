---
title: Git
taxonomy:
    category:
        - blog
    tag:
        - git
routable: true
visible: true
summary:
    enabled: '1'
---

Après SVN, voici GIT un gestionnaire de versions simple et efficace.

===

# ![GIT](http://www.mimastech.com/wp-content/uploads/2016/10/git.png) GIT : Comment ca fonctionne?


### I. Présentation de Git

| Informations     |                                          |
| ---------------- | ---------------------------------------- |
| Créateur         | [Linus Torvalds](https://fr.wikipedia.org/wiki/Linus_Torvalds) |
| Première version | 7 Avril 2005                             |


!!! Git est un logiciel de gestion de versions décentralisé. C'est un logiciel libre et distribué selon les termes de la licence publique générale GNU version 2. En 2016, il s’agit du logiciel de gestion de versions le plus populaire qui est utilisé par plus de douze millions de personnes.

### II. Commandes utiles

```git
#Initialise un dépôt GIT (ajout de .git).
git init 
#Liste des modifications.
git status 
#Ajout l'élément XXX au contrôle de version.
git add 'XXX' 
#Ajout tous les éléments au contrôle de version.
git add -A 
#Commit vers le dépôt local avec le messsage associé.
git commit -m "message" 
#Affiche l'historique des commits. l'option '-p' regroupe par commit
git log -p 
#Ajout d'un dépôt distant. 
git remote add origin 'url' 
#Pousse les modifications sur le dépôt distant "origin" sur la branche par défaut "master".
git push -u origin master 
#Récupère les modifications sur le dépôt distant "origin" sur la branche par défaut "master".
git pull origin master 
#Liste les modifications par rapport au dernier commit.
git diff HEAD 
#Liste les modifications indexées.
git diff --staged 
#Annule les modifications sur XXX.
git reset 'XXX' 
#Revert du fichier XXX.
git checkout -- 'XXX' 
#Création d'une branche BBBB.
git branch 'BBBB' 
#Suppression de la branche BBBB.
git branch -d 'BBBB'
#Bascule sur la branche BBBB.
git checkout 'BBBB' 
#Supprime les fichiers et le status GIT associé.
git rm '*.txt' 
#Fusionne la branche BBBB sur la branche courante.
git merge 'BBBB' 
#Clone le dépôt.
git clone 'url'  
#Renomme un fichier. 
git mv 'origine' 'cible' 
#Comme le pull mais en gérant les conflits.
git fetch 'BBBB'_ 

```

Voici quelques commandes utiles pour la configuration :

```git
git config http.sslVerify false
git config --global user.name "John Doe"
git config --global user.email johndoe@example.com
```



### III. Ignorer certains fichiers	

le fichier **.gitignore** permet d'ajouter les patterns ignorés par GIT. Voici un exemple de fichier :

```git
# un commentaire, cette ligne est ignorée
# pas de fichier .a
*.a
# mais suivre lib.a malgré la règle précédente
!lib.a
# ignorer uniquement le fichier TODO à la racine du projet
/TODO
# ignorer tous les fichiers dans le répertoire build
build/
# ignorer doc/notes.txt, mais pas doc/server/arch.txt
doc/*.txt
# ignorer tous les fichiers .txt sous le répertoire doc/
doc/**/*.txt	
```

### IV. Configuration globale

Le fichier .gitconfig contient la configuration globale de GIT.

Par exemple, pour définir l'utilisateur globale :

```properties
[User]
	name=Anthony
    email=antho.normand@gmail.com
```



### V. GIT et SVN pourquoi pas?

Il est possible de faire fonctionner conjointement GIT et SVN.

```git
git svn clone <SVN URL REPO>
git svn rebase (égale à svn update)
git svn fetch
git svn dcommit (égale à svn commit)
git svn log
git svn create-ignore
```

*Référence [ici](https://git-scm.com/book/en/v1/Git-and-Other-Systems-Git-and-Subversion)*

### Tutorial

! Pour bien comprendre les commandes GIT, utiliser le tutorial [TryGIT](https://try.github.io)



