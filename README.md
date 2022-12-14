# Install
## 1 - Docker
You can download and install Docker and Docker-compose depending on your platform :

- https://docs.docker.com/install/
- https://docs.docker.com/compose/install/

Install TaskFile:
 ```bash
 sh -c "$(curl --location https://taskfile.dev/install.sh)" -- -d
 
 ## For MacOS only
 brew install go-task/tap/go-task
 ```
For more info about TaskFile, visit: https://taskfile.dev/#/installation

## 2 - Install dependencies
You can install project using docker compose commands `build, up.` or by just running the following task command:

 ```bash
 task install
 
 ## list all tasks
 task
 ```

## 3 - Let's run it
If all your containers are up and running with(`docker compose ps`). You should add a `local.api-suzuki-care.fr` to your `/etc/hosts`
 ```bash
# /etc/hosts
 127.0.0.1 local.nine-circle.fr
 ::1 local.nine-circle.fr
 ```

## 4 - Check it out
- Website: https://local.nine-circle.fr

# Tests & Quality
Follow this [link](./doc/tests.md)