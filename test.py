import sys
from pytube import YouTube
import os
from pathlib import Path
#from utils.console import print_step, print_substep

link =  sys.argv[1]
#print("Downloading the background video... please be patient 🙏")
url = YouTube(link)
print("downloading")
video = url.streams.get_highest_resolution()
video.download(os.getcwd()) 
print("Downloaded!!!")


#print(sys.argv[1])
