## How to use this image

### Running with Docker Compose

SuteCRM will run in it own container. And MySQL will run in it own container and there is a data-only container for MySQL.

1. Install [Docker and Docker Compose](https://docs.docker.com/compose/install/)
2. Run `docker-compose up` from the root of this project.
3. Access `http://{docker_host}:8080` from your web browser to finish setting up SuiteCRM.

### Running with Docker Run

If you already have MySQL installed or want to use a platform service like Amazon RDS, you can run the SuiteCRM container seperately using Docker run. To set up SuiteCRM using this approach, please do the following:

1. Install [Docker](http://docs.docker.com/installation/)
2. Run `docker run --name some-suitecrm -e DB_HOST_NAME=yourhostname -e DATABASE_NAME=yourdatabasename -e DB_USER_NAME=yourusername -e DB_PASSWORD=yourpassword -e DB_TYPE=mysql -e DB_TCP_PORT=3306 -e DB_MANAGER=MysqlManager -p 2080:80 -d nextindex/docker-suitecrm`
3. Access `http://{docker_host}:2080` from your web browser to finish setting up SuiteCRM.

### Running with Rancher

If you want to run SuiteCRM in Rancher, use the `docker-compose-rancher.yml`
There is only one difference, the dbdata container is labeled as a rancher sidekick, to work properly.
