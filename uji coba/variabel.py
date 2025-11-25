import time
import sys

print("\033[36m+--------------------+\033[0m")
print("\033[36m|   Halo Semua       |\033[0m")
print("\033[36m+--------------------+\033[0m")

time.sleep(2)

print('Disini saya akan memperkenalkan diri saya')
time.sleep(2)

print('Data saya')
time.sleep(1)

nama = 'Rafa Alghifari'
umur = 18
hobi = 'Main Game'
tinggal = 'Pangkalpinang'
suka = 'Makan'

print('Nama saya adalah', nama)
time.sleep(1)
print('Umur saya adalah', umur)
time.sleep(1)
print('Hobi saya adalah', hobi)
time.sleep(1)
print('Saya tinggal di', tinggal)
time.sleep(1)
print('Dan itulah data diri saya , Terima kasih sudah melihat')

loading_text = "Cmiwwwwwwwwwwwwww :>"
text2 = "udah itu aja sih"


for i in range(len(loading_text) + 1):
    sys.stdout.write("\r" + loading_text[:i])
    sys.stdout.flush()
    time.sleep(0.1)

time.sleep(1)
print()

for i in range(len(text2) + 1):
    sys.stdout.write("\r" + text2[:i])
    sys.stdout.flush()
    time.sleep(0.1)

for i in range(len(text2), -1, -1):
    sys.stdout.write("\r" + " " * len(text2))
    sys.stdout.write("\r" + text2[:i])
    sys.stdout.flush()
    time.sleep(0.05)

print("\nSelesai.")
