pipeline{
    agent any
    environment {
        GIT_REPO = "https://github.com/Hafssa-ez/Project-DON.git"
        GIT_BRANCH="main"
        DEPLOY_DIR="web001"
    }
    stages{
        stage('Clonner le dépôt'){
            steps {
                sh "rm -rf ${Deploy_DIR}"
                sh "git clone -b ${GIT_BRANCH} ${GIT_REPO} ${DEPLOY_DIR}"
            }
        }
        stage('Installation des dépendances'){
            steps{
                dir ("${DEPLOY_DIR}"){
                    sh "composer install --optimize-autoloader"

                }
            }
        }
        stage('Configuration de l\'environnement'){
            steps{
                script {
                    def envLocal = """
                    APP_ENV=prod
                    APP_DEBUG=1
                    DATABASE_URL="mysql://root@127.0.0.1:3306/${DEPLOY_DIR}projet_don?serverVersion=9.1.0"
                    """
                    writeFile file: "${DEPLOY_DIR}/.env.local", text: envLocal



                }
            }
        }
        stage('Migration de la base de données'){
            steps{
                dir ("${DEPLOY_DIR}"){
                    sh "php bin/console doctrine:database:create --if-not-exists --env=prod"
                    sh "php bin/console doctrine:migrations:migrate --no-interaction --env=prod"
                }
            }
        }
        stage('Nettoyage du cache'){
            steps{
                dir ("${DEPLOY_DIR}"){
                    sh "php bin/console cache:clear --env=prod"
                    sh 'php bin/console cache:warmup'
        
                }
            }
        }
        stage('Déploiement'){
            steps{
                sh "rm -rf /var/www/html/${DEPLOY_DIR}/*"
                sh "cp -r ${DEPLOY_DIR}/* /var/www/html/${DEPLOY_DIR}/"
                sh "chmod -R 775 /var/www/html/${DEPLOY_DIR}/var"
             
            }
        }
    }
    post{
        success {
            echo 'Déploiement réussi !'

        }
        failure{
            echo 'Déploiement échoué !'
        }
    }
}