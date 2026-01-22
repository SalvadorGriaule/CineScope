



# Laravel <CineScope>

## Pré-requis
- PHP ≥ 8.2  
- Composer  
- MySQL 8.0+ (ou MariaDB 10.6+)  
- Node.js ≥ 18 (si build d’assets)  

## 1. Installation

```bash
# Cloner le repo
git clone https://github.com/SalvadorGriaule/cicl.git
cd cicl

# Installer les dépendances PHP
composer install

# Installer les dépendances Node (facultatif)
npm install && npm run build
```

## 2. Configuration de l’environnement

```bash
# Dupliquer le fichier d’env
cp .env.example .env

# Générer la clé d’application
php artisan key:generate
```

Éditer `.env` et renseigner au minimum :

```env
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<nom_bdd>
DB_USERNAME=<user_bdd>
DB_PASSWORD=<mdp_bdd>
```


## 3. Lancer le serveur local

```bash
php artisan serve
# → http://127.0.0.1:8000
```

## 4. Tests avec Pest

Les tests sont dans `tests/Feature` et `tests/Unit`.

```bash
# Tous les tests
php artisan test

# OU, via Pest directement
./vendor/bin/pest
