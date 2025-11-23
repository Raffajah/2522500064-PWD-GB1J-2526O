import tkinter as tk
from tkinter import simpledialog, messagebox
import time
import webbrowser

def update_clock():
    now = time.strftime("%H:%M:%S")
    label.config(text=now)
    root.after(1000, update_clock)

def show_login():
    username = simpledialog.askstring("Login", "Username:")
    password = simpledialog.askstring("Login", "Password:", show='*')
    if username == "" and password == "":
        messagebox.showinfo("Login", "Login berhasil! Menuju web...")
        webbrowser.open("https://www.youtube.com/watch?v=DrulgpXAGCA&list=RDMMDrulgpXAGCA&start_radio=1")
    else:
        messagebox.showerror("Login", "Login gagal!")

root = tk.Tk()
root.title("Jam Digital")

label = tk.Label(root, font=("Consolas", 48), bg="black", fg="lime")
label.pack(padx=20, pady=20)

btn_login = tk.Button(root, text="Login", command=show_login)
btn_login.pack(pady=10)

update_clock()
root.mainloop()