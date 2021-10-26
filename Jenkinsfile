pipeline {
    agent any
    
    environment {
		DOCKERHUB_CREDENTIALS=credentials('rajansingh1124')
	}

    stages {

        stage ('build') {
            steps{
                echo 'The code now will be built into artifact'
                sh "pwd"
                sh "docker build  -t rajansingh1124/first:0.1 ."
                sh "docker run -dt -p 7000:7000 rajansingh1124/first:0.1"
            }
        }
        stage ('Login') {

			steps {
				sh "echo $DOCKERHUB_CREDENTIALS_PSW | docker login -u $DOCKERHUB_CREDENTIALS_USR --password-stdin"
			}
		}

        stage ('push') {

			steps {
				sh "docker push rajansingh1124/first:0.1"
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

 
