#!/usr/bin/env python
import MySQLdb
import urllib2
import time

db = MySQLdb.connect(host="169.254.174.29",    # your host, usually localhost
                     user="rasp1",         # your username
                     passwd="pi",  # your password
                     db="swm")        # name of the data base


cur = db.cursor()
while 1:
    response = urllib2.urlopen("http://10.3.141.89")
    page_source = response.read()
    id = page_source.split('|')[0]
    distance = page_source.split('|')[1]
    intdist = int(distance)
    level = str(100-intdist)
    try:
        cur.execute("""UPDATE bins set bins_capacity_filled = %s where bins_id = %s""",(level, id))
        db.commit()
        print "Data Commited"
    
    except:
        print "Rollback"
    time.sleep(10)        

db.close()
