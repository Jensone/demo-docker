# On utilise l'image Python officielle
FROM python:3.9-slim

# Répertoire de travail
WORKDIR /app

# Installation des dépendances (Flask, etc.)
RUN pip install --no-cache-dir Flask

# Exposons l'application sur le port 5000
EXPOSE 5001

# Commande par défaut pour lancer l'application
CMD ["flask", "run", "--host=0.0.0.0"]