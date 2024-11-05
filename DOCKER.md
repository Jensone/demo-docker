# Prise en main de Docker

Docker est devenu un incontournable dnas le domaine de la tech et précisément du développement et déploiement continu d'applications.

## Comment ?

Plusieurs options s'offre à nous :

| Interface | Type | Usage |
|:---       |:---  |:---   |
| Docker Desktop | GUI | Travail en local |
| Docker CLI | CLI | Travail en local ou distant |
| DockerHub | Cloud | Travail en local ou distant |

La liste des commandes de bases sont :

`docker --help` : Afficher le manuel d'utilisation

`docker login` : Connexion à son compte DockerHub

`docker pull <nom:tag>` : Télécharge une image depuis le Hub.

`docker image build -t <nom:tag> origin` : Création d'une image Docker

Pour pousser une image sur le hub docker (cloud), il faut mettre à jour le tag de notre image comme suit :

`docker tag <nom:tag> docker.io/<username>/<nom:tag>`

Ensuite, si vous ête correctement connecté(e) à votre compte sur hub.docker.com depuis votre terminal. Il suffit de lancer la commande pour pousser votre image :

`docker push <nom:tag>`

`docker images` : Permet de lister les images sur notre machine

`docker ps` : Affiche la liste des conteneurs en cours d'execution

`docker rm` et `docker rmi` : Servent respectivement à supprimer un conteneur ou une image, il faudra utiliser l'ID ou le nom pour les cibler.

`docker run [OPTIONS] <image>` : Permet de lancer un conteneur à partir d'une image

`docker start <conteneur>` : Lance un conteneur existant.

`docker stop <conteneur>` : Stop un conteneur en cours.

`docker image prune` : Lance un nettoyage des images pour libérer de l'espace disque.

`docker exec <conteneur> "COMMAND"` : Exécute une commande dans le shell du container (terminal).

## Quand ?

Lorsqu'on a pas besoin d'utiliser un système d'exploitation (OS) spécifique.

Et pour tout type d'applications qui requirent uniquement environnement d'exploitation.