# BDDTesting
## Setup Behat, Selenium, Mink

Hello, this repo is a basic worked setup of behat which is used mink, selenium and behat to execute the BDD testing. The example of a test case is a testing of the head on the wiki page.

This code contains also the webdriver-manager which will help you to manage your testing. For example, before you will start the execution your testing you should write the command in the console to start the selenium server
```bash
./bin/manager start
```
P.S. **Here are available commands:**
* clean   Delete contents of the installation directory
* help    Displays help for a command
* list    Lists commands
* start   Start Selenium Server
* status  List the current available drivers
* update  Download or update Selenium Server and drivers

after that, you can execute the command 
```bash
./bin/manager behat
```
that command starts the execution of your test from the feature file. In this case, it is *features/search.feature*

All feature files should be created in the folder features.
The code which will be executed should be written in *features/bootstrap.*

**The command:**
```bash
./bin/behat --append-snippets
```
will add your steps from feature file into *bootstrap/FeatureContext.php*, you should do it if you did changes of your steps in search.feature

In the file composer.json you should write all dependencies.

*This video helped me to create this build:*
https://www.youtube.com/watch?v=j7RHtNePY3Y