pipeline {
    agent any
    stages {
        stage("Install dependencies") {
            steps {
                sh "composer install"
            }
        }
        stage("Unit test") {
            steps {
                sh "./vendor/bin/phpunit tests"
            }
        }
    }
}
