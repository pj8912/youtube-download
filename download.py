import sys
from pytube import YouTube
import os
from pathlib import Path



link =  sys.argv[1]



url = YouTube(link).streams.filter(res="720p").first().download("downloads/")
print("downloading")
video = url.streams.get_highest_resolution()
video.download(os.getcwd()) 
print("Downloaded!!!")


