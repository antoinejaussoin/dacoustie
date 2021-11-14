# Dacoustie


## Installation

- Copier le `docker-compose.yml` dans un répertoire dédié, et `cd` dedans
- Remplacer les mots de passes et autres informations
- Lancer docker-compose (`docker-compose up`)
- Lister les containers: `docker ps`, et repérer l'identifiant de celui de la base de données (mariadb)
- Restaurer la sauvegarde via la commande suivante: `cat backup.sql | docker exec -i MARIA_DB_CONTAINER_NAME_OR_ID mysql -u dac -pDAC_ACCOUNT_PASSWORD dacoustie`
	- Remplacer `backup.sql` par le fichier de sauvegarde
	- Remplacer `MARIA_DB_CONTAINER_NAME_OR_ID` par l'identifiant repéré ci-dessus
	- Remplacer `DAC_ACCOUNT_PASSWORD` par le mot de passe de l'utilisateur "dac" (réglé dans docker-compose.yml). Pas d'espace entre le '-p' et le mot de passe !! (ex: `-pPASSWORD`)
- Le site devrait maintenant fonctionner sur le port précisé dans docker-compose (`http://localhost:1800` par défaut)

## Backup & Restore

https://support.hostway.com/hc/en-us/articles/360000220190-How-to-backup-and-restore-MySQL-databases-on-Linux

mysql -u [username] –p[password] [database_name] < [dump_file.sql]

## Restoring a backup
cat database.sql | docker exec -i DOCKER_CONTAINER_NAME_OR_ID mysql -u dac -pDAC_ACCOUNT_PASSWORD dacoustie