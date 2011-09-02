__SQL Section README__

This is just a simple breakdown of the sql syntax to add a users table with a couple test users.

The syntax for the table breaks down as follows:

- user_id is an integer field and your primary key.
- user_name is a 16 digit varchar field and this is the username field.
- user_pass is a 16 digit varchar field and this is the password field.
- user_hint is an 80 digit varchar field for holding hints. hints are required to reset passwords.
- user_dname is a 16 digit varchar field that will hold the displayed name.
- user_date is a datetime field. I have a hidden field for use with the registration form with proper syntax.
- user_level is an integer field requiring only a 0, 1, or 2. 

__User Levels__<br>
These are the user levels for the values in the field above.

- 0 = A normal user for a typical community site.
- 1 = A manager level user for adding and removing products or company blog posts.
- 3 = An admin level user for top level user requirements such as supporting manager level users, etc.