---
title: 'Java 7'
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

Quoi de neuf pour Java 7? Qu'apporte cette nouvelle version par rapport à la 6?
Opérateur Diamand, switch de string, etc. Voici tout ce qu'il faut savoir.

===

### Informations

| Date de sortie |
| -------------- |
| 2011           |



### I. Les nouveautés de JAVA 7.0

Les switchs sur les strings : 

```java
public static void main(String args[]) {
 	switch (args[0]) {
 		case "start":
 			MyApplication.start();
 			break;
 		case "stop":
 			MyApplication.stop();
 			break;
 		default:
 			System.err.println("Custom error message ...");
 			break;
 	}
}
```

L'interface Future permet d'effectuer des traitements asynchrones (cf [Les Liens Utiles](#liens))
​	
La possibilité d'utiliser des catchs multiples :

```java
try {
	...
} catch (IllegalStateException | SQLException e) {
	throw new RuntimeException(e);
}
```

La propagation des sous types des exceptions. Par exemple, catpure une *Exception* et throws une *SQLException*	:

```java
private void traitement() throws SQLException, IOException {
	...
}

public void toto() throws SQLException, IOException {
	try {
		taitement();
	} catch (Exception e) {
		//TODO ...
		throw e;
	}
}
```

Les opérateurs *diamond*, pas la peine de répéter les types :

```java
private List<String> list = new ArrayList<>();
```

L’instruction “try-with-resource” de Java 7 permet de gérer automatiquement la fermeture des ressources (readers, writers, sockets, connexions …). Adieu le bloc “finally” et surtout adieu les bugs liés aux oublis d’appels de la méthode “close()” :

```java
public static void main(String args[]) {</span>
	String filepath = "src/demo/trywithresource/mytext.txt";

	try (BufferedReader reader = new BufferedReader(new FileReader(filepath))) {
		String line = reader.readLine();
		while (line != null) {
			System.out.println(line);
			line = reader.readLine();
		}
	} catch (IOException e) {
		System.err.println("Erreur : " + e.getMessage());
	}
}
```
!! le “try-with-resource” fonctionne avec les classes implémentant l’interface “java.lang.AutoClosable”.






​	
### II. Lien utiles <a id="liens"></a>

- [http://blog.sebprunier.com/](http://blog.sebprunier.com/code/java-7-les-nouveautes-dans-le-langage/)

- [Future interface](https://docs.oracle.com/javase/7/docs/api/java/util/concurrent/Future.html)



