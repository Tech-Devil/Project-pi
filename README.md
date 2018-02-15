# Project-pi

## For playing Memory Game :-
	
1. Download and install Apache2 server on Raspberry Pi 3.
   - For above work you can see https://www.raspberrypi.org/documentation/remote-access/web-server/apache.md

2. Then make sure that server on Pi can be accessed through another devices connected to the same network.
	 - You can do this by simply typing your Pi's ip in the browser of another device .
		
3. Now if above steps are properly completed, just Copy-Paste all the PHP files in MemoryGame folder to /var/www/html directory of your Pi.
	 - DO NOT CHANGE THE FILE NAMES and Overwrite index.php if needed.
		
4. Now Restart the Apache2 server on Pi and type your Pi's ip on another system on common network.
	 - Now, if you see Select Level page on your browser, you are all set for the Game.





## For playing broadcast radio :-
	
1. Download the files using following git command

			git clone https://github.com/markondej/fm_transmitter.git 

2. Install the g++ compiler by following commands one by one

			sudo apt-get install make gcc g++

			make

3. Install sox 
			sudo apt-get install sox libsox-fmt-all

4. Put .mp3 files or .wav file you want to play in fm_transmitter folder

5. For playing Radio

	 - First connect wire antenna to GPIO 4 of raspberry pi

	 - Go to fm_transmitter folder and type following commands on terminal

		For Broadcating .wav file

			sox song.wav -r 22050 -c 1 -b 16 -t wav - | sudo ./fm_transmitter -f 100.6 -
			(Replace song.wav with your audio .wav file and 100.6 with your desired frequency)

		For Broadcasting mp3 file

			sox -t mp3 SomeSong.mp3 -r 22050 -c 1 -b 16 -t wav - | sudo ./fm_transmitter -f 102.3 -
			(Replace  SomeSong.mp3 with your audio .mp3 file and 102.3 with your desired frequency)

6. Enjoy the Radio...



## For display on LCD :-

1. Install python 2.7 version on raspbian OS on raspberry pi.

2. Install python package manager pip :
```
      sudo apt-get install python-pip python-dev build-essential
```
3. Install and configure audio on pi, follow instructions on :
```
      http://iwearshorts.com/blog/raspberry-pi-setting-up-your-audio/
```
4. Install GrovePi for lcd output. Clone github repo, and follow installing instructions on it :
```
      https://github.com/DexterInd/GrovePi
```
5. Connect the circuit as attached in the image.

6. Connect your android device to raspberry pi using bluetooth.
```
		Turn on your android bluetooth and make it discoverable.
    
		In raspberry pi terminal enter the following commands :-
			sudo apt-get install bluetooth blueman bluez
			sudo reboot
			sudo apt-get install python-bluetooth
			sudo bluetoothctl
			[bluetooth]# power on
			[bluetooth]# agent on
			[bluetooth]# discoverable on
			[bluetooth]# pairable on
			[bluetooth]# scan on
			[bluetooth]# pair <address of your phone>
      
		Then enter yes for pairing, after that type exit command
```
		
7. Download and intall blueTerm2 app on your android phone and open it.

8. Copy paste the "fun_pi" folder and in its directory run the s.py python script
```
    python s.py
```
9. In Blueterm2 app connect it with your rasberry pi and now control it using your voioce commands. Some commands are as follows :-
```
    find distance
    red
    blue
    green
    silver
    play game
    play radio
    clear
    quit
```
10. Have fun ;-)
