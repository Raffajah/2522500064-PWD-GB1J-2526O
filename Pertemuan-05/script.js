document.getElementById("menutoggle").addEventListener("click", function()
{document.querySelector("nav").classList.toggle("active"); });

document.querySelector("form").addEventListener("submit", function (e) {
 const nama = document.getElementById("txtNama");
const email = document.getElementById("txtEmail");
const pesan = document.getElementById("txtPesan"); 

document.querySelectorAll(".error-msg").forEach(el => el.remove());
[nama, email, pesan].forEach(el => el.style.border = "");
let isValid = true;

if (nama.value.trim().length < 4) {
  showError(nama, "Nama minimal 4 huruf dan tidak boleh kosong.");
  isValid = false;
} else if (!/^[A-Za-z\s]+$/.test(nama.value)) {
  showError(nama, "Nama hanya boleh berisi huruf dan spasi.");
  isValid = false;
}

if (email.value.trim() === "") {
  showError(email, "Email wajib diisi.");
  isValid = false;
} else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
  showError(email, "Format email tidak valid. Contoh: nama@mail.com");
  isValid = false;
}

if (pesan.value.trim().length < 10) {
  showError(pesan, "Pesan minimal 10 karakter agar lebih jelas.");
  isValid = false;
}

if (!isValid) {
  e.preventDefault();
} else {
  alert("Terima kasih, " + nama.value + "!\nPesan Anda telah dikirim.");
} });

alert ("Halo. Saya adalah Rafa Alghifari yang membuat web ini");
alert("Siapa kamu?");
let nama = prompt("Masukkan Nama");
alert("Halo Selamat Datang " + nama + "!");
console.log("Data Berhasil"); 


