<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fire Detection Dashboard</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <!-- ================= HEADER ================= -->

    <header class="header">

        <div class="logo">

            Fire Detection AI

        </div>

        <nav>
            <a href="#home">Dashboard</a>
            <a href="#monitoring">Monitoring</a>
            <a href="#history-section">History</a>
        </nav>

        <div id="systemStatus" class="system online">

            ● AKTIF

        </div>

    </header>

    <!-- ================= HERO ================= -->

    <section class="hero" id="home">

        <div class="overlay"></div>

        <div class="hero-content">

            <h1>

                FIRE DETECTION <span>MONITORING SYSTEM</span>

            </h1>

            <p>

                Real-Time Artificial Intelligence Monitoring Dashboard

            </p>

            <!-- ================= DASHBOARD ================= -->

        </div>

    </section>

    <!-- ================= DASHBOARD ================= -->

    <!-- ================= ABOUT ================= -->

<section class="about reveal">

    <div class="about-text">

        <h2>
            Intelligent Fire Detection System
        </h2>

        <p>
            Fire Detection AI merupakan sistem monitoring berbasis Artificial
            Intelligence yang dirancang untuk mendeteksi keberadaan api secara
            real-time menggunakan teknologi Computer Vision dan model YOLO.
            Sistem akan menganalisis setiap frame kamera secara otomatis,
            memberikan tingkat confidence hasil deteksi, serta menyimpan
            histori deteksi sehingga proses monitoring menjadi lebih cepat,
            akurat, dan efisien.
        </p>

    </div>

    <div class="feature-grid">

        <div class="feature-card reveal">

            <div class="icon">🔥</div>

            <h3>Real-Time Detection</h3>

                <p>
                    Mendeteksi api secara langsung melalui kamera dengan proses
                    AI yang berjalan secara real-time.
                </p>

            </div>

            <div class="feature-card reveal">

                <div class="icon">📊</div>

                <h3>Confidence Score</h3>

                <p>
                    Menampilkan tingkat keyakinan AI terhadap objek api yang
                    berhasil terdeteksi.
                </p>

            </div>

            <div class="feature-card reveal">

                <div class="icon">📷</div>

                <h3>Live Monitoring</h3>

                <p>
                    Menampilkan hasil kamera secara langsung beserta bounding box
                    hasil deteksi model YOLO.
                </p>

            </div>

            <div class="feature-card reveal">

                <div class="icon">📜</div>

                <h3>Detection History</h3>

                <p>
                    Menyimpan riwayat deteksi lengkap untuk memudahkan analisis
                    dan evaluasi sistem.
                </p>

            </div>

        </div>

        <div class="scroll-down">

            <a href="#dashboard">

                ↓ Scroll Down to Monitoring

            </a>

        </div>

    </section>

    <section class="emergency reveal">

    <div class="section-title">

        <h2>Emergency Response Guide</h2>

        <p>
            Basic safety procedures that should be followed when the system detects a fire.
        </p>

    </div>

    <div class="emergency-grid">

        <div class="emergency-card reveal">

            <div class="step-number">01</div>

            <div class="step-icon"></div>

            <h3>Fire Detected</h3>

            <p>
                Sistem AI akan mendeteksi api secara real-time dan
                mengubah status menjadi <strong>KRITIS</strong>.
            </p>

        </div>

        <div class="emergency-card reveal">

            <div class="step-number">02</div>

            <div class="step-icon"></div>

            <h3>Evacuate Immediately</h3>

            <p>
                Tetap tenang, bantu orang di sekitar, lalu menuju
                jalur evakuasi dan titik kumpul terdekat.
            </p>

        </div>

        <div class="emergency-card reveal">

            <div class="step-number">03</div>

            <div class="step-icon"></div>

            <h3>Use Fire Extinguisher</h3>

            <p>
                Gunakan APAR apabila api masih kecil dan
                situasi masih aman untuk ditangani.
            </p>

        </div>

        <div class="emergency-card reveal">

            <div class="step-number">04</div>

            <div class="step-icon"></div>

            <h3>Call Fire Department</h3>

            <p>
                Segera hubungi petugas keamanan atau
                pemadam kebakaran apabila api membesar.
            </p>

        </div>

    </div>

</section>

    <div class="section-divider"></div>

    <main class="container" id="dashboard">

        <section class="dashboard-grid" id="monitoring">

            <!-- STATUS -->

            <div class="card reveal">

                <h3>Status</h3>

                <div id="status">

                    AMAN

                </div>

            </div>

            <!-- CONFIDENCE -->

            <div class="card reveal">

                <h3>Detection Confidence</h3>

                <div id="confidence">

                    0.00%

                </div>

            </div>

            <div class="card reveal">

                <h3>Detected Person</h3>

                <div id="personCount">
                    0
                </div>

            </div>

            <!-- LAST UPDATE -->

            <div class="card reveal">

                <h3>Last Update</h3>

                <div id="time">

                    -

                </div>

            </div>

            <!-- CAMERA -->

            <div class="card camera-card reveal">

                <div class="card-title">

                    LIVE CAMERA

                </div>

                <div class="camera">

                    <img
                        id="liveCamera"
                        src="/camera/latest.jpg"
                        alt="Live Camera">

                </div>

            </div>

            <!-- HISTORY -->

            <div class="card history-card reveal" id="history-section">

                <div class="card-title">

                    Detection History

                </div>

                <div class="history">

                    <table>

                        <thead>

                            <tr>

                                <th>Jam</th>

                                <th>Status</th>

                                <th>Confidence</th>

                            </tr>

                        </thead>

                        <tbody id="history">

                            <tr>

                                <td colspan="3">

                                    Belum ada data

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </section>

    </main>

    <!-- ================= FOOTER ================= -->

    <footer>

        Fire Detection Monitoring System Powered by YOLOv8 • Computer Vision • Laravel © 2026

    </footer>

    <!-- ================= SCRIPT ================= -->

    <script>

async function loadData(){

    try{

        const response=await fetch('/api/fire-status');

        const data=await response.json();

        if(!data) return;

        document.getElementById("personCount").textContent = data.person ?? 0;

        const status=document.getElementById("status");
        const confidence=document.getElementById("confidence");
        const waktu=document.getElementById("time");
        const systemBox=document.getElementById("systemStatus");

        const lastUpdate=new Date(data.updated_at);

        const now=new Date();

        const selisih=(now-lastUpdate)/1000;

        if(selisih > 3){

            systemBox.innerHTML = "● NONAKTIF";
            systemBox.className = "system offline";

        }else if(data.status === "KRITIS"){

            systemBox.innerHTML = "● KRITIS";
            systemBox.className = "system critical";

        }else{

            systemBox.innerHTML = "● AKTIF";
            systemBox.className = "system online";

        }

        animateValue(
            document.getElementById("confidence"),
            parseFloat(confidence.dataset.value || 0),
            Number(data.confidence),
            700
        );

        confidence.dataset.value = Number(data.confidence);

        status.textContent = data.status;

        waktu.textContent = lastUpdate.toLocaleString("id-ID");

const camera=document.querySelector(".camera-card");

if(data.status=="KRITIS"){

    status.style.color="#ff3b3b";
    camera.classList.add("alert");

}else{

    status.style.color="#00ff8c";
    camera.classList.remove("alert");

}

    }catch(e){

        console.log(e);

    }
}

async function loadHistory(){


    try{

        const response=await fetch('/api/fire-history');

        const data=await response.json();

        let html="";

        if(data.length==0){

            html=`<tr><td colspan="3">Belum ada data</td></tr>`;

        }else{

            data.forEach(item=>{

                html+=`

                <tr>

                    <td>${new Date(item.created_at).toLocaleTimeString('id-ID')}</td>

                    <td>${item.status}</td>

                    <td>${Number(item.confidence).toFixed(2)}%</td>

                </tr>

                `;

            });

        }

        document.getElementById("history").innerHTML=html;

    }catch(e){

        console.log(e);

    }

}

function updateCamera(){

    const img=document.getElementById("liveCamera");

    img.onerror=function(){

        img.src="/camera/offline.png";

    }

    img.src="/camera/latest.jpg?t="+Date.now();

}

function animateValue(el,start,end,duration){

    let startTime=null;

    function animation(currentTime){

        if(!startTime) startTime=currentTime;

        const progress=Math.min((currentTime-startTime)/duration,1);

        const value=start+(end-start)*progress;

        el.innerHTML=value.toFixed(2)+" %";

        if(progress<1){

            requestAnimationFrame(animation);

        }

    }

    requestAnimationFrame(animation);

}

loadData();

loadHistory();

updateCamera();

setInterval(loadData,1000);

setInterval(loadHistory,1000);

setInterval(updateCamera,1000);

const observer = new IntersectionObserver((entries)=>{

    entries.forEach(entry=>{

        if(entry.isIntersecting){

            entry.target.classList.add("active");

        }

    });

},{
    threshold:0.15
});

document.querySelectorAll(".reveal").forEach(el=>{
    observer.observe(el);
});

window.addEventListener("scroll",()=>{

    const header=document.querySelector(".header");

    if(window.scrollY>40){

        header.classList.add("header-scroll");

    }else{

        header.classList.remove("header-scroll");

    }

});

// PARALLAX HERO

window.addEventListener("scroll", () => {

    const hero = document.querySelector(".hero");

    hero.style.backgroundPositionY = `${window.scrollY * 0.45}px`;

});

// =========================
// SMOOTH SCROLL NAVBAR
// =========================

document.querySelectorAll('a[href^="#"]').forEach(link => {

    link.addEventListener("click", function(e){

        e.preventDefault();

        const target = document.querySelector(this.getAttribute("href"));

        if(!target) return;

        const headerHeight = document.querySelector(".header").offsetHeight;

        const y =
            target.getBoundingClientRect().top +
            window.pageYOffset -
            headerHeight -
            20;

        window.scrollTo({
            top: y,
            behavior: "smooth"
        });

    });

});

    </script>

</body>

</html>