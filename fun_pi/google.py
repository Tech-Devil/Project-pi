import simplejson, urllib
orig_coord = "Patna Bihar India"
dest_coord = "Jehanabad Bihar India"
url = "http://maps.googleapis.com/maps/api/distancematrix/json?origins={0}&destinations={1}&mode=driving&language=en-EN".format(str(orig_coord),str(dest_coord))
result= simplejson.load(urllib.urlopen(url))
driving_time = result['rows'][0]['elements'][0]['duration']['text']
driving_distance = result['rows'][0]['elements'][0]['distance']['text']

print driving_distance
print driving_time
