Un Dockerfile est un fichier texte contenant une série d’instructions permettant de créer une image Docker. Chaque instruction correspond à une commande qui sera exécutée lors de la construction de l’image. Voici une cheatsheet complète des instructions Dockerfile les plus couramment utilisées :

    1. FROM
    
    Définit l’image de base à partir de laquelle construire l’image.
    
    FROM <image>[:<tag>] [AS <nom>]
    
    Exemple :
    
    FROM ubuntu:20.04
    
    2. RUN
    
    Exécute des commandes dans le conteneur en cours de construction.
    
    RUN <commande>
    
    Exemple :
    
    RUN apt-get update && apt-get install -y python3
    
    3. CMD
    
    Spécifie la commande par défaut à exécuter lorsque le conteneur démarre. Peut être remplacée lors de l’exécution du conteneur.
    
    CMD ["exécutable", "param1", "param2"]
    
    Exemple :
    
    CMD ["python3", "app.py"]
    
    4. ENTRYPOINT
    
    Définit la commande qui sera toujours exécutée lors du démarrage du conteneur. Les arguments supplémentaires peuvent être passés lors de l’exécution du conteneur.
    
    ENTRYPOINT ["exécutable", "param1", "param2"]
    
    Exemple :
    
    ENTRYPOINT ["python3", "app.py"]
    
    5. WORKDIR
    
    Définit le répertoire de travail pour les instructions suivantes.
    
    WORKDIR /chemin/du/répertoire
    
    Exemple :
    
    WORKDIR /app
    
    6. COPY
    
    Copie des fichiers ou des répertoires depuis le contexte de construction vers le système de fichiers du conteneur.
    
    COPY <source> <destination>
    
    Exemple :
    
    COPY . /app
    
    7. ADD
    
    Semblable à COPY, mais avec des fonctionnalités supplémentaires comme l’extraction d’archives et le téléchargement de fichiers depuis des URL.
    
    ADD <source> <destination>
    
    Exemple :
    
    ADD fichier.tar.gz /app
    
    8. ENV
    
    Définit des variables d’environnement.
    
    ENV <nom> <valeur>
    
    Exemple :
    
    ENV PORT=8080
    
    9. ARG
    
    Déclare des variables qui peuvent être passées lors de la construction de l’image.
    
    ARG <nom>[=<valeur_par_défaut>]
    
    Exemple :
    
    ARG VERSION=1.0.0
    
    10. EXPOSE
    
    Indique les ports sur lesquels le conteneur écoutera au moment de l’exécution.
    
    EXPOSE <port>[/<protocole>]
    
    Exemple :
    
    EXPOSE 80/tcp
    
    11. VOLUME
    
    Crée un point de montage et marque le répertoire comme un volume à partir duquel des données peuvent être partagées.
    
    VOLUME ["/chemin/du/volume"]
    
    Exemple :
    
    VOLUME ["/data"]
    
    12. USER
    
    Spécifie l’utilisateur sous lequel les commandes RUN, CMD et ENTRYPOINT seront exécutées.
    
    USER <utilisateur>[:<groupe>]
    
    Exemple :
    
    USER appuser
    
    13. LABEL
    
    Ajoute des métadonnées à l’image sous forme de paires clé-valeur.
    
    LABEL <clé>=<valeur>
    
    Exemple :
    
    LABEL maintainer="nom@example.com"
    
    14. ONBUILD
    
    Ajoute une instruction qui sera exécutée lorsque l’image sera utilisée comme image de base pour une autre construction.
    
    ONBUILD <instruction>
    
    Exemple :
    
    ONBUILD ADD . /app/src
    
    15. STOPSIGNAL
    
    Définit le signal système qui sera utilisé pour arrêter le conteneur.
    
    STOPSIGNAL <signal>
    
    Exemple :
    
    STOPSIGNAL SIGTERM
    
    16. HEALTHCHECK
    
    Vérifie périodiquement l’état de santé du conteneur.
    
    HEALTHCHECK [options] CMD <commande>
    
    Exemple :
    
    HEALTHCHECK --interval=30s --timeout=3s \
      CMD curl -f http://localhost/ || exit 1
    
    17. SHELL
    
    Permet de spécifier le shell à utiliser pour les instructions RUN.
    
    SHELL ["exécutable", "param1", "param2"]
    
    Exemple :
    
    SHELL ["/bin/bash", "-c"]
    
    Bonnes pratiques
    
        •	Minimiser le nombre de couches : Combinez les instructions RUN lorsque cela est possible pour réduire le nombre de couches dans l’image finale.
        •	Utiliser des images de base légères : Privilégiez des images comme Alpine pour réduire la taille de l’image et améliorer la sécurité.
        •	Nettoyer après l’installation : Supprimez les fichiers temporaires et les caches après l’installation de paquets pour réduire la taille de l’image.
        •	Éviter l’utilisation de ROOT : Utilisez l’instruction USER pour exécuter les processus avec un utilisateur non privilégié.
    
    Pour plus de détails, consultez la documentation officielle de Docker.