#! /usr/bin/python
# Francis Deslauriers

import pycurl

#php file path and image path
url ='www.fdeslauriers.com/imguplo/web/upload.php';
filename = '/home/frdeso/images/x4q8j.jpg'

# Initialize pycurl
c = pycurl.Curl()
c.setopt(pycurl.URL, url)

#using the uploaded field since it is the name used in the html form
c.setopt(c.HTTPPOST, [("uploaded", (c.FORM_FILE, filename))])

# Start transfer
print 'Uploading file %s to url %s' % (filename, url)
c.perform()
c.close()