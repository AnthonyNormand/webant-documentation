---
title: 'Java 8'
taxonomy:
    category:
        - blog
    tag:
        - java
        - language
routable: true
visible: true
summary:
    enabled: '1'
    format: short
    delimiter: '==='
---

Enfin! Des changements importants pour JAVA! Tant de points attendus. Voici quelques unes des innovations de cette version.

===

### Informations

| Date de sortie |
| -------------- |
| 2014           |

### I. Les nouveautés

###### **Les Lambdas**

Les lambdas expressions permettent de simplifier l'écriture du code. 
!! Comment la JVM fait-elle pour s’y retrouver et savoir quelle méthode instancier ? La réponse tient en deux mots : interface fonctionnelle. Une interface fonctionnelle est une interface qui ne définit qu’une seule méthode.

Par exemple :

```java
button.addEventListener(new ActionListener() {
	public void actionPerformed(ActionEvent e) {
	  System.out.println("Click");
    }
});
```
devient :	

```java
button.addEventListener(e -> System.out.println("Click"));	
```

!! Par contre si on voulait que notre méthode soit un peu plus complexe, la syntaxe de la lambda s’alourdirait notamment avec l’usage du mot-clef *return* qui est facultatif dans le cas où la lambda ne contient qu’une seule opération. Par exemple on pourrait avoir :

```java
(a, b) -> {
   double res = a + b;
   System.out.println(res);
   return res;
}
```

___

Les références de méthodes sont aussi un truc sympa de Java 8 introduit par les lambdas.
Mettons qu’on ait un tableau de String dont la déclaration est comme suit :


```java
String[] myArray = {"one", "two", "three", "four"};
```

Il est parfaitement possible de le trier avec la notation suivante :


```java
Arrays.sort(myArray, String::compareToIgnoreCase);
```

​	
___	
​	
###### **Les Streams**

Les streams sont un ajout au framework Collections en Java 8. Ils permettent en particulier d’utiliser les systèmes de map/reduce sur ces collections. 

Un map/reduce se divise en deux étapes :

- Tout d’abord la phase de map, qui consiste à appliquer une ou plusieurs opérations à chaque élément de la collection.
- Ensuite la phase de reduce, qui est utilisée pour récupérer le résultat. Ce dernier peut être une collection, un objet, ou n’importe quoi d’autre.

L’avènement de ce type de programmation a eu lieu avec les processeurs multi-cores. Un exemple simple consiste par exemple à multiplier tous les éléments d’une liste par 5. En fonctionnement itératif simple, on bouclerait sur chaque élément de la liste, puis on multiplierait chacun des éléments par 5. En map/reduce, on peut par contre opérer de la manière suivante :

- Diviser la liste en autant de part qu’il y a de cores sur la machine
- Attribuer chaque sous-liste à un cores, qui multiplie par 5 chacun des éléments de sa sous-liste
- Enfin rassembler les listes calculées


Le gain de performances vient du fait que le temps de calcul est cette fois divisé par le nombre de cores sur la machine. Implémenter une telle division en itératif serait très complexe.
​	
___	
​	
###### **Les Stamped Lock**

Alternative aux ReadWriteLock pour les traitements multi-threadés, ce nouveau verrou est beaucoup plus rapide mais cependant plus compliqué à utiliser.

```java
long stamp = lock.tryOptimisticRead(); // non blocking path - super fast
work(); // we're hoping no writing will go on in the meanwhile
if (lock.validate(stamp)){
	   //success! no contention with a writer thread 
}
else {
	   //another thread must have acquired a write lock in the meanwhile, changing the stamp. 
	   //bummer - let's downgrade to a heavier read lock

		stamp = lock.readLock(); //this is a traditional blocking read lock 
		try {
				 //no writing happening now
				 work();

		}
		finally {
			lock.unlock(stamp); // release using the correlating stamp
		}
}
```

___

Arrays offre maintenant la possibilité d'effectuer des tris en parallèles pour accélerer ces derniers.

```java
Arrays.parallelSort(myArray);
```
___

Enfin! JodaTime fait maintenant parti du standard JAVA. Pas la peine d'expliquer l'intérêt ;)

___	
​	
###### **Les Références Optionnelles**

Il est possible que dans certains cas, une référence _null_ soit acceptable. Pour éviter les NullPointerException, un nouveau modéle a été ajouté :

```java
Optional<T>
```

Ce dernier ajoute plusieurs fonctions comme _isPresent_ qui vérifie que la valeur est non null


### II. Liens utiles

- [jobprod.com](http://jobprod.com/les-nouveautes-de-java-8/)
- [infog.com](https://www.infoq.com/fr/articles/Java-8-Quiet-Features)

- [Soat.developpez.com](http://soat.developpez.com/tutoriels/java/projet-lambda-java8/)