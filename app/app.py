# Importation des librairies Flask et de render_template
from flask import Flask, render_template

#  Déclaration de l'application Flask
app = Flask(__name__)

# Configuration de la route principale
@app.route('/')
def index():
    return render_template('index.html')

# Traitement en cas d'erreur 404
if __name__ == '__main__':
    app.run(debug=True)