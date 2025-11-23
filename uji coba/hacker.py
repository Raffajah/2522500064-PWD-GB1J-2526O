import time
import sys

loading_text = "Tunggu tengah loading yo :>"

while True:
    for i in range(len(loading_text) + 1):
        sys.stdout.write("\r" + loading_text[:i])
        sys.stdout.flush()
        time.sleep(0.1)

        time.sleep(0.1)

    for i in range(len(loading_text), -1, -1):
        sys.stdout.write("\r" + " " * len(loading_text))
        sys.stdout.write("\r" + loading_text[:i])
        sys.stdout.flush()
        time.sleep(0.05)


        
