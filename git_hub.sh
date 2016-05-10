#!/bin/bash
# Indique au système que l'argument qui suit est le programme utilisé pour exécuter ce fichier
# En règle générale, les "#" servent à mettre en commentaire le texte qui suit comme ici
echo Mise en ligne du Projet_PRS

git init
git add *
git add LICENSE
git commit -m "Mise à jour du projet"
git remote add origin https://github.com/alicialbt/Projet-WEB
git checkout branchJean
git remote -v
git push origin master
 
exit 0
