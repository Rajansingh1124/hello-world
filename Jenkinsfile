pipeline {
    agent any

    stages {

        stage ('build') {
            steps{
                echo 'The code now will be built into artifact'
                sh "pwd"
                sh "docker build  -t first:0.1 ."
                sh "sudo docker run -dt -p 7000:7000 first"
            }
        }
        stage ('Artifact Archiving') {
            steps {
                echo 'The artifact will be uploaded to an artifact repository'
            }
        }

        stage ('Testing') {

            steps{
                echo 'The Artifact is staged onto the staging server'
            }
        }

        stage ('staging') {

        steps {
            echo 'The artifact is staged into the staging server'
         }
     }
          stage ("Deploy") {
             steps { 
                 echo 'The software will now be deployed'
          } 
          
          }

    }
}

 
