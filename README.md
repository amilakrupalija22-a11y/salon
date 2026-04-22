# 💇‍♀️ Salon – Aplikacija za rezervaciju termina

## 📌 Uvod
Ovaj projekat predstavlja full-stack web aplikaciju za salon ljepote.  
Aplikacija omogućava korisnicima da se registruju, prijave i rezervišu termine za usluge poput šišanja, feniranja i drugih tretmana.

Projekat je izrađen u sklopu predmeta **Softver inženjering**.

---

## 📝 Opis aplikacije
Aplikacija simulira sistem rezervacije u salonu. Korisnik može:

- Kreirati račun (registracija putem emaila i lozinke)
- Prijaviti se u sistem
- Odabrati uslugu (npr. šišanje, feniranje...)
- Odabrati datum i vrijeme termina
- Kreirati rezervaciju
- Pregledati svoje rezervacije
- Obrisati rezervaciju

---

## ⚙️ Funkcionalni zahtjevi

### 👤 Korisnici
- Registracija i login (Firebase Authentication)
- Autorizovan pristup sistemu

### 📅 Rezervacije
- Kreiranje nove rezervacije
- Odabir usluge, datuma i vremena
- Prikaz svih rezervacija
- Brisanje rezervacije (DELETE operacija)

---

## 💻 Korištene tehnologije

- HTML – struktura stranice
- CSS – dizajn i stilizacija
- JavaScript – logika aplikacije
- PHP – backend logika
- MySQL – baza podataka (tabele i čuvanje podataka)
- Firebase – autentifikacija korisnika

---

## 🗄️ Baza podataka (MySQL)

Aplikacija koristi najmanje 3 tabele:

- **korisnici** – podaci o korisnicima
- **rezervacije** – termini koje korisnik rezerviše
- **usluge** – dostupne usluge salona

---

## 🔐 Firebase funkcionalnost

- Autentifikacija korisnika (login i registracija)
- Sigurno čuvanje korisničkih podataka
- Povezivanje korisnika sa rezervacijama

---

## 🧠 Implementacija

Frontend je razvijen u HTML, CSS i JavaScript-u, dok backend koristi PHP za komunikaciju sa MySQL bazom.

Firebase se koristi za autentifikaciju korisnika, dok se rezervacije spremaju i upravljaju kroz backend i bazu podataka.

---

## 📌 Zaključak

Ovaj projekat pokazuje kompletan proces izrade web aplikacije od frontend do backend dijela.  
Aplikacija rješava realan problem zakazivanja termina u salonu i omogućava jednostavno upravljanje rezervacijama.

---

## 👩‍💻 Autor
Amila Krupalija – Treća gimnazija Sarajevo
Školska godina 2025/2026
