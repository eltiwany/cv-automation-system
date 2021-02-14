
<p align="center">
<a href="#"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="#"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="#"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

### CV AUTOMATION SYSTEM (CAS)
-----------------

### INTRODUCTION:
CAS is a system that enables the graduates or any person requires to apply for a job application to easily generate and customize curriculum vitae according to organization standards to provides a summary of persons experience, academic background including teaching experience, degrees, research, awards, publications, presentations, and other achievements, skills and credentials.

 💡 **For deep dive and organized processes of this project development, please look up on our Wiki page.**

### PROBLEM STATEMENTS:
The difficulty of generating a professional curriculum vitae for a particular job application.

### MAIN OBJECTIVES:
To make it easier for a person to generate and customize curriculum vitae according to organization needs or a carrier based applications.

### SPECIFIC OBJECTIVES:
* To enable user to fill required information
* To enable user to choose and customize template for their CV
* To enable users to review and download their CV

### SIGNIFANCE OF PROJECT:
* To provide easy way to create a professional CV
* To increase high chance of employment opportunities

### PROJECT SCOPE:
The proposed system will enables graduates, unemployed or any person who wish to create or improve their current CV to easily fill their information and download a professional and recognized CV’s based on their job applications.

--------------------
### INSTALLATION REQUIREMENTS:
In order to install this system on your computer you need to have the following dependencies.
1. Composer (download on https://getcomposer.org/ or run `sudo apt install composer` on debian based linux)
1. NodeJS (download on https://nodejs.org/en/download/ or run `sudo apt install nodejs npm` on debian based linux)
1. Any relational DBMS (MySQL is preffered)
1. Git (download Git for windows on https://gitforwindows.org/ or run `sudo apt install git` on debian based linux)

### INSTALLATION PROCEDURES:
For unexperienced users, please follow each step clearly and do not skip any step to ensure you do not encounter any problems.

1. Clone repository using command `git clone https://github.com/eltiwany/CS335-CV-AUTOMATION-SYSTEM.git`
1. Change path to repository folder by typing `cd CS335-CV-AUTOMATION-SYSTEM`
1. Install node modules by typing `npm install`
1. Install laravel vendor by typing `composer install`
1. Create database on your DBMS with name `cv-automation` or any name if you are advanced user
1. Edit .env file, change the following fiels based on your DBMS settings
   1. `DB_DATABASE=cv-automation`
   1. `DB_USERNAME=root`
   1. `DB_PASSWORD=`
1. Run the following command to import database `php artisan migrate`
1. Link storage to public directory by running `php artisan storage:link`
1. Finally run the system by typing `php artisan serve` then open the browser at `localhost:8000`

---------------
### OUR TEAM MEMBERS - GROUP 14:
SN | NAME |	REG NO |	COURSE
-- | ---- | ------ | -------
1 |	SALEH, ALI A |	2018-04-07828 |	BSCEIT
2 |	LUMMI, MILLE MICHAEL |	2018-04-02429 |	BSCS
3 |	NGAJILO, LUKELO WINSTONE |	2018-04-02426 |	BSCS
4 |	RWEBUGISA, IAN M |	2018-04-06823 |	BSCS
5 |	MOYO, JONATHAN JOHN |	2018-04-02512 |	BSCEIT
6 |	SALEMA, EDWIN EDWARD |	2018-04-06807 |	BSCS
