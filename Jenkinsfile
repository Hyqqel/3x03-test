pipeline {
	agent any
	stages {
		stage('Checkout SCM') {
			steps {
				git branch:'main', url:'https://github.com/Hyqqel/3x03-test.git'
			}
		}

		stage('Code Quality Check via SonarQube') {
			steps {
				script {
				def scannerHome = tool 'SonarQube';
					with SonarQubeEnv() {
					sh "$(tool("SonarQube")}/bin/sonar-scanner \
					-Dsonar.projectKey=OWASP \
					-Dsonar.sources=. \
					-Dsonar.host.url=http://47.254.245.72:9000 \
					-Dsonar.login=de72159ec017dddb50f7f414b37477bcb8b3e885"
					}
				}
			}
		}
	}	
	post {
		always {
			recordIssues enabledForFailure: true, tool: sonarQube()
		}
	}
}
