#!E:\Programs\Python\python.exe

# Import modules for CGI handling 
import cgi, cgitb 

# Create instance of FieldStorage 
form = cgi.FieldStorage() 

# Get data from fields
firstName = form.getvalue('firstName')
lastName  = form.getvalue('lastName')
school = form.getvalue('school')

print ("Content-type:text/html\r\n\r\n")
print ("<html>")
print ("<head>")
print ("<title>Hello - Second CGI Program</title>")
print ("</head>")
print ("<body>")
print ("<h2>Hello %s %s, you go to: %s</h2>" % (firstName, lastName, school))
print ("</body>")
print ("</html>")