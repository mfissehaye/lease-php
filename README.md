# lease-php
A simple backend for lease-android client

Put this repository in your www directory and it should be accessible at http://localhost/lease
# API
The two endpoints are `/` and `/descriptions.php?id=USER_ID`
If you want to access the backend from a different url configure the android client's baseUrl variable in the Constants class. See the android client's repository read me file for more information.

Create a database lease. And import the sql file into your database before trying to connect.
