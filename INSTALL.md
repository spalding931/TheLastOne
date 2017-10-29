
## Installation

Ce projet utilise les techonologies NodeJs et ReactJs. Pensez à installer NodeJs (https://nodejs.org/en/). 

1 - Veuillez récupérer la répository en utilisant git avec cette commande : 
git clone https://github.com/spalding931/TheLastOne.git

2 - Il faut d'abord installer les dépendances ; donc positionnez-vous dans la racine du projet et effectuez à l'aide de votre terminal la commande suivante :
`npm install`

3 - Il reste juste à lancer la commande `npm start` qui va exécuter les scripts de compilation.

4 - Pour consulter le site, vous devrez vous dirigez vers : `localhost:3000` 

NB: Nous avons rencontrer un probleme de Cross Origin lors des requetes REST parce que l'url n'a pas le même domain que notre site et la solution est :
1. d'installer une extension sur le navigateur -> Nous recommandons l'extension CORS sur chrome 
2. supprimer les liens pardefaut et ajouter le lien : `http://food2fork.com/*`


