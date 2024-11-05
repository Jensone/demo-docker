# On utilise l'image Python officielle
FROM python:3.8-slim-buster

# Répertoire de travail
WORKDIR /app

# Copie du contenu des dépendances
COPY requirements.txt .

# Installation des dépendances (Flask, etc.)
RUN pip install --no-cache-dir -r requirements.txt

# Copier le contenu de l'application
COPY . .

# Exposons l'application sur le port 5001
EXPOSE 5000

# Commande par défaut pour lancer l'application
CMD ["python", "app.py"]