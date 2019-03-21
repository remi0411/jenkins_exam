#!groovy

pipeline {
  agent none
  stages {
    stage('Git clone') {
      agent any
      steps {
        sh 'git clone https://github.com/Akasam/samplephpwebsite'
        sh 'git checkout v2'
      }
    }
    stage('Docker Build') {
      agent any
      steps {
        sh 'docker build -t samplewebsite.php .'
      }
    }
  }
}