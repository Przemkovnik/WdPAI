# WdPAI
Project "SUPERB-MED" for subject "Wstęp do Projektowania Aplikacji Internetowych"


## TABLE OF CONTENTS

* [DESCRIPTION](#description)
* [TECHNOLOGIES](#technologies)
* [INSTALLATION](#installation)
* [START](#start)
* [QUIT](#quit)
* [MAINTENANCE](#maintenance)



## DESCRIPTION

    The aim of the project is to obtain a web application for clinics that meets today's design standards, while taking into account the fact, 
    that these types of facilities are most often used by elderly/sick people, which requires emphasis on transparency and of course simplicity.



## TECHNOLOGIES

    Project is created with:
    * HTML5
    * CSS3
    * JavaScript
    * PHP8.2.1,
    * NGINX1.23.3
    * PostgreSQL
    * GIT
    * Docker



## INSTALLATION


    Firstly, to run this application, You need to download and install few things.

    1. Latest version of one of the most popular web browsers e.g. Google Chrome, Mozilla Firefox, etc.

    2. Docker platform
        The easiest way to get latest Docker version is to go to the official Docker website https://docs.docker.com/get-docker/
        and then depending on your operating system, choose the best installation path for you. Docker is available for MacOS,
        Windows and Linux. Follow the instructions from the webstite during installation.
    3. Git 
        One of the easiest way to get latest Git version is to go to the website https://github.com/git-guides/install-git
        and then depending on your operating system, follow the instructions.

## START

    After that, you need to clone this repository on your local machine. To do this, open your terminal and by the use of correct commands 
    go to the location, where do you want to store the project and data. Then type:
    ```
    git clone https://github.com/Przemkovnik/WdPAI.git
    ```
    Afterwards, in chosen location will be the folder "WdPAI" with cloned repository. Enter that folder via terminal.

        
    Now, you must execute following commands in terminal(still being in "WdPAI"): 
    ```
    docker-compose up
    ``` 
    You will download, build(according to the docker configuration) and run docker containers

    Then, check if all the containers are "up" using command in the another terminal:
    ```
    docker-compose ps
    ```    
    If so, run your browser and after that, type in the url address bar:
    ```
    localhost:8080
    ```
    Then you should see the home page of the application.(If there are any problems, try to refresh the website)

    
    !!!Now, you can start to use and explore application. Feel free.!!!

## QUIT

    When you are done, close the application tab in the browser and use the command below in the terminal, to stop the docker containers:
    ```
    docker-compose stop
    ```

## MAINTENANCE

    If you want to change something in the docker configuration, remember to save all configuration files and then rebuild the docker:
    ```
    docker-compose build
    ```