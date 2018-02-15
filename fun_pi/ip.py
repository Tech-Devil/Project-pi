import commands
ip = commands.getstatusoutput("ifconfig wlan0 | grep \'inet addr:\'")
ip = ip[1].split('inet addr:')[1].split(' ')[0]
print ip
