pipeline {
	agent any
	stages {
		stage('Checkout SCM') {
			steps {
				git '/.git/Haikal/'
			}
		}

		stage('OWASP DependencyCheck') {
			steps {
				dependencyCheck additionalArguments: '--format HTML --format XML', odcInstallation: 'Default'
			}
		}
	}	
	post {
		success {
			dependencyCheckPublisher pattern: 'dependency-check-report.xml'
			sh "sudo rm -R /var/47.254.245.72:8080/* /var/47.254.245.72:8080/.* || true"
		}
	}
}