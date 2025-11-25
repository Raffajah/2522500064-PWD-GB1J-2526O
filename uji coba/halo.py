#uangtabungan = 100
#uangbank = 500
#total = (uangtabungan+uangbank)
#print ("halo nama saya rafa alghifari dan saya mencoba membuat file py!, Oh ya dan saya juga punya uang" , total)

def calculator():
    print("=== Kalkulator Sederhana ===")
    print("1. Tambah")
    print("2. Kurang")
    print("3. Kali")
    print("4. Bagi")

    pilihan = input("Pilih operasi (1/2/3/4): ")

    angka1 = float(input("Masukkan angka pertama: "))
    angka2 = float(input("Masukkan angka kedua: "))

    if pilihan == "1":
        hasil = angka1 + angka2
        print("Hasilnya:", hasil)

    elif pilihan == "2":
        hasil = angka1 - angka2
        print("Hasilnya:", hasil)

    elif pilihan == "3":
        hasil = angka1 * angka2
        print("Hasilnya:", hasil)

    elif pilihan == "4":
        if angka2 != 0:
            hasil = angka1 / angka2
            print("Hasilnya:", hasil)
        else:
            print("Error: Pembagian dengan nol!")

    else:
        print("Pilihan tidak valid!")

calculator()
