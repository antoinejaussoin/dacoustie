# Dacoustie


## Installation

- Copier le `docker-compose.yml` dans un répertoire dédié, et `cd` dedans
- Remplacer les mots de passes et autres informations
- La variable `BASE_URL` doit être le nom du site y compris le http ou https, par exemple `https://www.dacoustie.com`.
- Lancer docker-compose (`docker-compose up`)
- Lister les containers: `docker ps`, et repérer l'identifiant de celui de la base de données (mariadb)
- Restaurer la sauvegarde via la commande suivante: `cat backup.sql | docker exec -i MARIA_DB_CONTAINER_NAME_OR_ID mysql -u dac -pDAC_ACCOUNT_PASSWORD dacoustie`
	- Remplacer `backup.sql` par le fichier de sauvegarde
	- Remplacer `MARIA_DB_CONTAINER_NAME_OR_ID` par l'identifiant repéré ci-dessus
	- Remplacer `DAC_ACCOUNT_PASSWORD` par le mot de passe de l'utilisateur "dac" (réglé dans docker-compose.yml). Pas d'espace entre le '-p' et le mot de passe !! (ex: `-pPASSWORD`)
- S'assurer que les images soient bien dans un répertoire nommé `images`, lui-même dans le même répertoire que le `docker-compose.yml`.
- Le site devrait maintenant fonctionner sur le port précisé dans docker-compose (`http://localhost:1800` par défaut)

## Backups

Un dump de la base de donnée est créé chaque jour, et le fichier se retrouve dans le volume pointant vers `/var/backup` et spécifié dans docker-compose.yml.


## Réstaurer une sauvegarde
cat database.sql | docker exec -i dacoustie-db-1 mysql -u dac -pchangeme dacoustie

## Serveur de prod

Le `docker-compose.yml` se trouve dans `/var/docker`.