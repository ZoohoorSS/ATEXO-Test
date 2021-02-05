# Cards Game
Enoncé:
On souhaite développer un jeu de carte. 
Dans ce jeu, un joueur tire une main de 10 cartes tirées de manière aléatoire.
Chaque carte possède une couleur ("Carreaux", par exemple) et une valeur ("10", par exemple).
On vous demande de présenter la main "non triée" à l'écran puis la main triée. C'est-à-dire que vous devez classer les cartes par couleur et valeur.
L'ordre des couleurs est, par exemple, le suivant :
 --> Carreaux, Coeur, Pique, Trèfle
L'ordre des valeurs est, par exemple, le suivant :
 --> AS, 2, 3, 4, 5, 6, 7, 8, 9, 10, Valet, Dame, Roi
 
# NB: Le principe du jeu se base sur l'hypothèse que le nombre de cartes est infini et que l'ordre des couleur est final (Carreaux, Coeur, Pique, Trèfle)

# Les étapes à suivre :
1- Cloner le projet
2- Lancer la commande : composer install

# Tests Unitaires
L'execution des tests unitaires se fait par la commande :
```
.\vendor\bin\phpunit.bat tests\GameTest.php
```

# Sortie Console
L'exécution du fichier console_output.php qui se trouve dans le dossier src/scripts.
```
php console_output.php
```

# Interface graphique
Le fichier src/scripts/index.php permet d'avoir une interface graphique du jeux.

# Note : 
Le dossier screenshots contient des aperçus des différents tests.

