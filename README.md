# AI Fire Detection Dashboard

A modern web-based dashboard for real-time fire detection monitoring using **Laravel**, integrated with a **YOLOv8** computer vision system. The dashboard displays live detection status, confidence score, detected persons, live camera feed, and detection history.

---

## 📸 Dashboard Preview

> Add screenshots of your dashboard here.

Example:

- Home Page
- Live Monitoring
- Detection History

---

## ✨ Features

- 🔥 Real-time Fire Detection Status
- 📊 Detection Confidence Score
- 👤 Detected Person Counter
- 📷 Live Camera Monitoring
- 📜 Detection History
- 🟢 System Status Monitoring
- ⚡ Automatic Data Refresh
- 🎨 Modern Responsive UI

---

## 🛠 Tech Stack

| Technology | Description |
|------------|-------------|
| Laravel 12 | Backend Framework |
| PHP 8.2+ | Programming Language |
| SQLite | Database |
| HTML5 | Frontend |
| CSS3 | Styling |
| JavaScript | Dynamic Dashboard |
| Fetch API | Real-Time Data |
| Python API | Detection Integration |

---

## 📂 Project Structure

```
dashboard-keamanan/
│
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
├── routes/
├── storage/
├── artisan
├── composer.json
└── README.md
```

---

## ⚙ Installation

Clone repository

```bash
git clone https://github.com/azooisnine/AI-Fire-Detection-Dashboard.git
```

Enter project

```bash
cd AI-Fire-Detection-Dashboard
```

Install dependencies

```bash
composer install
```

Copy environment

```bash
cp .env.example .env
```

Generate application key

```bash
php artisan key:generate
```

Run migration

```bash
php artisan migrate
```

Start server

```bash
php artisan serve
```

Open browser

```
http://127.0.0.1:8000
```

---

## 🔄 System Workflow

```
YOLOv8 Camera Detection
          │
          ▼
Python Detection API
          │
          ▼
Laravel API
          │
          ▼
SQLite Database
          │
          ▼
Dashboard Monitoring
```

---

## 📊 Dashboard Information

The dashboard displays:

- Fire Status
- Detection Confidence
- Number of Detected Persons
- Last Detection Time
- Live Camera Feed
- Detection History

---

## 🤖 AI Detection

The dashboard receives detection results from a Python application using the YOLOv8 model.

Information received:

- Fire Status
- Confidence Score
- Person Count
- System Status
- Timestamp

---

## 🚀 Future Improvements

- Telegram Notification
- Email Alert
- Multi Camera Support
- User Authentication
- Fire Location Mapping
- Analytics Dashboard

---

## 👨‍💻 Author

**Rasya Muzakki Junior**

Software Engineering Student

SMK Telkom Banjarbaru

GitHub:
https://github.com/azooisnine

## 📄 License

This project is developed for educational and research purposes.