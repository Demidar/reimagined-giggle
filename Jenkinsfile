pipeline {
    agent any
    stages {
        stage("Install dependencies") {
            steps {
                sh "composer install --prefer-dist --no-interaction --no-progress --no-suggest"
            }
        }
        stage("Unit test") {
            steps {
                sh "./vendor/bin/phpunit tests --coverage-html tests/.coverage"
            }
        }
        stage("Code coverage report") {
            steps {
                publishHTML (target: [
                    reportDir: 'tests/.coverage',
                    reportFiles: 'index.html',
                    reportName: 'PHPUnit coverage report'
                ])
            }
        }
    }
}
