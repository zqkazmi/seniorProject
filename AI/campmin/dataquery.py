#!/usr/bin/python

import numpy
hostname = 'localhost'
username = 'root'
password = ''
database = 'campusmin'

# Simple routine to run a query on a database and print the results:
def doQuery( conn ) :
    cur = conn.cursor()

    cur.execute( "SELECT * FROM program" )

    for pdate,ptime,patten in cur.fetchall() :
        a=numpy.array(pdate, ptime, patten)
        numpy.savetxt("rawdata.csv", a, delimiter=',')


print("Using mysql.connector…")
import mysql.connector
myConnection = mysql.connector.connect( host=hostname, user=username, passwd=password, db=database )
doQuery( myConnection )
myConnection.close()