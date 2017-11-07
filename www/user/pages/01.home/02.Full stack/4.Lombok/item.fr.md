---
title: 'Lombok'
taxonomy:
    category:
        - blog
    tag:
        - java
        - framework
routable: true
visible: true
---

Lombok

===

```java
@Getters
@Setters
/* Génération automatique des Getters et des Setters pour les attributs de la classe */
public class A {
  ...
}

public class B {
  	@Getter
	@Setter
  	/* Génération des getters et des setters */
	private String attribut;
}

@EqualsAndHashCode
@ToString
/* Génération automatique des méthodes Equals et Hashcode */
public class B {
  ...
}


@Data
/* Génération automatique des méthodes Equals et Hashcode, Getters, Setters et ToString */
public class C {
  private String attribut
}

@SneakyThrows
/*Remontée des exceptions sans Try/Catch*/
private String test(){...}

@Log
public class LogExample {
 	/* Ajoute private static final java.util.logging.Logger log = java.util.logging.Logger.getLogger(LogExample.class.getName());*/ 
}
```



### 1. Références et bien d'autres choses :

[Toutes les annotations ici](https://projectlombok.org/features/all)



