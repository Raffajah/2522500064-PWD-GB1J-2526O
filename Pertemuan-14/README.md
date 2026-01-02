# Pertemuan 14 - Sistem Login Modern

Proyek ini adalah implementasi halaman login yang modern dan responsif menggunakan HTML, CSS, JavaScript, dan PHP.

## Fitur Utama

### 🎨 Desain Modern
- UI/UX yang menarik dengan gradient background
- Animasi smooth dan transisi yang halus
- Desain responsif untuk semua device
- Glassmorphism effect dengan backdrop blur

### 🔐 Sistem Login
- Form login dengan validasi
- Toggle password visibility
- Remember me functionality
- Error handling yang user-friendly

### ✨ Interaktivitas
- Animasi floating shapes
- Particle effects pada hover
- Keyboard shortcuts (Ctrl+Enter untuk submit, Escape untuk clear)
- Loading states

### 📱 Responsive Design
- Mobile-first approach
- Adaptive layout untuk berbagai screen size
- Touch-friendly interface

## File Structure

```
Pertemuan-14/
├── login.php          # Halaman login utama
├── dashboard.php      # Halaman dashboard setelah login
├── logout.php         # Script logout
├── style.css          # Styling utama
├── script.js          # JavaScript interaktivitas
└── README.md          # Dokumentasi ini
```

## Cara Penggunaan

1. **Setup Server**: Pastikan Anda memiliki server PHP (Laragon, XAMPP, dll)
2. **Akses Login**: Buka `login.php` di browser
3. **Login Credentials**:
   - Username: `admin`
   - Password: `password`
4. **Dashboard**: Setelah login berhasil, akan diarahkan ke dashboard

## Teknologi Yang Digunakan

- **HTML5**: Struktur dan semantic markup
- **CSS3**: Modern styling dengan animations dan gradients
- **JavaScript**: Interaktivitas dan DOM manipulation
- **PHP**: Server-side processing dan session management

## Fitur JavaScript

- Toggle password visibility
- Form validation
- Loading states
- Particle effects
- Keyboard shortcuts
- Smooth animations

## Security Notes

⚠️ **Peringatan**: Ini adalah implementasi demo untuk educational purposes. Dalam production:

- Gunakan database untuk menyimpan user credentials
- Implementasi proper password hashing (bcrypt, Argon2)
- Gunakan prepared statements untuk mencegah SQL injection
- Implementasi CSRF protection
- Gunakan HTTPS
- Rate limiting untuk mencegah brute force attacks

## Browser Support

- Chrome 80+
- Firefox 75+
- Safari 13+
- Edge 80+

## Demo

Untuk melihat demo, jalankan server PHP dan akses:
```
http://localhost/path-to-project/Pertemuan-14/login.php
```

## Pengembangan Lanjutan

Beberapa fitur yang bisa ditambahkan:
- [ ] Registration system
- [ ] Password reset functionality
- [ ] Two-factor authentication
- [ ] Social login integration
- [ ] User roles and permissions
- [ ] Admin panel
- [ ] API endpoints

---

**Catatan**: Proyek ini dibuat untuk tujuan pembelajaran dan demonstrasi kemampuan front-end development.