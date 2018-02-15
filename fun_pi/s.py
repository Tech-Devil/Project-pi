import bluetooth
import RPi.GPIO as GPIO   #calling for header file which helps in using GPIOs of PI
import commands
import subprocess
#import Adafruit_CharLCD 
from grovepi import *
from grove_rgb_lcd import *
# Raspberry Pi pin setup
#lcd_rs = 18
#lcd_en = 23
#lcd_d4 = 24
#lcd_d5 = 16
#lcd_d6 = 20
#lcd_d7 = 21
#lcd_backlight = 2
#lcd_rs = 26
#lcd_en = 19
#lcd_d4 = 13
#lcd_d5 = 06
#lcd_d6 = 05
#lcd_d7 = 11
#lcd_backlight = 2

def google_distance(orig_coord,dest_coord):
    import simplejson, urllib
    #orig_coord = "Patna Bihar India"
    #dest_coord = "Jehanabad Bihar India"
    url = "http://maps.googleapis.com/maps/api/distancematrix/json?origins={0}&destinations={1}&mode=driving&language=en-EN".format(str(orig_coord),str(dest_coord))
    result= simplejson.load(urllib.urlopen(url))
    driving_time = result['rows'][0]['elements'][0]['duration']['text']
    driving_distance = result['rows'][0]['elements'][0]['distance']['text']

    setText( driving_distance +'\n'+ driving_time )
    #setText( '\n' )
    #setText ( driving_time )

# Define LCD column and row size for 16x2 LCD.
#lcd_columns = 16
#lcd_rows = 2

#lcd = LCD.Adafruit_CharLCD(lcd_rs, lcd_en, lcd_d4, lcd_d5, lcd_d6, lcd_d7, lcd_columns, lcd_rows, lcd_backlight)

server_socket=bluetooth.BluetoothSocket( bluetooth.RFCOMM )

port = 1
server_socket.bind(("",port))
server_socket.listen(1)

client_socket,address = server_socket.accept()
print ("Accepted connection from ",address)

while 1:

    data = client_socket.recv(1024)
    print ("Received: %s" % data)
    if(len(data)!= 0):
        print (len(data))
        setRGB(0, 128, 68)
        if (len(data) > 16):  #breaking long strings into 2 parts
            i = len(data)-16
            a,b = data[:16], data[16:]  #first string will be of 16 char
            setText(a)#lcd.message(a)
            #setRGB(0,128,64)#lcd.message('\n')
            setText('\n')#lcd.message(b)
            setText(b)
            print (i)
            print (a)
            print (b)
        else:
            #setRGB(0, 128, 64)
            setText(data)#lcd.message(data)

        if (data == "clear"):
            setText('')#lcd.clear()

        elif (data == "quit"):
            print ("Quit")
            break
        
        elif (data == "black"):
            setRGB(0, 0, 0)
        elif (data == "white"):
            setRGB(225, 225, 225)
        elif (data == "red"):
            setRGB(225, 0, 0)
        elif (data == "lime"):
            setRGB(0, 225, 0)
        elif (data == "blue"):
            setRGB(0, 0, 225)
        elif (data == "yellow"):
            setRGB(225, 225, 0)
        elif (data == "cyan"):
            setRGB(0, 225, 225)
        elif (data == "magenta"):
            setRGB(225, 0, 225)
        elif (data == "silver"):
            setRGB(192, 192, 192)
        elif (data == "gray"):
            setRGB(128, 128, 128)
        elif (data == "maroon"):
            setRGB(128, 0, 0)
        elif (data == "olive"):
            setRGB(128, 128, 0)
        elif (data == "green"):
            setRGB(0, 128, 0)
        elif (data == "purple"):
            setRGB(128, 0, 128)
        elif (data == "teal"):
            setRGB(0, 128, 128)
        elif (data == "navy"):
            setRGB(0, 0, 128)

        elif (data == "play game"):
            ip = commands.getstatusoutput("ifconfig wlan0 | grep \'inet addr:\'")
            ip = ip[1].split('inet addr:')[1].split(' ')[0]
            setText(ip)
        elif ( data == "play radio" ):
            setText('Freq: 87.5')
            subprocess.Popen(["./play.sh","&"])
            #subprocess.Popen(["sox -t mp3 ~/fm_transmitter/One\ Direction\ -\ Drag\ Me\ Down.mp3", "-r", "22050", "-c", "1", "-b", "16", "-t", "wav", "-", "|", "sudo ./../fm_transmitter/fm_transmitter", "-f", "87.5", "-"])
            #tp = commands.getstatusoutput("sox -t mp3 ~/fm_transmitter/One\ Direction\ -\ Drag\ Me\ Down.mp3 -r 22050 -c 1 -b 16 -t wav - | sudo ./../fm_transmitter/fm_transmitter -f 87.5 -")
        
        elif (data == "find distance"):
            setText('Speak Origin...')
            origin = client_socket.recv(1024)
            setText(origin)
            time.sleep(1)
            setText('Speak Dest...')
            destination = client_socket.recv(1024)
            setText(destination)
            time.sleep(1)
            #origin = "patna bihar india"
            #destination = "jehanabad bihar india"
            google_distance(origin,destination)
        

setText('')
setRGB(0, 0, 0)
client_socket.close()
server_socket.close()
