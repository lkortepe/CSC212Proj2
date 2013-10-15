Author: Carolyn, Luke, Ted, Yukun, Yunping
Contact info:csohmer@u.rochester.edu, lkortepe@gmail.com, theodore.teumer@rochester.edu,  yliu80@u.rochester.edu ,yshao9@hse.rochester.edu

Description
-----------
index.php
This file is the source code for the home page of our website, 
which lists information of future seminars hosted by different departments of University of Rochester.
Data to populate the table is pulled from a MySQL database by including events.php.

page2.php
This file is the source code for the second page of our website. 
User will be linked to this page if they click the "Create New Event" button in the home page. 
In this page, user is asked to log in the system using UserID and password, in order to create a new event.

page3.php
This file is the source code for the third page of our website. 
After logging into the system, the user can fill out the information of their new event in this page.
Information will be submitted to a MySQL database.

page4.php
This file is the source code for the fourth page of our website. 
The user will be linked to this page after they submit their event. The 
user will be redirected back to the home page. The new event they created will also be listed there.

databaseentry.php
PHP file linked in to page4 to create the new MySQL entry.

events.php
PHP file to pull information from MySQL table.

styles.css
Style sheet for all website aesthetics.

background.png
Background image for website.


Instructions to submit bugs, feature requests
----------------------------------------------
Please email to one of the authors with questions or bug reports.


Configuration instructions:
These files require a working installation of PHP and MySQL. In our situation, they
were hosted on an Amazon EC2 server. If personal use of the files is desired, one will
have to set up a new MySQL database. As such, all database references in the source code
will have to be replaced to fit one's respective database and tables.

Known bugs:
No known bugs at this time.

Troubleshooting:
Contact an author and they will be happily discuss any difficulties that arise.

Credits and acknowledgements:
This project was created for CSC212: Human Computer Interaction at 
the University of Rochester. 

Changelog:
Project completed October 2013.
