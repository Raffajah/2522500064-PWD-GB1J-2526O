import time
import sys

print ("""Halo , Saya Rafa Alghifari
Disini saya mencoba  menuliskan variabel dengan phyton""")

time.sleep(2)

print('Data saya')

time.sleep(1)
nama = 'Rafa Alghifari'
umur = 18
hobi = 'Main Game'
tinggal = 'Pangkalpinang'

print('Nama saya adalah', nama)
time.sleep(2)
print('Umur saya adalah', umur)
time.sleep(2)
print('Hobi saya adalah', hobi)
time.sleep(2)
print('Saya tinggal di', tinggal)
time.sleep(2)
print('Dan itulah data diri saya , Terima kasih sudah melihat')

loading_text = "Cmiwwwwwwwwwwwwww :>"

while True:
    for i in range(len(loading_text) + 1):
        sys.stdout.write("\r" + loading_text[:i])
        sys.stdout.flush()
        time.sleep(0.1)
    for i in range(len(loading_text), -1, -1):
        sys.stdout.write("\r" + " " * len(loading_text))
        sys.stdout.write("\r" + loading_text[:i])
        sys.stdout.flush()
        time.sleep(0.05)