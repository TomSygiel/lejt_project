Styling
Use snake_case for css-classnames
Never style with ID
Use EM with padding/margins etc.
Use REM with font-size
Use % with image-sizing
Use BOOTSTRAP
Use SASS, make new file for each viewpage, have one file with common css for all pages where we use variables

PHP & HTML
Use snake_case for classnames
No ending PHP-tag in files that contains only PHP
Single line comment with //, multiline with /**/
Use echo for inline php
Use curlybrackets for control structures

Files and folders
Only small letters for all files except files that contain classes (Auth.php/Comments.php)
Only small letters for all foldersfolders
Files that are sentances should be separated by hypens (database-connection.php)

Database
Only small letters in table and column names
Separate table and column names with snake_case

GIT
Commit message should be able to end the following sentance: "This commit will..."
For longer commit messages separate the message into title and body (`git commit -m "This is title" -m "This is body")
At least two people in the group should verify the pull request
Pull into master after each merged pull request
Start day by pulling from master