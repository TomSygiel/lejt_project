Styling
Use snake_case for css-classnames
Never style with ID
Use EM with padding/margins etc.
Use REM with font-size
Use BOOTSTRAP
Use SASS, make new file for each viewpage, have one file with common css for all pages where we use variables
Mobile-first
We will use classes for EVERYTHING, to avoid conflict between different stylesheets

PHP & HTML
Use snake_case for classnames
Single line comment with //, multiline with /**/
HTML comments <!-- COMMENT -->
Use <?= for inline php
Use curlybrackets for control structures
Use include for all includes, exept for database connection and head where we will use require
Where possible, php should be included in HTML

Files and folders
Only small letters for all files except files that contain classes (Auth.php/Comments.php)
Only small letters for all folders
Files that are sentances should be separated by underscore (database_connection.php)

Database
Only small letters in table and column names
Separate table and column names with snake_case

GIT
Commit message should be able to end the following sentance: "This commit will..."
For longer commit messages separate the message into title and body (`git commit -m "This is title" -m "This is body")
At least two people in the group should verify the pull request if conflict occurs
Start day by pulling from master