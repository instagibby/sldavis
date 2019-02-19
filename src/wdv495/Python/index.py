#!/usr/local/python-3.5

print("content-type: text/html\n\n" ) #keep this in all .py files to execute code.

print("<html>")
print("<head>")
print('<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />')
print("<title>WDV341 Intro PHP - Form Example</title>")
print("</head>")

print("<body>")
print("<h1>WDV495 Python</h1>")
print("<h2>Python Form</h2>")


print("<form name='python' method='post' action='./pageHandler.py'>")
print("<p>First Name: ")
print("<input type='text' name='firstName' id='firstName' />")
print("</p>")
print("<p>Last Name: ")
print("<input type='text' name='lastName' id='lastName' />")
print("</p>")
print("<p>School: ")
print("<input type='text' name='school' id='school' />")
print("</p>")
print("<p>")
print("<input type='submit' name='button' id='button' value='Submit' />")
print("<input type='reset' name='button2' id='button2' value='Reset' />")
print("</p>")
print("</form>")

print("<p>&nbsp;</p>")
print("</body>")

print("</html>")

 
 