#/usr/local/python-3.5
#import requests
# import cgi
# form = cgi.FieldStorage()
# print form["firstName"]
# import mysql.connector
# mydb = mysql.connector.connect(
#   host="localhost",
#   user="sldavis7_wdv341",
#   passwd="password1234",
#   database="sldavis7_wdv341"
# )

# mycursor = mydb.cursor()

# sql = "INSERT INTO customers (name, address) VALUES (%s, %s)"
# val = ("John", "Highway 21")
# mycursor.execute(sql, val)

# mydb.commit()

# print(mycursor.rowcount, "record inserted.")

# from urllib.parse import urlencode
# from urllib.request import Request, urlopen

# url = 'idex.py' # Set destination URL here
# post_fields = {'firstName': 'lastName': 'school'}     # Set POST fields here

# request = Request(url, urlencode(post_fields).encode())
# json = urlopen(request).read().decode()
# print(json)


print("content-type: text/html\n\n" ) #keep this in all .py files to execute code.

print("<html>")
print("<head>")
print('<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />')
print("<title>WDV341 Intro PHP - Form Example</title>")
print("</head>")

print("<body>")
print("<h1>WDV495 Python</h1>")


print("<form id='python' name='python' method='post' action='index.py'>")
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

 
 