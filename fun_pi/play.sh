#!/bin/bash

sox -t mp3 ./fm_transmitter/One\ Direction\ -\ Drag\ Me\ Down.mp3 -r 22050 -c 1 -b 16 -t wav - | sudo ./fm_transmitter/fm_transmitter -f 87.5 -
