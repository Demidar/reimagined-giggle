pipeline {
    agent any
    stages {
        stage("Install dependencies") {
            steps {
                sh "composer install --prefer-source --no-interaction --no-progress --no-suggest"
            }
        }
        stage("Unit test") {
            steps {
                sh "./vendor/bin/phpunit tests"
            }
        }
    }
}
